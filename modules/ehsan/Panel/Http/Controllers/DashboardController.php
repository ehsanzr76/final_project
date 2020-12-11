<?php

namespace ehsan\Panel\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $breadcrumb = 'صفحه اصلی';
        $pagetitle = 'داشبورد';
        return view('panel::index', compact('pagetitle' , 'breadcrumb'));
    }
}
