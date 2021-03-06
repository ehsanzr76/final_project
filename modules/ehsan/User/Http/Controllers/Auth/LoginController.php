<?php

namespace ehsan\User\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use ehsan\Category\models\Category;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        $categories = Category::where('parent_id', null)->with('SubCategories')->get();
        $pagetitle = 'صفحه ورود';
        return view('user::auth.login', ['pagetitle' => $pagetitle , 'categories' => $categories]);
    }

    public function credentials(Request $request)
    {
        $username = $request->get($this->username());
        $field = filter_var($username , FILTER_VALIDATE_EMAIL)? 'email' :'mobile';

        // dd($username , $field);

        return
        [
            $field => $username,
            'password' => $request->password
        ];
    }
}
