<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\CaseStudy;
use App\Models\Client;
use App\Models\Influencer;
use App\Models\InvestSetting;
use App\Models\Lead;
use App\Models\MetaSetting;
use App\Models\MyCart;
use App\Models\Nortification;
use App\Models\Partner;
use App\Models\Project;
use App\Models\PropertyListing;
use App\Models\RegisterCompany;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\Master;
use Exception;
use Illuminate\Support\Facades\Log;
use Auth;
use File;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Metadata\Metadata;

class AdminStores extends Controller
{

    public function createmaster(Request $rq)
    {
        // dd($rq->all());
        $filename = "";
        try {
            if ($rq->hasFile('categoryimage')) {
                $rq->validate([
                    'categoryimage' => 'image|mimes:jpeg,png,jpg',
                ]);
                $file = $rq->file('categoryimage');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/images/Categories'), $filename);
            }
            $attributes = Master::create([
                'type' => $rq->type == 'Master' ? 'Master' : $rq->type,
                'label' => $rq->label,
                'categoryimage' => $filename,
            ]);
            return back()->with('success', "Category Added..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
            //return back()->with('error', 'Not Updated..Try Again.....');
        }
    }

    public function deletemaster($id)
    {
        try {
            $data = Master::find($id);
            $data->delete();
            return back()->with('success', "Category Deleted..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function updatemaster(Request $rq)
    {
        try {
            if ($rq->hasFile('categoryimage')) {
                $rq->validate([
                    'categoryimage' => 'image|mimes:jpeg,png,jpg',
                ]);
                $file = $rq->file('categoryimage');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/images/Categories'), $filename);
            }
            $data = Master::find($rq->masterid);
            $data->type = $rq->type;
            $data->label = $rq->label;
            $data->categoryimage = $filename ?? $data->categoryimage;
            $data->save();
            return back()->with('success', "Category Updated..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function addcompanydetails(Request $request)
    {
        try {
            if ($request->hasFile('companylogo')) {
                $request->validate([
                    'companylogo' => 'image|mimes:jpeg,png,jpg,svg,webp|max:2048',
                ]);
                $companylogo = $request->file('companylogo');
                $filenamecompanylogo = time() . '_' . $companylogo->getClientOriginalName();
                $companylogo->move(public_path('assets/images/Services'), $filenamecompanylogo);
            }

            if ($request->hasFile('registrationimage')) {
                $request->validate([
                    'registrationimage' => 'image|mimes:jpeg,png,jpg,svg,webp|max:2048',
                ]);
                $registrationimage = $request->file('registrationimage');
                $filenameregistrationimage = time() . '_' . $registrationimage->getClientOriginalName();
                $registrationimage->move(public_path('assets/images/Services'), $filenameregistrationimage);
            }
            if ($request->hasFile('pancardimage')) {
                $request->validate([
                    'pancardimage' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
                ]);
                $pancardimage = $request->file('pancardimage');
                $filenamepancardimage = time() . '_' . $pancardimage->getClientOriginalName();
                $pancardimage->move(public_path('assets/images/Services'), $filenamepancardimage);
            }
            $data = RegisterCompany::create([
                'companyname' => $request->companyname,
                'companylogo' => $filenamecompanylogo,
                'city' => $request->city,
                'state' => $request->state,
                'country' => $request->country,
                'pincode' => $request->pincode,
                'contactnumber' => $request->contactnumber,
                'email' => $request->email,
                'officeaddress' => $request->officeaddress,
                'registrationimage' => $filenameregistrationimage,
                'pancardimage' => $filenamepancardimage,
            ]);
            //dd($data);
            return back()->with('success', "Company Registered..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
            //return back()->with('error', 'Not Updated..Try Again.....');
        }
    }

    public function updateregistercompany(Request $request)
    {
        // DD( $request->companylogo);
        try {
            if ($request->hasFile('companylogo')) {
                $request->validate([
                    'companylogo' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
                ]);
                $companylogo = $request->file('companylogo');
                $filenamecompanylogo = time() . '_' . $companylogo->getClientOriginalName();
                $companylogo->move(public_path('assets/images/Services'), $filenamecompanylogo);
            }

            if ($request->hasFile('registrationimage')) {
                $request->validate([
                    'registrationimage' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
                ]);
                $registrationimage = $request->file('registrationimage');
                $filenameregistrationimage = time() . '_' . $registrationimage->getClientOriginalName();
                $registrationimage->move(public_path('assets/images/Services'), $filenameregistrationimage);
            }
            if ($request->hasFile('pancardimage')) {
                $request->validate([
                    'pancardimage' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
                ]);
                $pancardimage = $request->file('pancardimage');
                $filenamepancardimage = time() . '_' . $pancardimage->getClientOriginalName();
                $pancardimage->move(public_path('assets/images/Services'), $filenamepancardimage);
            }
            $data = RegisterCompany::where('id', $request->recordid)->update([
                'companyname' => $request->companyname,
                'companylogo' => $filenamecompanylogo ?? RegisterCompany::find($request->recordid)->companylogo,
                'city' => $request->city,
                'state' => $request->state,
                'country' => $request->country,
                'pincode' => $request->pincode,
                'contactnumber' => $request->contactnumber,
                'email' => $request->email,
                'officeaddress' => $request->officeaddress,
                'registrationimage' => $filenameregistrationimage ?? RegisterCompany::find($request->recordid)->registrationimage,
                'pancardimage' => $filenamepancardimage ?? RegisterCompany::find($request->recordid)->pancardimage,
            ]);

            //dd($data);

            return back()->with('success', "Details Updated..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
            //return back()->with('error', 'Not Updated..Try Again.....');
        }
    }

    public function updatemyprofile(Request $request)
    {
        // dd($request->all());
        try {
            $user = auth()->user();
            $filenameprofileimage = "";
            if ($request->hasFile('myprofileimage')) {
                $request->validate([
                    'myprofileimage' => 'image|mimes:jpeg,png,jpg,svg,webp|max:2048',
                ]);
                $profileimage = $request->file('myprofileimage');
                $filenameprofileimage = time() . '_' . $profileimage->getClientOriginalName();
                $profileimage->move(public_path('assets/images/'), $filenameprofileimage);
            }

            if (Hash::check($request->oldpassword, $user->password)) {
                // Update user's password
                $udpatedpassword = $user->password = Hash::make($request->newpassword);
            }

            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'profile_photo_path' => $filenameprofileimage == null ? $user->profile_photo_path : $filenameprofileimage,
                'website_link' => $request->websitelink,
                'fulladdress' => $request->fulladdress,
                'password' => $udpatedpassword ?? $user->password,
            ]);

            return back()->with('success', "Profile Updated..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
    public function insertclients(Request $rq)
    {
        try {
            if ($rq->hasFile('logo')) {
                $rq->validate([
                    'logo' => 'image|mimes:jpeg,png,jpg',
                ]);
                $file = $rq->file('logo');
                $image = getimagesize($file);
                // dd( $image);
                if ($image[0] != 520 || $image[1] != 520) {
                    return back()->with('error', 'Image dimensions must be 520x520 pixels.');
                }
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/images/Clients'), $filename);
            }
            $attributes = Client::create([
                'category' => $rq->category,
                'clientname' => $rq->clientname,
                'logo' => $filename
            ]);
            return back()->with('success', "Client Added..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
            //return back()->with('error', 'Not Updated..Try Again.....');
        }
    }
    public function deleteclient($id)
    {
        try {
            $data = Client::find($id);
            $data->delete();
            return back()->with('success', "Client Deleted..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
    public function updateclient(Request $rq)
    {
        try {
            if ($rq->hasFile('logo')) {
                $rq->validate([
                    'logo' => 'image|mimes:jpeg,png,jpg',
                ]);
                $file = $rq->file('logo');
                $image = getimagesize($file);
                // dd( $image);
                if ($image[0] != 520 || $image[1] != 520) {
                    return back()->with('error', 'Image dimensions must be 520x520 pixels.');
                }
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/images/Clients'), $filename);
            }
            $data = Client::find($rq->clientid);
            $attributes = Client::where('id', $rq->clientid)->update([
                'category' => $rq->category,
                'clientname' => $rq->clientname,
                'logo' => $filename ?? $data->logo
            ]);
            return back()->with('success', "Updated..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
            //return back()->with('error', 'Not Updated..Try Again.....');
        }
    }
    public function submitblog(Request $request)
    {
        $categories = json_decode($request->input('categories'), true);
        // dd($categories);
        $description = $request->input('blogdescription');
        $files = $request->file('blogthumbnail');
        $blogname = $request->input('blogname');

        try {
            $thumbnailFilename = null;
            if ($request->hasFile('blogthumbnail')) {
                $request->validate([
                    'blogthumbnail' => 'required|mimes:jpeg,png,jpg',
                ]);

                $file = $request->file('blogthumbnail');
                $thumbnailFilename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/images/Blogs'), $thumbnailFilename);
            }
            // Create the property listing
            $data = Blog::create([
                'blogname' => $blogname,
                'blogcategories' => json_encode($categories),
                'blogthumbnail' => $thumbnailFilename,
                'blogdescription' => $description,
            ]);
            return response()->json(['data' => $data, 'message' => 'Listing inserted successfully!']);

        } catch (Exception $e) {
            return response()->json(['error' => true, 'message' => $e->getMessage()]);
        }
    }

    public function updateblog(Request $request)
    {
        $categories = json_decode($request->input('categories'), true);
        // dd($categories);
        $description = $request->input('blogdescription');
        $files = $request->file('blogthumbnail');
        $blogname = $request->input('blogname');

        try {
            $thumbnailFilename = null;
            if ($request->hasFile('blogthumbnail')) {
                $request->validate([
                    'blogthumbnail' => 'required|mimes:jpeg,png,jpg',
                ]);

                $file = $request->file('blogthumbnail');
                $thumbnailFilename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/images/Blogs'), $thumbnailFilename);
            }
            $olddata = Blog::find($request->blogid);
            // Create the property listing
            $data = Blog::where('id', $request->blogid)->update([
                'blogname' => $blogname,
                'blogcategories' => json_encode($categories),
                'blogthumbnail' => $thumbnailFilename ?? $olddata->blogthumbnail,
                'blogdescription' => $description,
            ]);
            return response()->json(['data' => $data, 'message' => 'Blog Updated.....!']);

        } catch (Exception $e) {
            return response()->json(['error' => true, 'message' => $e->getMessage()]);
        }
    }

    public function deleteblog($id)
    {
        try {
            $data = Blog::find($id);
            $data->delete();
            return back()->with('success', "Deleted..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
    public function submitstudy(Request $request)
    {

        $description = $request->input('studydiscription');
        $title = $request->input('studytitle');
        $category = $request->input('categories');
        try {
            $casestudyimage = null;
            if ($request->hasFile('studyimage')) {
                $request->validate([
                    'studyimage' => 'required|mimes:jpeg,png,jpg',
                ]);

                $file = $request->file('studyimage');
                $casestudyimage = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/images/CaseStudies'), $casestudyimage);
            }
            // Create the property listing
            $data = CaseStudy::create([
                'title' => $title,
                'category' => $category,
                'caseimage' => $casestudyimage,
                'casecontent' => $description,
            ]);
            return response()->json(['data' => $data, 'message' => 'Inserted successfully!']);

        } catch (Exception $e) {
            return response()->json(['error' => true, 'message' => $e->getMessage()]);
        }
    }
    public function deletecase($id)
    {
        try {
            $data = CaseStudy::find($id);
            $data->delete();
            return back()->with('success', "Deleted..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
    public function updatestudy(Request $request)
    {

        $description = $request->input('studydiscription');
        $title = $request->input('studytitle');
        $category = $request->input('categories');
        try {
            $casestudyimage = null;
            if ($request->hasFile('studyimage')) {
                $request->validate([
                    'studyimage' => 'required|mimes:jpeg,png,jpg',
                ]);

                $file = $request->file('studyimage');
                $casestudyimage = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/images/CaseStudies'), $casestudyimage);
            }
            $olddata = CaseStudy::find($request->caseid);
            // Create the property listing
            $data = CaseStudy::where('id', $request->caseid)->update([
                'title' => $title,
                'category' => $category,
                'caseimage' => $casestudyimage ?? $olddata->caseimage,
                'casecontent' => $description,
            ]);
            return response()->json(['data' => $data, 'message' => 'Updated successfully!']);

        } catch (Exception $e) {
            return response()->json(['error' => true, 'message' => $e->getMessage()]);
        }
    }
    public function updatefeaturedstatus(Request $request)
    {
        $lisdata = Influencer::find($request->id);
        if ($lisdata) {
            $lisdata->verificationstatus = $request->featuredstatus;
            $lisdata->save();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false], 404);
    }
    public function filterResults(Request $request)
    {
        $query = Influencer::query();

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }
        if ($request->filled('city')) {
            $query->where('city', $request->city);
        }
        if ($request->filled('state')) {
            $query->where('state', $request->state);
        }

        return response()->json(['data' => $query->get()]);
    }
    public function addtoCart(Request $request)
    {
        $loggedinUser = Auth::user();
        try {
            $data = MyCart::create([
                'userid' => $loggedinUser->id ?? '',
                'productid' => $request->input('influid'),
            ]);
            return response()->json([
                'success' => true,
                'message' => "Added to cart successfully!",
                'cart' => $data
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => "Failed to add to cart.",
                'error' => $e->getMessage()
            ], 400);
        }
    }
    public function removeFromCart($id)
    {
        try {
            MyCart::where('id', $id)->delete();
            return response()->json([
                'success' => true,
                'message' => "Removed from cart"
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => "Failed to remove from cart.",
                'error' => $e->getMessage()
            ], 500);
        }
    }
    public function FilterInfluencer(Request $request)
    {
        $categories = $request->input('categories');
        $platforms = $request->input('platforms');
        $cities = $request->input('cities');
        $states = $request->input('states');

        $query = Influencer::query();

        if (!empty($categories)) {
            $query->whereIn('category', $categories);
        }

        if (!empty($platforms)) {
            $query->where(function ($q) use ($platforms) {
                foreach ($platforms as $platform) {
                    $q->orWhereJsonContains('platforms', $platform);
                }
            });
        }

        if (!empty($cities)) {
            $query->whereIn('city', $cities);
        }

        if (!empty($states)) {
            $query->whereIn('state', $states);
        }

        $data = $query->get();
        return response()->json(['data' => $data]);
    }
    public function insertpartner(Request $request)
    {
        try {
            $profileImage = null;
            if ($request->hasFile('profileimage')) {
                $request->validate([
                    'profileimage' => 'required|mimes:jpeg,png,jpg,webp',
                ]);

                $file = $request->file('profileimage');
                $profileImage = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/images/Partners'), $profileImage);
            }

            // Create the partner record
            $data = Partner::create([
                'partnername' => $request->partnername,
                'partnertype' => $request->partnertype,
                'partneremail' => $request->partneremail,
                'partnerphone' => $request->partnerphone,
                'city' => $request->city,
                'state' => $request->state,
                'aboutuscontent' => $request->aboutuscontent,
                'profileimage' => $profileImage,
            ]);

            return response()->json(['data' => $data, 'message' => 'Partner inserted successfully!']);
        } catch (Exception $e) {
            return response()->json(['error' => true, 'message' => $e->getMessage()]);
        }
    }
    public function FilterPartners(Request $request)
    {
        $categories = $request->input('categories');
        $platforms = $request->input('platforms');
        $cities = $request->input('cities');
        $states = $request->input('states');

        $query = Partner::query();

        if (!empty($categories)) {
            $query->whereIn('category', $categories);
        }

        if (!empty($platforms)) {
            $query->where(function ($q) use ($platforms) {
                foreach ($platforms as $platform) {
                    $q->orWhereJsonContains('platforms', $platform);
                }
            });
        }

        if (!empty($cities)) {
            $query->whereIn('city', $cities);
        }

        if (!empty($states)) {
            $query->whereIn('state', $states);
        }

        $data = $query->get();
        return response()->json(['data' => $data]);
    }
    public function updatePartner(Request $request)
    {
        try {
            $profileImage = null;
            if ($request->hasFile('profileimage')) {
                $request->validate([
                    'profileimage' => 'required|mimes:jpeg,png,jpg,webp',
                ]);

                $file = $request->file('profileimage');
                $profileImage = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/images/Partners'), $profileImage);
            }

            // Update the partner record
            $data = Partner::where('id', $request->partnerid)->update([
                'partnername' => $request->partnername,
                'partnertype' => $request->partnertype,
                'partneremail' => $request->partneremail,
                'partnerphone' => $request->partnerphone,
                'city' => $request->city,
                'state' => $request->state,
                'aboutuscontent' => $request->aboutuscontent,
                'profileimage' => $profileImage ?? Partner::find($request->partnerid)->profileimage,
            ]);

            return back()->with('success', "Partner Updated..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
    public function deletePartner($id)
    {
        try {
            $data = Partner::find($id);
            $data->delete();
            return back()->with('success', "Deleted..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
    public function deleteInfluencer($id)
    {
        try {
            $data = Influencer::find($id);
            $data->delete();
            return back()->with('success', "Deleted..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
    public function insertlogos(Request $request)
    {
        try {
            $mediaImages = [];

            if ($request->hasFile('logos')) {
                $request->validate([
                    'logos.*' => 'required|mimes:jpeg,png,jpg,webp',
                    'directoryname' => 'required|string',
                ]);

                $directoryname = $request->input('directoryname');
                $files = $request->file('logos');

                foreach ($files as $file) {
                    $imageFullName = time() . '_' . $file->getClientOriginalName();
                    $uploadedPath = public_path("assets/websiteAssets/images/clients/{$directoryname}");

                    // Make directory if not exists
                    if (!file_exists($uploadedPath)) {
                        mkdir($uploadedPath, 0777, true);
                    }

                    $file->move($uploadedPath, $imageFullName);
                    $mediaImages[] = asset("assets/websiteAssets/images/clients/{$directoryname}/" . $imageFullName);
                }
            }

            return response()->json([
                'message' => 'Media inserted successfully!',
                'images' => $mediaImages, // Return images list to AJAX
            ]);
        } catch (Exception $e) {
            return response()->json(['error' => true, 'message' => $e->getMessage()]);
        }
    }
    public function removelogo(Request $request)
    {
        $filename = public_path("assets/websiteAssets/images/clients/$request->directoryname/" . basename($request->url));
        // dd( $filename);
        if (File::exists($filename)) {
            File::delete($filename);
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false], 404);
    }
    public function saveMetaSettings(Request $request)
    {
        try {

            // Create the meta record
            $data = MetaSetting::updateOrCreate(
                ['page' => $request->page],
                [
                    'metatitle' => $request->metatitle,
                    'authorname' => $request->authorname,
                    'metadescription' => $request->metadescription,
                    'keywords' => $request->keywords,
                ]
            );

            return response()->json(['data' => $data, 'message' => 'Settings Saved successfully!']);
        } catch (Exception $e) {
            return response()->json(['error' => true, 'message' => $e->getMessage()]);
        }
    }
    public function GetMetaSettings(Request $request)
    {
        $data = MetaSetting::where('page', $request->pagename)->first();
        return response()->json(['data' => $data, 'status' => 200]);
    }
    public function insertInfluencer(Request $request)
    {
        try {
            // Handle file upload
            $profileimage = null;
            if ($request->hasFile('profileimage')) {
                $file = $request->file('profileimage');
                $profileimage = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/websiteAssets/images/Influencers/'), $profileimage);
            }

            // Register Influencer Here.......
            $data = Influencer::create([
                'userid' => $request->input('emailaddress'),
                'category' => $request->input('category'),
                'city' => $request->input('city'),
                'state' => $request->input('state'),
                'country' => $request->input('country'),
                'dob' => $request->input('dob'),
                'fullname' => $request->input('fullname'),
                'contactnumber' => $request->input('contactnumber'),
                'emailaddress' => $request->input('emailaddress'),
                'profileimage' => $profileimage ?? 'defaultuser.png',
                'instagramprofilelink' => $request->input('instagram'),
                'platforms' => json_encode($request->input('platforms')),
                'facebookprofile' => $request->input('facebook'),
                'youtubeprofile' => $request->input('youtube'),
                'linkedinprofile' => $request->input('linkedin'),
                'verificationstatus' => 'pending',
            ]);
            return back()->with('success', "Influencer Inserted..!!!");
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function updateInfluencer(Request $request)
    {
        try {
            // Handle file upload
            $profileimage = null;
            if ($request->hasFile('profileimage')) {
                $file = $request->file('profileimage');
                $profileimage = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/websiteAssets/images/Influencers/'), $profileimage);
            }

            $influencer = Influencer::find($request->input('influid'));
            if (!$influencer) {
                return back()->with('error', "Influencer not found.");
            }

            $data = Influencer::where('id', $request->input('influid'))->update([
                'userid' => $request->input('emailaddress'),
                'category' => $request->input('category'),
                'city' => $request->input('city'),
                'state' => $request->input('state'),
                'country' => $request->input('country'),
                'dob' => $request->input('dob'),
                'fullname' => $request->input('fullname'),
                'contactnumber' => $request->input('contactnumber'),
                'emailaddress' => $request->input('emailaddress'),
                'profileimage' => $profileimage ?? $influencer->profileimage,
                'instagramprofilelink' => $request->input('instagram'),
                'platforms' => json_encode($request->input('platforms')),
                'facebookprofile' => $request->input('facebook'),
                'youtubeprofile' => $request->input('youtube'),
                'linkedinprofile' => $request->input('linkedin'),
            ]);
            return back()->with('success', "Influencer Updated..!!!");
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

}
