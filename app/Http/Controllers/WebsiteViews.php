<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteViews extends Controller
{

    public function home()
    {
        return view('website.pages.home');
    }
    public function about()
    {
        return view('website.pages.about');
    }
    public function contact()
    {
        return view('website.pages.contact');
    }
    public function features()
    {
        return view('website.pages.features');
    }
    public function services()
    {
        return view('website.pages.services');
    }
    public function privacypolicy()
    {
        return view('website.pages.privacypolicy');
    }
    public function whatsappmarketing()
    {
        return view('website.Pages.ServicesPages.whatsappmarketing');
    }
    public function googlebusinessprofile()
    {
        return view('website.Pages.ServicesPages.googlemybusiness');
    }
    public function videoproduction()
    {
        return view('website.Pages.ServicesPages.videoproduction');
    }
    public function seo()
    {
        return view('website.Pages.ServicesPages.seo');
    }
    public function webdevelopment()
    {
        return view('website.Pages.ServicesPages.webdevelopment');
    }
    public function designingservices()
    {
        return view('website.Pages.ServicesPages.designingservices');
    }
    public function marketplaceexpertise() 
    {
        return view('website.Pages.ServicesPages.marketplaceexpertise');
    }
    public function performancemedia() 
    {
        return view('website.Pages.ServicesPages.performancemedia');
    }
    public function influencermarketing() 
    {
        return view('website.Pages.ServicesPages.influencermarketing');
    }
    public function socialmedia() 
    {
        return view('website.Pages.ServicesPages.socialmedia');
    }
    public function partners() 
    {
        return view('website.Pages.partners');
    }
    public function work() 
    {
        return view('website.Pages.ourwork');
    }
}
