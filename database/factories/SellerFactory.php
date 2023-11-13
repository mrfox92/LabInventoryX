<?php

namespace Database\Factories;

use App\Models\Commune;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SellerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->userName();
        $commune = Commune::all()->random();
        $user = User::all()->random();

        return [
            'name'          =>  $name,
            'slug'          =>  Str::slug($name),
            'description'   =>  $this->faker->text(),
            'bio'           =>  $this->faker->text(),
            'website_url'   =>  $this->faker->url(),
            'address'       =>  $this->faker->address(),
            'phone'         =>  $this->faker->phoneNumber(),
            // 'picture'    =>  
            // 'banner'     =>  
            'user_id'       =>  $user->id,
            'commune_id'    =>  $commune->id
        ];
    }
}
