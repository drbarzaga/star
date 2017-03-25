<?php

namespace Star\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Star\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        return view('frontend.views.home');
    }

    public function aboutus()
    {
        return view('frontend.views.about_us');
    }

    public function services()
    {
        return view('frontend.views.services');
    }

    public function mro()
    {
        return view('frontend.views.mro');
    }

    public function news()
    {
        return view('frontend.views.news');
    }

    public function contactus()
    {
        return view('frontend.views.contact_us');
    }

}
