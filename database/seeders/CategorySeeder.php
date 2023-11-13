<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name'          =>  'Inmuebles',
                'slug'          =>  Str::slug('Inmuebles'),
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'icon'          =>  '<i class="fas fa-mobile-alt"></i>'
            ],

            [
                'name'          =>  'Negocios y empleos',
                'slug'          =>  Str::slug('Negocios y empleos'),
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'icon'          =>  '<i class="fas fa-tv"></i>'
            ],

            [
                'name'          =>  'Moda',
                'slug'          =>  Str::slug('Moda'),
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'icon'          =>  '<i class="fas fa-gamepad"></i>'
            ],

            [
                'name'          =>  'Salud y Belleza',
                'slug'          =>  Str::slug('Salud y Belleza'),
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'icon'          =>  '<i class="fas fa-laptop"></i>'
            ],

            [
                'name'          =>  'Tiempo Libre',
                'slug'          =>  Str::slug('Tiempo Libre'),
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'icon'          =>  '<i class="fas fa-tshirt"></i>'
            ],

            [
                'name'          =>  'Tecnología',
                'slug'          =>  Str::slug('Tecnología'),
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'icon'          =>  '<i class="fas fa-tshirt"></i>'
            ]

        ];

        foreach ($categories as $category) {
            
            Category::factory(1)->create($category);
        }
    }
}
