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

        //  seller 1
        $seller1 = User::create([
            'name'  =>  'Test 2',
            'email' =>  'test2@test.com',
            'password'  =>  bcrypt('Test1234')
        ])->assignRole('Seller');
        //  Seller 1
        Seller::factory(1)->create([
            'name'          =>  'Test Store 1',
            'slug'          =>  Str::slug('Test Store 1'),
            'description'   =>  'Lorem ipsum dolor sit amet',
            'bio'           =>  'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem praesentium alias a? Repudiandae libero nam impedit harum quis fugiat rerum porro deserunt iusto quibusdam dolores cum nobis temporibus, maiores nesciunt?',  
            'user_id'       =>  $seller1->id
        ]);

        //  create 10 sellers
        User::factory(10)->create()->each(function ($user) {
            //  asignar rol
            $user->assignRole('Seller');
            //  tabla relacion con rol seller
            Seller::factory(1)->create([
                'user_id'       =>  $user->id
            ]);
        });

        //  customer 1
        $customer1 = User::create([
            'name'  =>  'Test 3',
            'email' =>  'test3@test.com',
            'password'  =>  bcrypt('Test1234')
        ])->assignRole('Customer');

        //  customer 1
        Customer::factory(1)->create([
            'user_id'   =>  $customer1->id
        ]);

        //  user customers
        User::factory(20)->create()->each(function ($user) {
            //  asignar rol
            $user->assignRole('Customer');
            //  tabla relacion con rol customer
            Customer::factory(1)->create([
                'user_id'   =>  $user->id
            ]);
        });
    }
}
