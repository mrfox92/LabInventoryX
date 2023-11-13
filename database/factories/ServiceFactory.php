<?php

namespace Database\Factories;

use App\Models\Seller;
use App\Models\Service;
use App\Models\Subcategory;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ServiceFactory extends Factory
{

    protected $model = Service::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence(3);
        $subcategory = Subcategory::all()->random();
        $seller = Seller::all()->random();
        $type = Type::all()->random();

        return [
            'name'              =>  $name,
            'slug'              =>  Str::slug($name),
            'description'       =>  $this->faker->text(),
            'price'             =>  $this->faker->randomElement([10000, 5000, 2500, 20000, 50000, null]),
            'stock'             =>  $this->faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, null]),
            'space_available'   =>  $this->faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, null]),
            'status'            =>  $this->faker->randomElement([Service::BORRADOR, Service::PUBLICADO]),
            'av_status'         =>  $this->faker->randomElement([Service::AVAILABLE, Service::UNDERWAY, Service::FINISHED]),
            // 'init_at'           =>  
            // 'finished_at'       =>
            'seller_id'         =>  $seller->id,
            'type_id'           =>  $type->id,
            'subcategory_id'    =>  $subcategory->id
        ];
    }
}
