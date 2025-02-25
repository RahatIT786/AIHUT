<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\ContactUs;
use App\Models\Partner;
use App\Models\SignupForm;
use App\Services\AdminDashboardClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class AdminController extends Controller
{

    protected $adminDashboardClass;

    public function __construct(AdminDashboardClass $adminDashboard)
    {
        $this->adminDashboardClass = $adminDashboard;
    }



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
        $enquiries=SignupForm::where('delete_status',1)->orderBy('created_at', 'desc')->get();
        $regiEq=Partner::where('delete_status',1)->orderBy('created_at', 'desc')->get();
        $contactEnq=ContactUs::where('delete_status',1)->orderBy('created_at', 'desc')->get();
        $careerEnq=Career::where('delete_status',1)->orderBy('created_at', 'desc')->get();


        return view('admin.pages.enquiries',compact('enquiries','regiEq','contactEnq','careerEnq'));
    }




    public function listEnquiries(Request $request,$type)
    {
        // Dynamically fetch data based on enquiry type
        $model = $this->getModel($type);
        if (!$model) {
            abort(404); // If the enquiry type is invalid, show 404 error
        }

        $perPage=$request->input('per_page',10);        
        $enquiries = $model::orderBy('created_at', 'desc')->where('delete_status',1)->paginate($perPage);
        // $enquiries = $model::all();
        return view('admin2.pages.enquiries', compact('enquiries', 'type','perPage'));
    }


    public function liveSearch(Request $request, $type)
    {
        // dd("Live search triggered", $request->all());
        $query = $request->get('query');
        $modelClass = $this->getModel($type);

        // If model exists, perform search
        if ($modelClass) {
            // Dynamically query the model based on search query

            $table=(new $modelClass)->getTable();

            $columns=Schema::getColumnListing($table);

            $enquiries=$modelClass::query();

            foreach($columns as $column){
                $enquiries->orWhere($column,'like','%'.$query.'%');
            }

            $enquiries=$enquiries->get();

            // $enquiries = $modelClass::where('name', 'like', '%' . $query . '%') // Adjust 'name' to the column you want to search by
            //                      ->orWhere('email', 'like', '%' . $query . '%') // Add more columns to search if necessary
            //                     //  ->orWhere('owner_name', 'like', '%' . $query . '%') // Add more columns to search if necessary
            //                     //  ->orWhere('full_name', 'like', '%' . $query . '%') // Add more columns to search if necessary
            //                      ->orWhere('city', 'like', '%' . $query . '%') // Add more columns to search if necessary
            //                      ->orWhere('phone', 'like', '%' . $query . '%')->get(); // Add more columns to search if necessary
                                

                                //  if(Schema::hasColumn((new $modelClass)->getTable(),p))
                                
        } else {
            $enquiries = [];
        }

        // Return the partial view with the search results
        // return response()->json(view('admin2.pages.enquiries', compact('enquiries'))->render());
        // return view('admin2.pages.enquiries', compact('enquiries','type'));
        // return response()->json([
        //     'success' => true,
        //      'enquiries' => $enquiries,
        //      'type' => $type,
        //     ]);
    }


    public function showDashboard(){
       
        $data=[

            'agentSignUpDetails'=>SignupForm::where('delete_status',1)->count(),
            'agentRegisterDetails'=>Partner::where('delete_status',1)->count(),
            'contactUsDetails'=>ContactUs::where('delete_status',1)->count(),
            'careerDetails'=>Career::where('delete_status',1)->count(),

            'signUpMonthWiseCount' => $this->adminDashboardClass->getSignupCountMonthWise(),
            // 'signUpDayWiseCount' => $this->adminDashboardClass->getSignupCountDayWise(),
            'allChartData'=>$this->adminDashboardClass->allModelChartData(),
        ];

        
        // $data=collect($models)->mapWithKeys(fn($model,$key)=>[
        //     $key=>$model::where('delete_status',1)->count()
        // ])->toArray();


        $data2 =  $this->adminDashboardClass->getSignupCountMonthWise();
        // dd($data2);
        return view('admin2.pages.dashboard',compact('data'));
    }



    public function deleteEnquiry($type,$id)
    {
       
       $enquiry= $this->getModel($type)::find($id);
        $enquiry->delete_status=2;
        $enquiry->save();
        return redirect()->back()->with('message', 'Enquiry deleted successfully!');
       
    }

}
