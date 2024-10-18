<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Factorry;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardLoginController extends Controller
{
    public function index()
    {
        return view('NewFile.Dashboard');
    }

    public function contacts()
    {
        return view('NewFile.Contact');
    }

    public function Regis()
    {
        return view('NewFile.register');
    }
}
