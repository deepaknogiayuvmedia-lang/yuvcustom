<?php
// ----------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏----------------------------------------------------
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\GoogleAuthentication;
use App\Http\Controllers\UserViews;
use App\Http\Controllers\WebsiteStores;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminViews;
use App\Http\Controllers\WebsiteViews;
use App\Http\Controllers\AdminStores;
use App\http\Controllers\CategoryController;
use App\http\Controllers\RegisterListController;
use App\http\Controllers\DataUpdateController;

Route::get('/portfolio/login', function () {
    return view('auth.login');
});



Route::post('/logout', function () {
    Auth::logout();
    return redirect('/portfolio/login');
})->name('logout');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('admin/dashboard', [AdminViews::class, 'admindashboard'])->name('admin.admindashboard');
});


//Admin Panel Routes
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/master', [AdminViews::class, 'master'])->name('admin.master');
    Route::post('/createmaster', [AdminStores::class, 'createmaster'])->name('admin.createmaster');
    Route::get('/deletemaster/{id}', [AdminStores::class, 'deletemaster'])->name('admin.deletemaster');
    Route::post('/updatemaster', [AdminStores::class, 'updatemaster'])->name('admin.updatemaster');
    Route::get('/companyprofile', [AdminViews::class, 'companyprofile'])->name('admin.companyprofile');
    Route::post('/addcompanydetails', [AdminStores::class, 'addcompanydetails'])->name('admin.addcompanydetails');
    Route::post('/updateregistercompany', [AdminStores::class, 'updateregistercompany'])->name('admin.updateregistercompany');
    Route::get('/myprofile', [AdminViews::class, 'myprofile'])->name('admin.myprofile');
    Route::post('/updatemyprofile', [AdminStores::class, 'updatemyprofile'])->name('admin.updatemyprofile');
    Route::get('/allusers', [AdminViews::class, 'allusers'])->name('admin.allusers');
    Route::get('/addclients', [AdminViews::class, 'addclients'])->name('admin.addclients');
    Route::post('/insertclients', [AdminStores::class, 'insertclients'])->name('admin.insertclients');
    Route::get('/deleteclient/{id}', [AdminStores::class, 'deleteclient'])->name('admin.deleteclient');
    Route::post('/updateclient', [AdminStores::class, 'updateclient'])->name('admin.updateclient');
    Route::get('/addblog', [AdminViews::class, 'addblog'])->name('admin.addblog');
    Route::get('/blogslist', [AdminViews::class, 'blogslist'])->name('admin.blogslist');
    Route::post('/submitblog', [AdminStores::class, 'submitblog'])->name('admin.submitblog');
    Route::get('/editblog/{id}', [AdminViews::class, 'editblog'])->name('admin.editblog');
    Route::post('/updateblog', [AdminStores::class, 'updateblog'])->name('admin.updateblog');
    Route::get('/deleteblog/{id}', [AdminStores::class, 'deleteblog'])->name('admin.deleteblog');
    Route::get('/addcasestudy', [AdminViews::class, 'addcasestudy'])->name('admin.addcasestudy');
    Route::get('/casestudylists', [AdminViews::class, 'casestudylists'])->name('admin.casestudylists');
    Route::post('/submitstudy', [AdminStores::class, 'submitstudy'])->name('admin.submitstudy');
    Route::get('/deletecase/{id}', [AdminStores::class, 'deletecase'])->name('admin.deletecase');
    Route::get('/editcasestudy/{id}', [AdminViews::class, 'editcasestudy'])->name('admin.editcasestudy');
    Route::post('/updatestudy', [AdminStores::class, 'updatestudy'])->name('admin.updatestudy');
    Route::get('/allinfluencers', [AdminViews::class, 'allinfluencers'])->name('admin.allinfluencers');
    Route::post('/updatefeaturedstatus', [AdminStores::class, 'updatefeaturedstatus'])->name('admin.updatefeaturedstatus');
    Route::get('/filterResults', [AdminStores::class, 'filterResults'])->name('admin.filterResults');
    Route::get('/influencers-cart', [AdminViews::class, 'influencerscart'])->name('admin.influencerscart');
    Route::post('/addtocart', [AdminStores::class, 'addtocart'])->name('admin.addtocart');
    Route::get('/view-cart', [AdminViews::class, 'viewcart'])->name('admin.viewcart');
    Route::post('/removeFromCart/{id}', [AdminStores::class, 'removeFromCart'])->name('admin.removeFromCart');
    Route::post('/FilterInfluencer', [AdminStores::class, 'FilterInfluencer'])->name('admin.FilterInfluencer');
    Route::get('/add-partner', [AdminViews::class, 'addpartner'])->name('admin.addpartner');
    Route::post('/insertpartner', [AdminStores::class, 'insertpartner'])->name('admin.insertpartner');
    Route::get('/allpartners', [AdminViews::class, 'allpartners'])->name('admin.allpartners');
    Route::post('/FilterPartners', [AdminStores::class, 'FilterPartners'])->name('admin.FilterPartners');
    Route::post('/updatePartner', [AdminStores::class, 'updatePartner'])->name('admin.updatePartner');

});


