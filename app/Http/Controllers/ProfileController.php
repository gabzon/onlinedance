<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function dashboard()
    {        
        return view('dashboard');
    }

    public function plan()    
    {     
        return view('profile.plan');
    }

    public function favorites()
    {     
        return view('profile.favorites');
    }

    public function Todo()
    {
        return view('profile.todo');
    }
}
