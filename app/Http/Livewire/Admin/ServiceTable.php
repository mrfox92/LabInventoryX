<?php

namespace App\Http\Livewire\Admin;

use App\Models\Service;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class ServiceTable extends PowerGridComponent
{
    use ActionButton;

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
    * @return Builder<\App\Models\Service>
    */
    public function datasource(): Builder
    {
        return Service::query()
            ->join('subcategories', function ($subcategories) {
                $subcategories->on('services.subcategory_id', '=', 'subcategories.id');
            })
            ->join('types', function ($types) {
                $types->on('services.type_id', '=', 'types.id');
            })
            ->join('sellers', function ($sellers) {
                $sellers->on('services.seller_id', '=', 'sellers.id');
            })
            ->select([
                'services.*',
                'subcategories.name as subcategory_name',
                'types.name as type_name',
                'sellers.name as seller_name'
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
            ->addColumn('name_lower', function (Service $model) {
                return strtolower(e($model->name));
            })

            ->addColumn('slug')
            ->addColumn('description')
            ->addColumn('price')
            ->addColumn('stock')
            ->addColumn('space_available')
            ->addColumn('status', function (Service $model) {
                return strtoupper(e($model->status == Service::BORRADOR ? 'borrador' : 'publicado'));
            })
            ->addColumn('av_status', function (Service $model) {

                $av_status = 'Disponible';

                switch ($model->av_status) {
                    case Service::AVAILABLE:
                        $av_status = 'Disponible';
                        break;
                    case Service::UNDERWAY:
                        $av_status = 'En Curso';
                        break;
                    case Service::FINISHED:
                        $av_status = 'Finalizado';
                        break;
                }

                return strtoupper( $av_status );

            })
            ->addColumn('init_at_formatted', fn (Service $model) => Carbon::parse($model->init_at)->format('d/m/Y H:i:s'))
            ->addColumn('finished_at_formatted', fn (Service $model) => Carbon::parse($model->finished_at)->format('d/m/Y H:i:s'))
            ->addColumn('seller_id')
            ->addColumn('type_id')
            ->addColumn('subcategory_id')
            ->addColumn('created_at_formatted', fn (Service $model) => Carbon::parse($model->created_at)->format('d/m/Y H:i:s'))
            ->addColumn('updated_at_formatted', fn (Service $model) => Carbon::parse($model->updated_at)->format('d/m/Y H:i:s'));
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

            Column::make('NAME', 'name')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('SLUG', 'slug')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('DESCRIPTION', 'description')
                ->sortable()
                ->searchable(),

            Column::make('PRICE', 'price')
                ->makeInputRange(),

            Column::make('STOCK', 'stock')
                ->makeInputRange(),

            Column::make('SPACE AVAILABLE', 'space_available')
                ->makeInputRange(),

            Column::make('STATUS', 'status')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('AV STATUS', 'av_status')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('INIT AT', 'init_at_formatted', 'init_at')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker(),

            Column::make('FINISHED AT', 'finished_at_formatted', 'finished_at')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker(),

            // Column::make('SELLER ID', 'seller_id')
            //     ->makeInputRange(),
            Column::make('SELLER', 'seller_name')
                ->sortable()
                ->searchable(),
                // ->makeInputText(),

            // Column::make('TYPE ID', 'type_id')
            //     ->makeInputRange(),
            Column::make('TYPE', 'type_name')
                ->sortable()
                ->searchable(),

            // Column::make('SUBCATEGORY ID', 'subcategory_id')
            //     ->makeInputRange(),
            Column::make('SUBCATEGORY', 'subcategory_name')
                ->sortable()
                ->searchable(),

            Column::make('CREATED AT', 'created_at_formatted', 'created_at')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker(),

            Column::make('UPDATED AT', 'updated_at_formatted', 'updated_at')
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
     * PowerGrid Service Action Buttons.
     *
     * @return array<int, Button>
     */

    
    public function actions(): array
    {
       return [

            Button::make('edit', 'Editar')
                ->class('btn btn-outline-primary mb-2')
                ->route('admin.users.edit', ['user' => 'id']),

            Button::make('destroy', 'Eliminar')
                ->class('btn btn-outline-danger mb-2')
                ->route('admin.users.destroy', ['user' => 'id'])
                ->method('delete'),
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
     * PowerGrid Service Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($service) => $service->id === 1)
                ->hide(),
        ];
    }
    */
}
