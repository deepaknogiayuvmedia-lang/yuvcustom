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
        return view('website.pages.servicespages.whatsappmarketing');
    }
    public function googlebusinessprofile()
    {
        return view('website.pages.servicespages.googlemybusiness');
    }
    public function videoproduction()
    {
        return view('website.pages.servicespages.videoproduction');
    }
    public function seo()
    {
        return view('website.pages.servicespages.seo');
    }
    public function webdevelopment()
    {
        return view('website.pages.servicespages.webdevelopment');
    }
    public function designingservices()
    {
        return view('website.pages.servicespages.designingservices');
    }
    public function marketplaceexpertise() 
    {
        return view('website.pages.servicespages.marketplaceexpertise');
    }
    public function performancemedia() 
    {
        return view('website.pages.servicespages.performancemedia');
    }
    public function influencermarketing() 
    {
        return view('website.pages.servicespages.influencermarketing');
    }
    public function socialmedia() 
    {
        return view('website.pages.servicespages.socialmedia');
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
