<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //  eliminamos los directorios categorias
        Storage::deleteDirectory('categories');
        //  eliminamos los directorios subcategorias
        Storage::deleteDirectory('subcategories');
        //  eliminamos los directorios servicios
        Storage::deleteDirectory('services');
        //  creamos los directorios categorias
        Storage::makeDirectory('categories');
        //  creamos los directorios subcategorias
        // Storage::makeDirectory('subcategories');
        //  creamos los directorios servicios
        Storage::makeDirectory('services');

        //  regiones
        $this->call(RegionSeeder::class);
        //  comunas
        $this->call(CommuneSeeder::class);
        //  types
        $this->call(TypeSeeder::class);
        //  Roles
        $this->call(RoleSeeder::class);
        //  Users
        $this->call(UserSeeder::class);
        //  seeders
        $this->call(CategorySeeder::class);
        //  subcategories
        $this->call(SubcategorySeeder::class);
        //  services
        $this->call(ServiceSeeder::class);
    }
}
