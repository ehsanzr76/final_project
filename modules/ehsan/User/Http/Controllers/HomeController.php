<?php

namespace ehsan\User\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{ 

   
     
    public function index()
    {
        $pagetitle = 'سایت کسب و کار های مجازی و غیر مجازی';
        return view('user::front.index' , ['pagetitle' => $pagetitle]);
    }


     public function __construct()
    {
        $this->middleware(['auth' , 'verified']);
    }

    
    
}
