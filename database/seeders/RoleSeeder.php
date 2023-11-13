<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{

    // const ADMIN = 1;
    // const SELLER = 2;
    // const CUSTOMER = 3;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Seller']);
        $role3 = Role::create(['name' => 'Customer']);

        
        //  Admin
        // Permission::create(['name'  =>   'admin.home'])->syncRoles([$role1, $role2]);
        Permission::create(['name'  =>   'admin.home'])->syncRoles([$role1]);

        Permission::create(['name'  =>  'admin.users.index'])->syncRoles([$role1]);
        Permission::create(['name'  =>  'admin.users.create'])->syncRoles([$role1]);
        Permission::create(['name'  =>  'admin.users.edit'])->syncRoles([$role1]);
        Permission::create(['name'  =>  'admin.users.destroy'])->syncRoles([$role1]);

        Permission::create(['name'  =>  'admin.categories.index'])->syncRoles([$role1]);
        Permission::create(['name'  =>  'admin.categories.create'])->syncRoles([$role1]);
        Permission::create(['name'  =>  'admin.categories.edit'])->syncRoles([$role1]);
        Permission::create(['name'  =>  'admin.categories.destroy'])->syncRoles([$role1]);

        Permission::create(['name'  =>  'admin.subcategories.index'])->syncRoles([$role1]);
        Permission::create(['name'  =>  'admin.subcategories.create'])->syncRoles([$role1]);
        Permission::create(['name'  =>  'admin.subcategories.edit'])->syncRoles([$role1]);
        Permission::create(['name'  =>  'admin.subcategories.destroy'])->syncRoles([$role1]);

        Permission::create(['name'  =>  'admin.services.index'])->syncRoles([$role1]);
        Permission::create(['name'  =>  'admin.services.create'])->syncRoles([$role1]);
        Permission::create(['name'  =>  'admin.services.edit'])->syncRoles([$role1]);
        Permission::create(['name'  =>  'admin.services.destroy'])->syncRoles([$role1]);

        //  Seller

        Permission::create(['name'  =>  'seller.services.index'])->syncRoles([$role2]);
        Permission::create(['name'  =>  'seller.services.create'])->syncRoles([$role2]);
        Permission::create(['name'  =>  'seller.services.edit'])->syncRoles([$role2]);
        Permission::create(['name'  =>  'seller.services.destroy'])->syncRoles([$role2]);
        
    }
}
