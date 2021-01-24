<?php

namespace ehsan\RolePermission\models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role as ModelsRole;

class Role extends ModelsRole
{

    // const ROLE_SELLER= 'seller';
    const Role_SUPER_ADMIN= 'super admin';

  
    static $roles=[
        self::Role_SUPER_ADMIN => [

            Permission::PERMISSION_SUPER_ADMIN

        ]

        // self::SUPER_ADMIN => [

        //     Permission::PERMISSION_SUPER_ADMIN
        // ]
       
    ];
    //
}
