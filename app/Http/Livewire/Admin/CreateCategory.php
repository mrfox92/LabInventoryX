<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class CreateCategory extends Component
{
    use WithFileUploads;

    protected $listeners = ['delete', 'edit'];
    //  para crear un input:file nuevo una vez que se realiza el reset del form
    public $rand;
    public $category;
    
    public $createForm = [
        'name'          =>  null,
        'slug'          =>  null,
        'description'   =>  null,
        'icon'          =>  null,
        'image'         =>  null
    ];

    public $editForm = [
        'open'          =>  false,
        'name'          =>  null,
        'slug'          =>  null,
        'description'   =>  null,
        'icon'          =>  null,
        'image'         =>  null
    ];

    public $editImage;
    
    protected $rules = [
        'createForm.name'           =>  'required',
        'createForm.slug'           =>  'required|unique:categories,slug',
        'createForm.description'    =>  'required',
        'createForm.icon'           =>  'required',
        'createForm.image'          =>  'required|image|max:1024',
    ];
    
    protected $validationAttributes = array(
        
        //  create form
        'createForm.name'           =>  'nombre',
        'createForm.slug'           =>  'slug',
        'createForm.description'    =>  'descripción',
        'createForm.icon'           =>  'icono',
        'createForm.image'          =>  'imagen',

        //  edit form
        'editForm.name'             =>  'nombre',
        'editForm.slug'             =>  'slug',
        'editForm.description'      =>  'descripción',
        'editForm.icon'             =>  'icono',
        'editImage'                 =>  'imagen'
    );

    public function mount()
    {
        $this->rand = rand();
    }

    public function updatedCreateFormName($value)
    {
        $this->createForm['slug'] = Str::slug($value);
    }

    public function updatedEditFormName($value)
    {
        $this->editForm['slug'] = Str::slug($value);
    }
    
    public function save()
    {
        $this->validate();

        $imageUrl = $this->createForm['image']->store('categories');

        Category::create([
            'name'          =>  $this->createForm['name'],
            'slug'          =>  $this->createForm['slug'],
            'description'   =>  $this->createForm['description'],
            'icon'          =>  $this->createForm['icon'],
            'image'         =>  $imageUrl
        ]);

        //  random value para 
        $this->rand = rand();
        //  limpiar formulario
        $this->reset('createForm');
        //  emitimos el evento para que se actualice la información con el nuevo registro en el datatable de category
        $this->emitTo('category-table', 'categoryAdded');
        //  evento para notificacion de registro creado
        $this->emit('saved');
    }

    public function edit(Category $category)
    {

        //  se hace reset de imagen temporal cargada en formulario de edición
        $this->reset(['editImage']);
        //  reset a validaciones del modal
        $this->resetValidation();
        //  inicializamos la propiedad con data categoria a editar
        $this->category = $category;

        $this->editForm['open']         = true;
        $this->editForm['name']         = $category->name;
        $this->editForm['slug']         = $category->slug;
        $this->editForm['description']  = $category->description;
        $this->editForm['icon']         = $category->icon;
        $this->editForm['image']        = $category->image;
        // $this->editForm['image']        = Storage::url($category->image);
        
    }

    public function update()
    {
        $rules = [
            'editForm.name'         =>  'required',
            'editForm.slug'         =>  'required|unique:categories,slug,' . $this->category->id,
            'editForm.description'  =>  'required',
            'editForm.icon'         =>  'required'
        ];

        if ($this->editImage)
        {
            $rules['editImage'] = 'image|max:1024';
        }
        
        $this->validate($rules);

        if ($this->editImage)
        {
            //  borrar la imagen anterior
            Storage::delete($this->editForm['image']);
            //  subimos la nueva imagen y reemplazamos valor de editForm['image']
            $this->editForm['image'] = $this->editImage->store('categories');
        }

        //  actualizamos la data del registro
        $this->category->update($this->editForm);

        //  reset form modal
        $this->reset(['editForm', 'editImage']);

        //  emitimos evento para actualizar la data en el datatable
        $this->emitTo('category-table', 'categoryAdded');

    }

    public function delete(Category $category)
    {
        $category->delete();
        //  to refresh datatable
        $this->emitTo('category-table', 'categoryAdded');
    }

    public function render()
    {
        return view('livewire.admin.create-category');
    }

}
