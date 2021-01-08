<?php

namespace ehsan\RolePermission\Http\Controllers;

use App\Http\Controllers\Controller;
use ehsan\RolePermission\Http\requests\RolePermission;
use ehsan\RolePermission\Http\requests\RolePermissionRequest;
use ehsan\RolePermission\Http\requests\RolePermissionUpdateRequest;
use Exception;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionController extends Controller
{


    


    public function index()
    {
        $breadcrumb = 'نقش های کاربری';
        $pagetitle = 'نقش های کاربری';
        $roles = Role::all();
        $permissions = Permission::all();
        return view('RolePermission::index', compact('pagetitle', 'breadcrumb', 'roles', 'permissions'));
    }






    public function store(RolePermissionRequest $request)
    {

        $roles = new Role();
        try {

            $roles->create($request->all())->syncPermissions($request->permissions);
        } catch (Exception $exc) {
            switch ($exc->getCode()) {
                case 23000:
                    $msg = 'خطایی رخ داده است';
                    break;
            }

            return redirect(route('RolePermissions'))->with('warning', $msg);
        }

        $msg = 'نقش جدید با موفقیت ایجاد شد';
        return redirect(route('RolePermissions'))->with('success', $msg);
    }


    




    public function edit($id)
    {
        $roles = Role::findOrfail($id);
        $pagetitle = 'ویرایش نقش ها';
        $breadcrumb = 'نقش های کاربری / به روز رسانی نقش ها';
        $permissions = Permission::all('name');
        return view('RolePermission::edit', compact('pagetitle', 'breadcrumb', 'permissions', 'roles'));
    }








    public function update(RolePermissionUpdateRequest $request, $id)
    {
        $roles = Role::findById($id);
        try {
            $roles->syncPermissions($request->permissions)->update($request->all());
        } catch (Exception $exc) {
            switch ($exc->getCode()) {
                case 23000:
                    $msg = 'خطایی بوجود آمده است';
                    break;
            }
            return redirect(route('RolePermissions.edit'))->with('warning', $msg);
        }
        $msg = 'نقش  با موفقیت بروز رسانی شد';
        return redirect(route('RolePermissions'))->with('success', $msg);
    }






    public function destroy($id)
    {
        $roles = Role::where('id', $id);

        try {

            $roles->delete();
        } catch (Exception $exc) {
            switch ($exc->getCode()) {
                case 23000:
                    $msg = 'خطایی رخ داده است';
                    break;
            }

            return redirect(route('RolePermissions'))->with('warning', $msg);
        }

        $msg = 'نقش با موفقیت حذف شد.';
        return redirect(route('RolePermissions'))->with('success', $msg);
    }
}
