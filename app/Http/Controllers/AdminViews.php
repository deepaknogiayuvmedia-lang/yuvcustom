<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Client;
use App\Models\Influencer;
use App\Models\Lead;
use App\Models\Master;
use App\Models\MyCart;
use App\Models\Nortification;
use App\Models\Partner;
use App\Models\Project;
use App\Models\PropertyListing;
use App\Models\RegisterCompany;
use App\Models\RegisterUser;
use App\Models\CaseStudy;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Notification;
class AdminViews extends Controller
{
    public function admindashboard()
    {
        
        return view('AdminPanelPages.dashboard');
    }
    public function master()
    {
        $data = Master::where('type', 'Master')->get();
        $allcategories = Master::orderBy('created_at', 'desc')->get();

        return view('AdminPanelPages.master', compact('data', 'allcategories'));
    }
    public function companyprofile()
    {
        $companydata = RegisterCompany::first();
        return view('AdminPanelPages.companyprofile', compact('companydata'));
    }
    public function myprofile()
    {
        $userdata = auth()->user();
        // dd($userdata);
        return view('AdminPanelPages.myprofile', compact('userdata'));
    }
    public function allusers(){
        $allusers = User::orderBy('created_at', 'desc')->get();
        $userscnt = User::count();
        return view('AdminPanelPages.allusers', compact('allusers','userscnt'));
    }
    public function addclients(){
        $data = Master::where('type', 'Master')->get();
        $clients = Client::orderBy('created_at','DESC')->get();
        $clientscnt = Client::count();
        return view('AdminPanelPages.addclients',compact('data','clients','clientscnt'));
    }
    public function addblog()
    {
        $categories = Master::where('type', 'Blog Categories')->get();
        return view('AdminPanelPages.addblog', compact('categories'));
    }

    public function editblog($id)
    {
        // dd($id);
        $blogs = Blog::find($id);
        $categories = Master::where('type', 'Blog Categories')->get();
        return view('AdminPanelPages.editblog', compact('blogs', 'categories'));
    }
    public function blogslist()
    {
        $blogs = Blog::orderBy('created_at', 'DESC')->get();
        $blogcount = Blog::count();
        return view('AdminPanelPages.bloglists', compact('blogs', 'blogcount'));
    }
    public function addcasestudy()
    {
        $categories = Master::where('type', 'Industry')->get();
        return view('AdminPanelPages.addcasestudy', compact('categories'));
    }
    public function casestudylists()
    {
        $cases = CaseStudy::orderBy('created_at', 'DESC')->get(); 
        $casecnt = CaseStudy::count();
        return view('AdminPanelPages.casestudies', compact('cases', 'casecnt'));
    }
    public function editcasestudy($id)
    {
        // dd($id);
        $cases = CaseStudy::find($id);
        $casetitle =  $cases->title;
        $categories = Master::where('type', 'Industry')->get();
        return view('AdminPanelPages.editcasestudy', compact('cases', 'categories','casetitle'));
    }
    public function allinfluencers(){
        $data = Influencer::orderBy('created_at', 'DESC')->get();
        $categories = Master::where('type', 'Influencer')->get();
        $data = Influencer::orderBy('created_at', 'DESC')->get();
        $cities = Influencer::select('city')->distinct()->get();
        $states = Influencer::select('state')->distinct()->get();
        $datacnt = Influencer::count();
        return view('AdminPanelPages.allinfluencers', compact('data','datacnt','categories','cities','states'));
    }
    public function influencerscart()
    {
        $categories = Master::where('type', 'Influencer')->get();
        $incluencerdata = Influencer::orderByDesc('created_at')->get();
        return view('AdminPanelPages.influencercart', compact('categories','incluencerdata'));
    }
    public function viewcart()
    {
        $categories = Master::where('type', 'Influencer')->get();
        $mycartproducts = MyCart::where('userid', Auth::user()->id)->get();
        $incluencerdata = Influencer::whereIn('id', function ($query) {
            $query->select('productid')
              ->from('my_carts')
              ->where('userid', Auth::user()->id);
        })->get();

        $cartcount = MyCart::where('userid', Auth::user()->id)->count();
        // dd( $incluencerdata);
        return view('AdminPanelPages.mycart', compact('incluencerdata','categories','cartcount'));
    }
    public function addpartner()
    {   
        $partnerstypes = Master::where('type', 'Partner Type')->get();
        return view('AdminPanelPages.addpartner', compact('partnerstypes'));
    }
    public function allpartners()
    {   
        $partnerstypes = Master::where('type', 'Partner Type')->get();
        $partnersdata = Partner::orderByDesc('created_at')->get();
        return view('AdminPanelPages.allpartnerspage', compact('partnersdata'));
    }
}
