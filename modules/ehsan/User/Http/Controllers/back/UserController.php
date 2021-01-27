<?php


namespace ehsan\User\Http\Controllers\back;

use App\Http\Controllers\Controller;
use ehsan\Media\Services\MediaService;
use ehsan\RolePermission\models\Role;
use ehsan\User\Http\Requests\addRoleRequest;
use ehsan\User\Http\Requests\UserUpdateProfileRequest;
use ehsan\User\Http\Requests\UserUpdateRequest;
use ehsan\User\models\User;
use Exception;

class UserController extends Controller
{


    public function index()
    {
        $this->authorize('index', User::class);
        $pagetitle = 'مشاهده کاربران';
        $breadcrumb = 'لیست کاربران';
        $users = User::OrderBy('id', 'DESC')->paginate(6);
        $roles = Role::all();
        return view('user::back.index', compact('pagetitle', 'breadcrumb', 'users', 'roles'));
    }






    public function edit(User $user)
    {
        $pagetitle = 'ویرایش کاربران';
        $breadcrumb = 'کاربران / ویرایش کاربران';
        return view('user::back.edit', compact('pagetitle', 'breadcrumb', 'user'));
    }








    public function update(User $user, UserUpdateRequest $request)
    {

        if ($request->hasFile('image')) {
            $request->request->add(['media_id' => MediaService::Upload($request->file('image'))->id]);
            $user->image->delete();
        } else {
            $request->request->add(['media_id' => $user->media_id]);
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->status = $request->status;
        $user->bio = $request->bio;
        $user->media_id = $request->media_id;
        $user->password = bcrypt($request->password);


        try {
            $user->save();
        } catch (Exception $exc) {
            switch ($exc->getCode()) {
                case 23000:
                    $msg = "خطایی رخ داده است";
                    break;
            }
            return redirect(route('users.edit', $user->id))->with('warning', $msg);
        }

        $msg = "کاربر با موفقیت بروزرسانی شد.";
        return redirect(route('users'))->with('success', $msg);
    }







    public function addRole(addRoleRequest $request, User $user)
    {
        $this->authorize('addRole', User::class);
        $user->assignRole($request->role);
        $msg = 'نقش با موفقیت به کاربر داده شد';
        return redirect(route('users'))->with('success', $msg);
    }




    public function removeRole(User $user, Role $role)
    {

        $user->removeRole($role);
        $msg = 'نقش کاربر مورد نظر با موفقیت حذف گردید';
        return redirect(route('users'))->with('success', $msg);
    }


    // public function VerifyUser(User $user)
    // {
    //     $user->markEmailAsVerified();
    //     $msg = "بروزرسانی با موفقیت انجام شد";
    //     return redirect(route('users'))->with('success', $msg);
    // }


    public function VerifyUser(User $user)
    {
        $user->hasVerifiedEmail() ? $user->email_verified_at = null : $user->email_verified_at = now();
        $user->save();
        $msg = "بروزرسانی با موفقیت انجام شد";
        return redirect(route('users'))->with('success', $msg);
    }


    public function EditProfile()
    {
        $pagetitle = 'ویرایش پروفایل';
        $breadcrumb = 'ویرایش پروفایل';
        return view('user::back.EditProfile', compact('pagetitle', 'breadcrumb'));
    }




    public function UpdateProfile(UserUpdateProfileRequest $request)
    {
        if ($request->hasFile('image')) {
            $media = MediaService::Upload($request->file('image'));
            if (auth()->user()->image) {
                auth()->user()->image->delete();

            }
            auth()->user()->media_id = $media->id;
        }

        auth()->user()->name = $request->name;

        if (auth()->user()->email != $request->email) {

            auth()->user()->email = $request->email;
            auth()->user()->email_verified_at = null;
        }

        auth()->user()->mobile = $request->mobile;

        if ($request->password) {
            auth()->user()->password = bcrypt($request->password);
        }

        auth()->user()->bio = $request->bio;


        try {
            auth()->user()->save();
        } catch (Exception $exc) {
            switch ($exc->getCode()) {
                case 23000:
                    $msg = "خطایی رخ داده است";
                    break;
            }
            return redirect(route('users.EditProfile'))->with('warning', $msg);
        }

        $msg = "پروفایل شما با موفقیت بروزرسانی شد.";
        return redirect(route('users.EditProfile'))->with('success', $msg);
    }





    public function destroy(User $user)
    {
        try {
            if ($user->image) {
                $user->image->delete();
            }
            $user->delete();
        } catch (Exception $exc) {
            switch ($exc->getCode()) {
                case 23000:
                    $msg = 'خطایی رخ داده است';
                    break;
            }

            return redirect(route('users'))->with('warning', $msg);
        }

        $msg = 'کاربر با موفقیت حذف شد.';
        return redirect(route('users'))->with('success', $msg);
    }
}
