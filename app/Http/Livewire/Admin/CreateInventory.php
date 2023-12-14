<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Inventory;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class CreateInventory extends Component
{
    protected $listeners = ['delete', 'edit'];

    public $statusOptions = [
        \App\Models\Inventory::UTILIZADO    => 'UTILIZADO',
        \App\Models\Inventory::NODISPONIBLE => 'NO DISPONIBLE',
        \App\Models\Inventory::REPARACION   => 'REPARACION',
        \App\Models\Inventory::PRESTAMO     => 'PRESTAMO',
        \App\Models\Inventory::DISPONIBLE   => 'DISPONIBLE',
    ];

    public $rand;
    public $inventory;
    public $categories;

    public $createForm = [
        'name'          =>  NULL,
        'slug'          =>  NULL,
        'description'   =>  NULL,
        'quantity'      =>  NULL,
        'status'        =>  NULL,
        'add_date'      =>  NULL,
        'exp_date'      =>  NULL,
        'category_id'   =>  NULL,
    ];

    public $editForm = [
        'open'          =>  FALSE,
        'name'          =>  NULL,
        'slug'          =>  NULL,
        'description'   =>  NULL,
        'quantity'      =>  NULL,
        'status'        =>  NULL,
        'add_date'      =>  NULL,
        'exp_date'      =>  NULL,
        'category_id'   =>  NULL,
    ];

    protected $rules = [
        'createForm.name'           =>  'required',
        'createForm.slug'           =>  'required|unique:inventories,slug',
        'createForm.description'    =>  'required',
        'createForm.quantity'       =>  'required|integer|min:0',
        'createForm.status'         =>  'required',
        'createForm.add_date'       =>  'nullable|date|date_format:Y-m-d',
        'createForm.exp_date'       =>  'nullable|date|date_format:Y-m-d|after_or_equal:createForm.add_date',
        'createForm.category_id'    =>  'required',
    ];

    protected $validationAttributes = array(
        'createForm.name'           =>  'nombre',
        'createForm.slug'           =>  'slug',
        'createForm.description'    =>  'descripción',
        'createForm.quantity'       =>  'cantidad',
        'createForm.status'         =>  'estado',
        'createForm.add_date'       =>  'fecha ingreso',
        'createForm.exp_date'       =>  'fecha vencimiento',
        'createForm.category_id'    =>  'categoria',
    );

    public function mount()
    {
        $this->rand = rand();
    }

    public function updatedCreateFormName($value) {

        $this->createForm['slug'] = Str::slug($value);
    }

    public function updatedEditFormName($value) {

        $this->createForm['slug'] = Str::slug($value);
    }

    public function save() {
        $this->validate();

        // dd($this->createForm);

        Inventory::create([
            'name'          => $this->createForm['name'],
            'slug'          => $this->createForm['slug'],
            'description'   => $this->createForm['description'],
            'quantity'      => $this->createForm['quantity'],
            'status'        => $this->createForm['status'],
            'add_date'      => $this->createForm['add_date'],
            'exp_date'      => $this->createForm['exp_date'],
            'user_id'       => Auth::id(),
            'category_id'   => $this->createForm['category_id'],
        ]);

        $this->rand = rand();
        $this->reset('createForm');
        //  emitimos el evento para que se actualice la información con el nuevo registro en el datatable de inventory table
        $this->emitTo('inventory-table', 'inventoryAdded');
        $this->emit('saved');
    }

    public function edit( Inventory $inventory ) {

        $this->resetValidation();

        $this->inventory = $inventory;

        $this->editForm['open']         = TRUE;
        $this->editForm['name']         = $inventory->name;
        $this->editForm['slug']         = $inventory->slug;
        $this->editForm['description']  = $inventory->description;
        $this->editForm['quantity']     = $inventory->quantity;
        $this->editForm['status']       = $inventory->status;
        $this->editForm['add_date']     = $inventory->add_date ? Carbon::parse( $inventory->add_date )->format('Y-m-d') : NULL;
        $this->editForm['exp_date']     = $inventory->exp_date ? Carbon::parse( $inventory->exp_date )->format('Y-m-d') : NULL;
        $this->editForm['user_id']      = Auth::id();
        $this->editForm['category_id']  = $inventory->category_id;

    }

    public function update() {
        $rules = [
            'editForm.name'         =>  'required',
            'editForm.slug'         =>  'required|unique:inventory,slug,' . $this->inventory->id,
            'editForm.description'  =>  'required',
            'editForm.quantity'     =>  'required|integer|min:0',
            'editForm.status'       =>  'required',
            'editForm.add_date'     =>  'nullable|date|date_format:Y-m-d',
            'editForm.exp_date'     =>  'nullable|date|date_format:Y-m-d|after_or_equal:editForm.add_date',
            'editForm.category_id'  =>  'required',
        ];

        $this->validate( $rules );

        $this->inventory->update($this->editForm);
    }

    public function render()
    {
        $this->categories = Category::all();
        return view('livewire.admin.create-inventory');
    }
}
