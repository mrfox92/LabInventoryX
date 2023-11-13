<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Subcategory;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class ShowCategory extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['delete'];

    public $category, $subcategory;

    public $createForm = [
        'name'          =>  null,
        'slug'          =>  null
    ];

    public $editForm = [
        'open'          =>  false,
        'name'          =>  null,
        'slug'          =>  null
    ];

    protected $rules = [
        'createForm.name'           =>  'required',
        'createForm.slug'           =>  'required|unique:subcategories,slug',
    ];

    protected $validationAttributes = array(
        
        //  create form
        'createForm.name'           =>  'nombre',
        'createForm.slug'           =>  'slug',

        //  edit form
        'editForm.name'             =>  'nombre',
        'editForm.slug'             =>  'slug',
    );

    public function mount(Category $category)
    {
        $this->category = $category;
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
        $this->category->subcategories()->create($this->createForm);

        $this->reset('createForm');

        $this->render();

    }


    public function edit(Subcategory $subcategory)
    {

        $this->resetValidation();
        $this->subcategory = $subcategory;

        $this->editForm['open'] = true;
        $this->editForm['name'] = $subcategory->name;
        $this->editForm['slug'] = $subcategory->slug;
    }

    public function update() 
    {
        $this->validate([
            'editForm.name'   =>  'required',
            'editForm.slug'   =>  'required|unique:subcategories,slug,' . $this->subcategory->id,
        ]);

        $this->subcategory->update($this->editForm);
        $this->render();
        $this->reset('editForm');

    }

    public function delete(Subcategory $subcategory)
    {
        $subcategory->delete();
        $this->render();
    }

    public function render()
    {
        $breadcrumbs = [
            [
                'title'     =>  'Inicio',
                'icon'      =>  'bx bx-home-alt',
                'url'       =>  'dashboard'
            ],
            [
                'name'      =>  'Categorias',
                'url'       =>  'admin.categories.index'
            ],
            [
                'name'      =>  $this->category->name,
                'url'       =>  'admin.categories.show',
                'active'    =>  true
            ]
        ];

        return view('livewire.admin.show-category')
                ->with('breadcrumbs', $breadcrumbs)
                ->with('subcategories', Subcategory::where('category_id', $this->category->id)->orderBy('id', 'desc')->paginate(2));
    }
}
