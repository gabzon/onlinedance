<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function main()
    {
        return view('setting.main');
    }

    public function seo()
    {
        return view('setting.seo');
    }

    public function billing()
    {
        return view('setting.billing');
    }

    public function design()
    {
        return view('setting.design');
    }

    public function social()
    {
        return view('setting.social');
    }

    public function terms()
    {
        return view('setting.terms');
    }

    public function faq()
    {
        return view('setting.faq');
    }
}
