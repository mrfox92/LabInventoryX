<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);

        
        //  Admin
        Permission::create(['name'  =>   'admin.home'])->syncRoles([$role1]);

        Permission::create(['name'  =>  'admin.users.index'])->syncRoles([$role1]);
        Permission::create(['name'  =>  'admin.users.create'])->syncRoles([$role1]);
        Permission::create(['name'  =>  'admin.users.edit'])->syncRoles([$role1]);
        Permission::create(['name'  =>  'admin.users.destroy'])->syncRoles([$role1]);

        Permission::create(['name'  =>  'admin.categories.index'])->syncRoles([$role1]);
        Permission::create(['name'  =>  'admin.categories.create'])->syncRoles([$role1]);
        Permission::create(['name'  =>  'admin.categories.edit'])->syncRoles([$role1]);
        Permission::create(['name'  =>  'admin.categories.destroy'])->syncRoles([$role1]);

        Permission::create(['name'  =>  'admin.services.index'])->syncRoles([$role1]);
        Permission::create(['name'  =>  'admin.services.create'])->syncRoles([$role1]);
        Permission::create(['name'  =>  'admin.services.edit'])->syncRoles([$role1]);
        Permission::create(['name'  =>  'admin.services.destroy'])->syncRoles([$role1]);

        //  TODO: inventory permissions
        
    }
}
