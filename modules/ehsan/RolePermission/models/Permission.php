<?php

namespace ehsan\RolePermission\models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission as ModelsPermission;

class Permission extends ModelsPermission
{

    const PERMISSION_MANAGE_CATEGORIES = 'manage categories';
    const PERMISSION_MANAGE_BUSINESSES = 'manage businesses'; 
    const PERMISSION_MANAGE_USERS = 'manage users'; 
    const PERMISSION_SUPER_ADMIN = 'super admin'; 


    static $permissions=[
        self::PERMISSION_MANAGE_CATEGORIES,
        self::PERMISSION_MANAGE_BUSINESSES,
        self::PERMISSION_SUPER_ADMIN,
        self::PERMISSION_MANAGE_USERS,
    ];
    //
}
