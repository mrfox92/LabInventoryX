<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'  =>  'Test 1',
            'email' =>  'test1@test.com',
            'password'  =>  bcrypt('Test1234')
        ])->assignRole('Admin');


        User::create([
            'name'  =>  'Administrador',
            'email' =>  'davidalvarez54@gmail.com',
            'password'  =>  bcrypt('Administrador2023$')
        ])->assignRole('Admin');

    }
}
