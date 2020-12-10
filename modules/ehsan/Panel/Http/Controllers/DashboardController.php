<?php

namespace ehsan\Panel\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $pagetitle = 'داشبورد';
        return view('panel::index', compact('pagetitle'));
    }
}
