<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allPermissions = ['Read','Write','Create'];
        foreach ($allPermissions as $permission) {
            Permission::updateOrCreate(['name' => $permission]);
        }

        $superAdmin = Role::whereName('Super Admin')->first();
        $admin = Role::whereName('Admin')->first();
        $employee = Role::whereName('Employee')->first();
        $hr = Role::whereName('Hr Admin')->first();

        $superAdmin->permission()->sync([1,2,3]);
        $admin->permission()->sync([1]);
        $employee->permission()->sync([1]);
        $hr->permission()->sync([1,2,3]);
    }
}
