<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionsGlobalConnexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
//        Permission::truncate();
        Permission::create(['name' => 'list students']);
        Permission::create(['name' => 'create students']);
        Permission::create(['name' => 'show students']);
        Permission::create(['name' => 'edit students']);
        Permission::create(['name' => 'delete students']);

        // create roles and assign existing permissions
        $role2 = Role::create(['name' => 'admin']);     // Admin

        $role2->givePermissionTo('list students');
        $role2->givePermissionTo('create students');
        $role2->givePermissionTo('show students');
        $role2->givePermissionTo('edit students');
        $role2->givePermissionTo('delete students');

        $role3 = Role::create(['name' => 'student']);        // student
        $role3->givePermissionTo('show students');
        $role3->givePermissionTo('edit students');

        $role6 = Role::create(['name' => 'super-admin']);  // root
        // Get all permissions given via 'Gate::before' rule; see AuthServiceProvider

    }
}
