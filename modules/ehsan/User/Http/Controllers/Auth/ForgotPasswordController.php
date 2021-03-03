<?php

namespace ehsan\User\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use ehsan\Category\models\Category;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public function showLinkRequestForm()
    {
        $categories = Category::where('parent_id', null)->with('SubCategories')->get();
        $pagetitle = 'صفحه بازیابی رمز عبور';
        return view('user::auth.passwords.email' , ['pagetitle' => $pagetitle , 'categories' => $categories]);
    }
    
}
