<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function cgu()
    {
        return view('cgu');
    }

    public function faq()
    {
        return view('faq');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function sysadmin()
    {
        return view('sysadmin');
    }

    public function web()
    {
        return view('web');
    }

    public function vpn()
    {
        return view('vpn');
    }
}
