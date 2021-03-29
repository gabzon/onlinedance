<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    
    public function about()
    {
        return view('pages/about');
    }

    public function terms()
    {
        return view('pages/terms');
    }

    public function policy()
    {
        return view('pages/policy');
    }

}
