<?php
namespace ehsan\RolePermission\database\seeds;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{

    public function run()
    {
        Permission::findOrCreate('مدیریت دسته بندی ها');
        Permission::findOrCreate('مدیریت کاربران');
        Permission::findOrCreate('مدیریت کسب و کار ها');

    }
}
