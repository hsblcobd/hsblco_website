<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function Fontend_Homepage()
    {
        return view('website.index');
    }
    public function Fontend_About()
    {
        return view('website.about');
    }
    public function Fontend_Service()
    {
        return view('website.service');
    }
    public function Fontend_Service_Details()
    {
        return view('website.sdetails');
    }
    public function Fontend_Project()
    {
        return view('website.project');
    }
    public function Fontend_ContactUs()
    {
        return view('website.contact');
    }
}

