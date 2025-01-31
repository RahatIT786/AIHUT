<?php

use App\Http\Controllers\Agent\ParterAuthController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\auth\AuthController;
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
Route::get('/user/freelancer',function(){return view('user.pages.freelancer');})->name('freelancer');
Route::get('/user/testimonials',function(){return view('user.pages.testimonials');})->name('testimonials');

Route::get('/user/privacy_policy',function(){return view('user.pages.privacypolicy');})->name('privacypolicy');

Route::get('/user/conditions',function(){return view('user.pages.termsandservice');})->name('condition');

Route::get('/user/directorspeak',function(){return view('user.pages.directorspeak');})->name('directorspeak');

Route::get('/optimize' ,[AuthController::class,'clearCache']);


Route::get('/login',[AuthController::class,'adminLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('admin.login.submit');

Route::middleware(['auth:admins'])->group(function(){
    Route::get('/dashboard', function () {return view('admin.pages.dashboard');})->name('admin.dashboard');
    Route::get('/admin/user_enquiry',function(){return view('admin.pages.user_enquiry');});
    Route::get('/admin/franchise',function(){return view('admin.pages.franchise');})->name('admin.franchise');
    Route::get('/admin/freelancer',function(){return view('admin.pages.freelancer');})->name('admin.freelancer');
    Route::get('/admin/agent',function(){return view('admin.pages.agency');})->name('admin.agency');
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

//EMAIL SENDING ROUTES
Route::get('/email/travelpartner',[MailController::class,'sendTravelPartnerMail']);




//FALL BACK URLS
Route::fallback(function(){return view('errors.general');});



