<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\CaseStudy;
use App\Models\Master;
use Illuminate\Http\Request;
use Laravel\Fortify\Actions\ConfirmPassword;

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
    public function lifeatyuvmedia()
    {
        return view('website.pages.lifeatyuvmedia');
    }
    public function career()
    {
        return view('website.pages.career');
    }
    public function blogs()
    {
        $blogs = Blog::orderBy('created_at','DESC')->paginate(12);
        return view('website.pages.blogs',compact('blogs'));
    }
    public function blogdetails($id)
    {
        $finalid = substr(strrchr($id, '-'), 1);
        $blogdetails = Blog::find($finalid);
        $blogs = Blog::orderBy('created_at', 'desc')->get();perPage: 
        // dd( $blogdetails);
        return view('website.pages.blogdetails', compact('blogdetails', 'blogs'));

    }
    public function casestudies()
    {
        $studies = CaseStudy::orderBy('created_at','DESC')->get();
        $categories = Master::where('type', 'Industry')->get();
        return view('website.pages.casestudies',compact('studies','categories'));
    }
    public function casedetails($id)
    {
        $finalid = substr(strrchr($id, '-'), 1);
        $casedetails = CaseStudy::find($finalid);
        // dd( $blogdetails);
        return view('website.pages.caseStudyDetails', compact('casedetails'));

    }
    public function filterstudy($category)
    {
        $casedetails = CaseStudy::where('category',$category)->get();
       return response()->json( $casedetails);

    }
}
