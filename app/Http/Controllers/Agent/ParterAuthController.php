<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;

use App\Models\Partner;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ParterAuthController extends Controller
{

    public $filePath;
    public function partnerRegistration(Request $request){
        // dd($request->all());
        $validator =Validator::make($request->all(),[
            'owner_name'=>'required|string|max:50',
            'company_name'=>'required|string|max:70',
            'mobile'=>'required|string|max:10|unique:partners',
            'city'=>'required|string|max:30',
            'state'=>'required|string|max:40',
            'country'=>'required|string|max:40',
            'email'=>'required|email|max:40|unique:partners',
            'partnership_type'=>'required|string|max:20',
            'pincode'=>'required|string|max:20',
            'hear_about'=>'required|string|max:20',
            'document_type'=>'required|string|max:20',
            'address'=>'required|string|max:300',
            'document'=>'required',
            'g-recaptcha-response' => 'required',

            
            
    
        ]);

        if($request->hasFile('document')){
            $file=$request->file('document');

            $filePath=$file->store('public/agent_document');


        }

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

      try{

        
        if($request->hasFile('document')){
            $file=$request->file('document');

            $this->filePath=$file->store('public/agent_document');

            
        }







        $partner=Partner::create([
            'owner_name'=>$request->owner_name,
            'company_name'=>$request->company_name,
            'mobile'=>$request->mobile,
            'city'=>$request->city,
            'state'=>$request->state,
            'country'=>$request->country,
            'email'=>$request->email,
            'partership_type'=>$request->partnership_type,
            'password'=>Hash::make('root'),
            'pincode'=>$request->pincode,
            'hear_about'=>$request->hear_about,
            'document_type'=>$request->document_type,
            'address'=>$request->address,
            'document_path'=>$this->filePath,

        ]);
        // Auth::guard('partner')->login($partner);

        
       
        session()->flash('success','Thank you For Registration Login credential send your mail');
        return redirect()->route('agent.regiform');

      }catch(Exception $e){
        dd($e->getMessage());
        session()->flash('success',$e->getMessage());
        // redirect()->back();

      }

        

    }



    public function partnerLogout(){
        Auth::guard('partner')->logout();
        return redirect()->route('home');
    }
}
