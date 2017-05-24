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

    public function mro_solutions()
    {
        return view('frontend.views.services.mro_solutions');
    }

    public function trading()
    {
        return view('frontend.views.services.trading');
    }

    public function military_solutions()
    {
        return view('frontend.views.services.military_solutions');
    }

    public function mro()
    {
        return view('frontend.views.mro');
    }

    public function accessories()
    {
        return view('frontend.views.accessories');
    }

    public function rfq()
    {
        return view('frontend.views.rfq');
    }

    public function contactus()
    {
        return view('frontend.views.contact_us');
    }

    public function certifications()
    {
        return view('frontend.views.certifications');
    }

    public function gallery()
    {
        return view('frontend.views.gallery');
    }
}
