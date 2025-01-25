<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ParterAuthController extends Controller
{
    public function partnerRegistration(Request $request){

        $validator =Validator::make($request->all(),[
            'owner_name'=>'required|string|max:50',
            'company_name'=>'required|string|max:70',
            'mobile'=>'required|string|max:10',
            'state'=>'required|string|max:40',
            'country'=>'required|string|max:40',
            'email'=>'required|email|max:40',
            'partership_type'=>'required|string|max:20',
            
    
        ]);

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        $partner=Partner::create([
            'owner_name'=>$request->owner_name,
            'company_name'=>$request->owner_name,
            'mobile'=>$request->owner_name,
            'state'=>$request->owner_name,
            'country'=>$request->owner_name,
            'email'=>$request->owner_name,
            'partership_type'=>$request->owner_name,

        ]);

        Auth::guard('partner')->login($partner);
        return redirect()->route('home');

    }



    public partnerLogout(){
        Auth::guard('partner')->logout();
        return redirect()->route('home');
    }
}
