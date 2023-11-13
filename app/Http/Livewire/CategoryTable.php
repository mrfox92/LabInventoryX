<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Storage;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};
use Illuminate\Support\Str;

final class CategoryTable extends PowerGridComponent
{
    use ActionButton;

    //  configurar listener personalizados
    protected function getListeners(): array
    {
        return array_merge(
            parent::getListeners(),
            [
                'categoryAdded',
            ]
        );
    }

    public function categoryAdded()
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
    * @return Builder<\App\Models\Category>
    */
    public function datasource(): Builder
    {
        return Category::query();
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
            ->addColumn('name_lower', function (Category $model) {
                return strtolower(e($model->name));
            })

            ->addColumn('slug')
            ->addColumn('description', function (Category $model) {
                return Str::words(e($model->description), 5);
            })
            ->addColumn('image', function (Category $model) {
                return html_entity_decode( '<img src="'. e(Storage::url($model->image)) .'" class="img-thumbnail" />' ); 
            })
            ->addColumn('icon', function (Category $model) {
                return html_entity_decode($model->icon);
            })
            ->addColumn('created_at_formatted', fn (Category $model) => Carbon::parse($model->created_at)->format('d/m/Y H:i:s'))
            ->addColumn('updated_at_formatted', fn (Category $model) => Carbon::parse($model->updated_at)->format('d/m/Y H:i:s'));
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

            Column::make('IMAGE', 'image')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('ICON', 'icon')
                ->sortable()
                ->searchable()
                ->makeInputText(),

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
     * PowerGrid Category Action Buttons.
     *
     * @return array<int, Button>
     */

    
    public function actions(): array
    {
       return [

            Button::make('show', html_entity_decode('<i class="fa fa-eye" aria-hidden="true"></i>'))
                    ->class('btn btn-outline-success mb-2')
                    ->route('admin.categories.show', ['category' => 'id'])
                    ->method('get'),

            Button::make('edit', html_entity_decode('<i class="fa fa-pencil-square-o" aria-hidden="true"></i>'))
                ->class('btn btn-outline-primary mb-2')
                ->emit('edit', ['category' => 'id']),

            Button::make('destroy', html_entity_decode('<i class="fa fa-trash-o" aria-hidden="true"></i>'))
                ->class('btn btn-outline-danger mb-2')
                ->emit('deleteCategory', ['category' => 'id']),
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
     * PowerGrid Category Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($category) => $category->id === 1)
                ->hide(),
        ];
    }
    */
}
