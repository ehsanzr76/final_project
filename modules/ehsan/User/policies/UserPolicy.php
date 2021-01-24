<?php

namespace ehsan\User\Policies;

use ehsan\RolePermission\models\Permission;
use Illuminate\Auth\Access\HandlesAuthorization;
use ehsan\User\models\User;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }



    public function index(User $user)
    {
        return $user->hasPermissionTo(Permission::PERMISSION_MANAGE_USERS);
    }

    
    public function addRole(User $user)
    {
        return $user->hasPermissionTo(Permission::PERMISSION_MANAGE_USERS);
    }
}
