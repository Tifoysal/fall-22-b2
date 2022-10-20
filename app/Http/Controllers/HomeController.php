<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('backend.pages.dashboard');
    }

    public function aboutUs()
    {
        return view('backend.pages.about');
    }

    public function contactUs()
    {
     return view('backend.pages.contact');
    }
}
