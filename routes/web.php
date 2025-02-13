<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Agent\ParterAuthController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\user\UserController;
use App\Models\SuperAdmin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () { return view('user.pages.home'); })->name('home');
Route::get('/user/franchise', function () { return view('user.pages.franchise'); })->name('franchise');
Route::get('/user/agency', function () { return view('user.pages.agency'); })->name('agency');

Route::get('/user/contact', function () { return view('user.pages.contactus'); })->name('contact');
Route::post('/user/contact/formsubmit', [UserController::class,'sumbitUserContactForm'])->name('user.contactus.formsubmit');
Route::get('/user/freelancer',function(){return view('user.pages.freelancer');})->name('freelancer');
Route::get('/user/testimonials',function(){return view('user.pages.testimonials');})->name('testimonials');

Route::get('/user/privacy_policy',function(){return view('user.pages.privacypolicy');})->name('privacypolicy');

Route::get('/user/conditions',function(){return view('user.pages.termsandservice');})->name('condition');

Route::get('/user/directorspeak',function(){return view('user.pages.directorspeak');})->name('directorspeak');
Route::get('/user/aboutus',function(){return view('user.pages.aboutus');})->name('aboutus');
Route::get('/user/benifits',function(){return view('user.pages.benifits');})->name('benifits');
Route::get('/user/whatyouget',function(){return view('user.pages.whatyouget');})->name('whatyouget');
Route::get('/user/whatdoweearn',function(){return view('user.pages.whatdoweearn');})->name('whatdoweearn');
Route::get('/user/documentrequired',function(){return view('user.pages.documentrequired');})->name('documentrequired');
Route::get('/user/termsandconditions',function(){return view('user.pages.termsandcondition');})->name('termsandconditions');

Route::get('/optimize' ,[AuthController::class,'clearCache']);
Route::get('/migrate' ,[AuthController::class,'migrate']);
Route::get('/sessionTable' ,[AuthController::class,'createAndMigrateSessionTable']);


Route::get('/login',[AuthController::class,'adminLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('admin.login.submit');

Route::middleware(['auth:admins'])->group(function(){
    // Route::get('/dashboard', function () {return view('admin.pages.dashboard');})->name('admin.dashboard');
    // Route::get('/admin/user_enquiry',function(){return view('admin.pages.user_enquiry');});
    // Route::get('/admin/franchise',function(){return view('admin.pages.franchise');})->name('admin.franchise');
    // Route::get('/admin/freelancer',function(){return view('admin.pages.freelancer');})->name('admin.freelancer');
    // Route::get('/admin/agent',function(){return view('admin.pages.agency');})->name('admin.agency');
    // Route::get('/admin/listquiry',[AdminController::class,'userEnquries'])->name('admin.enquries');

    // version 2 admin pages updates below
    Route::prefix('/v2/admin')->name('admin2.')->group(function(){
        Route::get('/',[AdminController::class,'showDashboard'])->name('dashboard');
        // Route::get('/enquiries',function(){ return view('admin2.pages.enquiries');})->name('enquiries');
        Route::get('/enquiries/{type}',[AdminController::class,'listEnquiries'])->name('enquiry.list');
        Route::get('/enquiries/search/{type}',[AdminController::class,'liveSearch'])->name('enquiry.list.search');

    });
  



});
Route::get('/addAdmin',function(){
    try{
        SuperAdmin::create([
            'email' => 'info@rahat.in',
            'password' => Hash::make('info@rahat.in')
        ]);
        return 'success';
    }catch(Exception $e){
        return $e->getMessage();
    }
});


//ADMIN URLS
Route::get('/admin-dashboard', function () {return view('admin.pages.dashboard');})->name('dashboard');
Route::get('/admin/user_enquiry',function(){return view('admin.pages.user_enquiry');});
Route::get('/admin/franchise',function(){return view('admin.pages.franchise');})->name('admin.franchise');
Route::get('/admin/freelancer',function(){return view('admin.pages.freelancer');})->name('admin.freelancer');
Route::get('/admin/agent',function(){return view('admin.pages.agency');})->name('admin.agency');



//AGENT LOGIN
Route::post('/agent/register',[ParterAuthController::class,'partnerRegistration'])->name('agent.register');
Route::post('/agent/registerer',[ParterAuthController::class,'partnerRegistration'])->name('agent.registerer');
Route::get('/agent/form',function(){return view('user.pages.registerform');})->name('agent.regiform');
Route::post('/agent/form/submit',[ParterAuthController::class,'partnerRegistration'])->name('agent.submit.registerform');

//EMAIL SENDING ROUTES
Route::get('/email/travelpartner',[MailController::class,'sendTravelPartnerMail']);




//FALL BACK URLS
Route::fallback(function(){return view('errors.general');});


//signup form 
Route::post('/user/signup',[UserController::class,'submitSignUpForm'])->name('user.signup.form');
Route::get('/user/career',function(){return view('user.pages.careerform');})->name('career.form');
Route::post('/user/career/formsubmit',[UserController::class,'userCareerForm'])->name('career.form.submit');





