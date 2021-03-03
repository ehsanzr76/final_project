<?php

namespace ehsan\UserPanel\Http\Controllers;

use App\Http\Controllers\Controller;
use ehsan\Business\models\Business;
use ehsan\Media\Services\MediaService;
use ehsan\User\Http\Requests\UserUpdateProfileRequest;
use ehsan\User\models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserPanelController extends Controller
{


    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }


    public function index()
    {
        $pagetitle = 'پنل کاربری | نیترو بیزنس';
        $breadcrumb = 'پنل کاربری';
        return view('UserPanel::index', compact('pagetitle', 'breadcrumb'));
    }



    public function EditProfile()
    {
        $pagetitle = 'ویرایش پروفایل';
        $breadcrumb = 'ویرایش پروفایل';
        return view('UserPanel::EditProfile', compact('pagetitle', 'breadcrumb'));
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
            return redirect(route('UserPanel.EditProfile'))->with('warning', $msg);
        }

        $msg = "پروفایل شما با موفقیت بروزرسانی شد.";
        return redirect(route('UserPanel.EditProfile'))->with('success', $msg);
    }



    public function showBusiness(Business $business)
    {

        // dd(auth()->user()->businesses()->with('businesses'));
        $pagetitle = 'مشاهده کسب و کار';
        $breadcrumb = 'مشاهده کسب و کار';
        // $businesses = auth()->user()->businesses()->with('businesses')->get();
        $businesses = Business::where('ID' , auth()->user()->id)->get();
        // $businesses = $business->user()->where('id', '!=', auth()->user()->id)->take(9)->get();
        return view('UserPanel::business', compact('pagetitle', 'breadcrumb' , 'businesses'));

    }
}
