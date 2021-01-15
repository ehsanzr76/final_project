<?php

namespace ehsan\Category\Policies;

use ehsan\RolePermission\models\Permission;
use Illuminate\Auth\Access\HandlesAuthorization;
use ehsan\User\models\User;

class CategoryPolicy
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


    public function manage(User $user)
    {
        return $user->hasPermissionTo(Permission::PERMISSION_MANAGE_CATEGORIES);
    }
}
