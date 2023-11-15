<?php

namespace Database\Factories;

use App\Models\Inventory;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class InventoryFactory extends Factory
{

    protected $model = Inventory::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence(3);

        $user = User::all()->random();
        $category = Category::all()->random();

        return [
            'name'              =>  $name,
            'slug'              =>  Str::slug( $name ),
            'description'       =>  $this->faker->text(),
            'quantity'          =>  $this->faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
            'status'            =>  $this->faker->randomElement([Inventory::UTILIZADO, Inventory::NODISPONIBLE, Inventory::REPARACION, Inventory::PRESTAMO, Inventory::DISPONIBLE]),
            // 'add_date'       =>  
            // 'exp_date'       =>
            'user_id'           =>  $user->id,
            'category_id'       =>  $category->id,
        ];
    }
}
