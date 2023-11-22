<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;

class CreateInventory extends Component
{
    protected $listeners = ['delete', 'edit'];

    public $rand;
    public $inventory;

    public $createForm = [
        'name'          =>  NULL,
        'slug'          =>  NULL,
        'description'   =>  NULL,
        'quantity'      =>  NULL,
        'status'        =>  NULL,
        'add_date'      =>  NULL,
        'exp_date'      =>  NULL,
        'user_id'       =>  NULL,
        'category_id'   =>  NULL,
    ];

    public $editForm = [
        'name'          =>  NULL,
        'slug'          =>  NULL,
        'description'   =>  NULL,
        'quantity'      =>  NULL,
        'status'        =>  NULL,
        'add_date'      =>  NULL,
        'exp_date'      =>  NULL,
        'user_id'       =>  NULL,
        'category_id'   =>  NULL,
    ];

    protected $rules = [
        'createForm.name'           =>  'required',
        'createForm.slug'           =>  'required|unique:inventories,slug',
        'createForm.description'    =>  'required',
        'createForm.quantity'       =>  'required',
        'createForm.status'         =>  'required',
        'createForm.add_date'       =>  'required',
        'createForm.exp_date'       =>  'required',
        'createForm.user_id'        =>  'required',
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
        'createForm.user_id'        =>  'id usuario',
        'createForm.category_id'    =>  'id categoria',
    );

    public function mount()
    {
        $this->rand = rand();
    }

    public function render()
    {
        return view('livewire.admin.create-inventory');
    }
}
