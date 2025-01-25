<?php

use App\Http\Controllers\MailController;
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



//EMAIL SENDING ROUTES
Route::get('/email/travelpartner',[MailController::class,'sendTravelPartnerMail']);
