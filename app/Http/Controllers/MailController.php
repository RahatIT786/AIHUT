<?php

namespace App\Http\Controllers;

use App\Mail\TravelPartner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
   

    public function sendTravelPartnerRegistrationMail($data){


    }

    public function sendTravelPartnerMail(Request $request){

        $request->validate([
            'company_name'=>'required|string|max:40',
            'owner_name'=>'required|string|max:70',
            'mobile'=>'required|string',
            'city'=>'required|string|max:30',
            'state'=>'required|string|max:30',
            'country'=>'required|string|max:40',
            'mail'=>'required|email',
            'partnership'=>'required|string',
            'comment'=>'required|string',

        ]);
        $data=[

            'company_name'=>$request->input('company_name'),
            'owner_name'=>$request->input('owner_name'),
            'mobile'=>$request->input('mobile'),
            'city'=>$request->input('city'),
            'state'=>$request->input('state'),
            'country'=>$request->input('country'),
            'mail'=>$request->input('email'),
            'partnership'=>$request->input('partnership_type'),
            'comment'=>$request->input('comments'),


        ];

        $userMail='mohamedabusinai2020@gmail.com';
        Mail::to($userMail)->send(new TravelPartner($data));

        return "Email sent Successfully..!";
    }
}
