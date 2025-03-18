<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Client;
use App\Models\Lead;
use App\Models\Master;
use App\Models\Nortification;
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
}
