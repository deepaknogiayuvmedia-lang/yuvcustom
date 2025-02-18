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
    public function ourteam()
    {
        return view('website.pages.ourteam');
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
        return view('website.pages.ServicesPages.whatsappmarketing');
    }
    public function googlebusinessprofile()
    {
        return view('website.pages.ServicesPages.googlemybusiness');
    }
    public function videoproduction()
    {
        return view('website.pages.ServicesPages.videoproduction');
    }
    public function seo()
    {
        return view('website.pages.ServicesPages.seo');
    }
    public function webdevelopment()
    {
        return view('website.pages.ServicesPages.webdevelopment');
    }
    public function designingservices()
    {
        return view('website.pages.ServicesPages.designingservices');
    }
    public function marketplaceexpertise()
    {
        return view('website.pages.ServicesPages.marketplaceexpertise');
    }
    public function performancemedia()
    {
        return view('website.pages.ServicesPages.performancemedia');
    }
    public function influencermarketing()
    {
        return view('website.pages.ServicesPages.influencermarketing');
    }
    public function socialmedia()
    {
        return view('website.pages.ServicesPages.socialmedia');
    }
    public function partners()
    {
        return view('website.pages.partners');
    }
    public function work()
    {
        return view('website.pages.ourwork');
    }
    public function erpservices()
    {
        return view('website.pages.ServicesPages.erpservices');
    }
    public function emailmarketing()
    {
        return view('website.pages.ServicesPages.emailmarketing');
    }
    public function portfolio()
    {
        return view('website.pages.portfolio');
    }
    public function clients()
    {
        return view('website.pages.clients');
    }
}
