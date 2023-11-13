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

        // Roles users
        $this->call(RoleSeeder::class);
        //  Users
        $this->call(UserSeeder::class);
        //  seeders
        $this->call(CategorySeeder::class);
        //  services
        //  $this->call(ServiceSeeder::class);
    }
}
