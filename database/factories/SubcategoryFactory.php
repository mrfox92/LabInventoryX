<?php

namespace Database\Factories;

use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubcategoryFactory extends Factory
{
    protected $model = Subcategory::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //  subcategories/nombre de la imagen
            // 'image' =>  'subcategories/' . $this->faker->image('public/storage/subcategories', 640, 480, null, false)
        ];
    }
}
