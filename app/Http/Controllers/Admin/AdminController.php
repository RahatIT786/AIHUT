<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\ContactUs;
use App\Models\Partner;
use App\Models\SignupForm;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function userEnquries(){
        $enquiries=SignupForm::where('delete_status',1)->get();
        $regiEq=Partner::where('user_status',1)->get();
        $contactEnq=ContactUs::where('delete_status',1)->get();
        $careerEnq=Career::where('delete_status',1)->get();
        return view('admin.pages.enquiries',compact('enquiries','regiEq','contactEnq','careerEnq'));
    }
}