//User Panel Routes
Route::get('user/login', [UserViews::class, 'userloginpage'])->name('user.userloginpage');
Route::get('user/registration', [UserViews::class, 'userregistration'])->name('user.userregistration');
Route::post('register-user', [UserViews::class, 'registeruser'])->name('user.registeruser');
Route::post('loginuser', [UserViews::class, 'loginuser'])->name('user.loginuser');



Route::prefix('user')->middleware('customer.auth')->group(function () {
    Route::controller(UserViews::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('user.dashboard');
        Route::get('/myprofile', 'myprofile')->name('user.myprofile');
        Route::get('/logoutuserpanel', 'logoutuserpanel')->name('user.logoutuserpanel');
        Route::post('/updateuserprofile', 'updateuserprofile')->name('user.updateuserprofile');
        Route::post('/updatepassword', 'updatepassword')->name('user.updatepassword');
    });
});




//Website Routes
Route::controller(WebsiteViews::class)->group(function () {
    Route::get('/', 'home')->name('homepage');
    Route::get('/about', 'about')->name('about');
    Route::get('/ourteam', 'ourteam')->name('ourteam');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/features', 'features')->name('features');
    Route::get('/services', 'services')->name('services');
    Route::get('/privacypolicy', 'privacypolicy')->name('privacypolicy');
    Route::get('/whatsapp-marketing', 'whatsappmarketing')->name('whatsappmarketing');
    Route::get('/google-business-profile', 'googlebusinessprofile')->name('googlebusinessprofile');
    Route::get('/video-production', 'videoproduction')->name('videoproduction');
    Route::get('/seo', 'seo')->name('seo');
    Route::get('/web-development', 'webdevelopment')->name('webdevelopment');
    Route::get('/designing-services', 'designingservices')->name('designingservices');
    Route::get('/marketplace-expertise', 'marketplaceexpertise')->name('marketplaceexpertise');
    Route::get('/performance-media', 'performancemedia')->name('performancemedia');
    Route::get('/influencer-marketing', 'influencermarketing')->name('influencermarketing');
    Route::get('/social-media', 'socialmedia')->name('socialmedia');
    Route::get('/partners', 'partners')->name('partners');
    Route::get('/work', 'work')->name('work');
    Route::get('/erpservices', 'erpservices')->name('erpservices');
    Route::get('/emailmarketing', 'emailmarketing')->name('emailmarketing');
    Route::get('/portfolio', 'portfolio')->name('portfolio');
    Route::get('/clients', 'clients')->name('clients');
    Route::get('/lifeatyuvmedia', 'lifeatyuvmedia')->name('lifeatyuvmedia');
    Route::get('/career', 'career')->name('career');
    Route::get('/blogs', 'blogs')->name('blogs');
    Route::get('/blog-details/{id}', 'blogdetails')->name('blogdetails');
    Route::get('/casestudies', 'casestudies')->name('casestudies');
    Route::get('/casedetails/{id}', 'casedetails')->name('casedetails');
    Route::get('/filterstudy/{category}', 'filterstudy')->name('filterstudy');
    Route::get('influencer', 'influencer')->name('influencer');
    Route::get('managingpartners', 'managingpartners')->name('managingpartners');
    Route::get('/filterpartner', 'filterpartner')->name('filterpartner');
    Route::get('/partnerDetails/{id}/{city}', 'partnerDetails')->name('partnerDetails');

});

//Mail Routes
Route::post('/send-inquiry', [EmailController::class, 'sendEmail'])->name('send.inquiry');
Route::post('/sendpartner-inquiry', [EmailController::class, 'sendPartnerEmail'])->name('send.sendpartnerinquiry');
Route::post('/send-jobenquiry', [EmailController::class, 'sendJobApplication'])->name('send.jobenquiry');
Route::post('/send-influencerenquiry', [EmailController::class, 'influencerenquiry'])->name('send.influencerenquiry');
Route::post('/send-partnerservice', [EmailController::class, 'partnerservice'])->name('send.partnerservice');