<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () { return view('user.pages.home'); });
Route::get('/user/franchise', function () { return view('user.pages.franchise'); })->name('home');
Route::get('/user/contact', function () { return view('user.pages.contactus'); })->name('contact');
