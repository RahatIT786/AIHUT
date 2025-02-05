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

    private function getModel($type){
        $models=[
            'signup'=>SignupForm::class,
            'register'=>Partner::class,
            'contactus'=>ContactUs::class,
            'career'=>Career::class,
        ];

        return $models[$type]?? null;
    }
    
    public function userEnquries(){
        $enquiries=SignupForm::where('delete_status',1)->get();
        $regiEq=Partner::where('user_status',1)->get();
        $contactEnq=ContactUs::where('delete_status',1)->get();
        $careerEnq=Career::where('delete_status',1)->get();
        return view('admin.pages.enquiries',compact('enquiries','regiEq','contactEnq','careerEnq'));
    }




    public function listEnquiries($type)
    {
        // Dynamically fetch data based on enquiry type
        $model = $this->getModel($type);
        if (!$model) {
            abort(404); // If the enquiry type is invalid, show 404 error
        }

        
        $enquiries = $model::all();
        return view('admin2.pages.enquiries', compact('enquiries', 'type'));
    }


    public function liveSearch(Request $request, $type)
    {
        // dd("Live search triggered", $request->all());
        $query = $request->get('query');
        $modelClass = $this->getModel($type);

        // If model exists, perform search
        if ($modelClass) {
            // Dynamically query the model based on search query
            $enquiries = $modelClass::where('name', 'like', '%' . $query . '%') // Adjust 'name' to the column you want to search by
                                 ->orWhere('email', 'like', '%' . $query . '%') // Add more columns to search if necessary
                                //  ->orWhere('owner_name', 'like', '%' . $query . '%') // Add more columns to search if necessary
                                //  ->orWhere('full_name', 'like', '%' . $query . '%') // Add more columns to search if necessary
                                 ->orWhere('city', 'like', '%' . $query . '%') // Add more columns to search if necessary
                                 ->orWhere('phone', 'like', '%' . $query . '%') // Add more columns to search if necessary
                                
                                 ->get();
        } else {
            $enquiries = [];
        }

        // Return the partial view with the search results
        // return response()->json(view('admin2.pages.enquiries', compact('enquiries'))->render());
        return view('admin2.pages.enquiries', compact('enquiries'));
    }




}
