<?php
namespace ehsan\RolePermission\database\seeds;

use ehsan\RolePermission\models\Permission as ModelsPermission;
use ehsan\RolePermission\models\Role;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{

    public function run()
    {


        foreach(ModelsPermission::$permissions as $permission)
        {
            Permission::findOrCreate($permission);
        }


        foreach(Role::$roles as $name => $permissions)
        {
            Role::findOrCreate($name)->givePermissionTo($permissions);
        }
    
    }
}
