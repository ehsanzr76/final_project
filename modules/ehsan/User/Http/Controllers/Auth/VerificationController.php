<?php

namespace ehsan\User\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use ehsan\Category\models\Category;
use ehsan\User\Http\Requests\VerifyCodeRequest;
use ehsan\User\services\VerifyCodeServices;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Request as FacadesRequest;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }


    public function show(Request $request)
    {
        $categories = Category::where('parent_id', null)->with('SubCategories')->get();
        $pagetitle = 'تایید حساب کاربری';
        return $request->user()->hasVerifiedEmail()
            ? redirect($this->redirectPath())
            : view('user::auth.verify' , compact('pagetitle' , 'categories'));
    }


    public function verify(VerifyCodeRequest $request)
    {

        $code = VerifyCodeServices::get(auth()->id());
         if($code == $request->verify_code)
         {
            auth()->user()->markEmailAsVerified();       /// کاربر لاگین شده را تایید میکند
           VerifyCodeServices::delete(auth()->id());
            $msg = 'شما با موفقیت ثبت نام شدید';
            return redirect(route('home'))->with('success' , $msg);
         }
         $msg = 'کد وارد شده معتبر نمیباشد.';

         return back()->with('warning' , $msg);


    }
}
