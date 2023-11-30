<?php

namespace App\Http\Livewire;

use App\Models\Inventory;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class InventoryTable extends PowerGridComponent
{
    use ActionButton;

    //  configurar listener personalizados
    protected function getListeners(): array
    {
        return array_merge(
            parent::getListeners(),
            [
                'inventoryAdded',
            ]
        );
    }

    public function inventoryAdded()
    {
        $this->render();
    }

    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            Exportable::make('export')
                ->striped()
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */

    /**
    * PowerGrid datasource.
    *
    * @return Builder<\App\Models\Inventory>
    */
    public function datasource(): Builder
    {
        return Inventory::query()
            ->join('users', function($users) {
                $users->on('inventories.user_id', '=', 'users.id');
            })
            ->join('categories', function($categories) {
                $categories->on('inventories.category_id', '=', 'categories.id');
            })
            ->select([
                    'inventories.*',
                    'users.name as user_name',
                    'categories.name as category_name'
                ]);
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */

    /**
     * Relationship search.
     *
     * @return array<string, array<int, string>>
     */
    public function relationSearch(): array
    {
        return [];
    }

    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    | ❗ IMPORTANT: When using closures, you must escape any value coming from
    |    the database using the `e()` Laravel Helper function.
    |
    */
    public function addColumns(): PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('id')
            ->addColumn('name')

           /** Example of custom column using a closure **/
            ->addColumn('name_lower', function (Inventory $model) {
                return strtolower(e($model->name));
            })

            // ->addColumn('slug')
            ->addColumn('description')
            ->addColumn('quantity')
            ->addColumn('status', function (Inventory $model) {

                switch ((int)$model->status) {

                    case 1:
                        return 'UTILIZADO';
                    case 2: 
                        return 'NO DISPONIBLE';
                    case 3:
                        return 'REPARACION';
                    case 4: 
                        return 'PRESTAMO';
                    case 5:
                        return 'DISPONIBLE';
                    default:
                        return 'DISPONIBLE';
                }
            })
            ->addColumn('add_date_formatted', fn (Inventory $model) => ( !empty($model->add_date) ) ? Carbon::parse($model->add_date)->format('d/m/Y') : 'No aplica' )
            ->addColumn('exp_date_formatted', fn (Inventory $model) => ( !empty($model->exp_date) ) ? Carbon::parse($model->exp_date)->format('d/m/Y') : 'No aplica' )
            ->addColumn('user_id')
            ->addColumn('category_id')
            ->addColumn('created_at_formatted', fn (Inventory $model) => Carbon::parse($model->created_at)->format('d/m/Y H:i:s'))
            ->addColumn('updated_at_formatted', fn (Inventory $model) => Carbon::parse($model->updated_at)->format('d/m/Y H:i:s'));
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |
    */

     /**
     * PowerGrid Columns.
     *
     * @return array<int, Column>
     */
    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->makeInputRange(),

            Column::make('NOMBRE', 'name')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            // Column::make('SLUG', 'slug')
            //     ->sortable()
            //     ->searchable()
            //     ->makeInputText(),

            Column::make('DESCRIPCIÓN', 'description')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('CANTIDAD (Stock)', 'quantity')
                ->makeInputRange(),

            Column::make('ESTADO', 'status'),

            Column::make('FECHA INGRESO', 'add_date_formatted', 'add_date')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker(),

            Column::make('FECHA EXPIRACIÓN', 'exp_date_formatted', 'exp_date')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker(),

            // Column::make('USER ID', 'user_id')
            //     ->makeInputRange(),
            Column::make('USUARIO REGISTRO', 'user_name'),

            // Column::make('CATEGORY ID', 'category_id')
            //     ->makeInputRange(),
            Column::make('CATEGORIA', 'category_name'),

            Column::make('FECHA CREACIÓN', 'created_at_formatted', 'created_at')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker(),

            Column::make('FECHA ACTUALIZACIÓN', 'updated_at_formatted', 'updated_at')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker(),

        ]
;
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable the method below only if the Routes below are defined in your app.
    |
    */

     /**
     * PowerGrid Inventory Action Buttons.
     *
     * @return array<int, Button>
     */

    
    public function actions(): array
    {
       return [
           //  TODO: elaborar un modal para ver el detalle de la categoría creada
           Button::make('show', html_entity_decode('<i class="fa fa-eye" aria-hidden="true"></i>'))
                ->class('btn btn-outline-success mb-2')
                ->route('admin.inventories.index', ['inventory' => 'id'])
                ->method('get'),

            Button::make('edit', html_entity_decode('<i class="fa fa-pencil-square-o" aria-hidden="true"></i>'))
                ->class('btn btn-outline-primary mb-2')
                ->emit('edit', ['inventory' => 'id']),

            Button::make('destroy', html_entity_decode('<i class="fa fa-trash-o" aria-hidden="true"></i>'))
                ->class('btn btn-outline-danger mb-2')
                ->emit('deleteCategory', ['inventory' => 'id']),
        ];
    }
    

    /*
    |--------------------------------------------------------------------------
    | Actions Rules
    |--------------------------------------------------------------------------
    | Enable the method below to configure Rules for your Table and Action Buttons.
    |
    */

     /**
     * PowerGrid Inventory Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($inventory) => $inventory->id === 1)
                ->hide(),
        ];
    }
    */
}
