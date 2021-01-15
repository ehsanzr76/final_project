<?php

namespace ehsan\RolePermission\models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role as ModelsRole;

class Role extends ModelsRole
{

    const ROLE_SELLER= 'seller';
    // const SUPER_ADMIN= 'super admin';

  
    static $roles=[
        self::ROLE_SELLER => [

            Permission::PERMISSION_MANAGE_CATEGORIES

        ]

        // self::SUPER_ADMIN => [

        //     Permission::PERMISSION_SUPER_ADMIN
        // ]
       
    ];
    //
}
