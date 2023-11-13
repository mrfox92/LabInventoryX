<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class SubcategoryTable extends PowerGridComponent
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
    * @return Builder<\App\Models\Subcategory>
    */
    public function datasource(): Builder
    {
        return Subcategory::query()
            ->join('categories', function ($categories) {
                $categories->on('subcategories.category_id', '=', 'categories.id');
            })
            ->select([
                'subcategories.*',
                'categories.name as category_name',
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
            ->addColumn('name_lower', function (Subcategory $model) {
                return strtolower(e($model->name));
            })

            ->addColumn('slug')
            ->addColumn('category_id')
            ->addColumn('created_at_formatted', fn (Subcategory $model) => Carbon::parse($model->created_at)->format('d/m/Y H:i:s'))
            ->addColumn('updated_at_formatted', fn (Subcategory $model) => Carbon::parse($model->updated_at)->format('d/m/Y H:i:s'));
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
                
            Column::make(__('CATEGORY'), 'category_name', 'categories.name')
                ->searchable()
                ->sortable(),

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
     * PowerGrid Subcategory Action Buttons.
     *
     * @return array<int, Button>
     */

    
    public function actions(): array
    {
       return [
           Button::make('edit', html_entity_decode('<i class="fa fa-trash-o" aria-hidden="true"></i>'))
               ->class('btn btn-outline-primary mb-2')
               ->route('admin.subcategories.edit', ['subcategory' => 'id']),

           Button::make('destroy', html_entity_decode('<i class="fa fa-pencil-square-o" aria-hidden="true"></i>'))
               ->class('btn btn-outline-danger mb-2')
               ->route('admin.subcategories.destroy', ['subcategory' => 'id'])
               ->method('delete')
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
     * PowerGrid Subcategory Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($subcategory) => $subcategory->id === 1)
                ->hide(),
        ];
    }
    */
}
