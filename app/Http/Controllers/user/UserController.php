<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Jobs\SendContactFormEmail;
use App\Mail\ContactFormMail;
use App\Models\Career;
use App\Models\ContactUs;
use App\Models\SignupForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function submitSignUpForm(Request $request)
{
    // Validate the form data
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'mobile' => 'required|string|max:15',
        'email' => 'required|email|max:255|unique:signup_forms,email',
        'city' => 'required|string|max:255',
        // Include any validation rules for file fields if necessary
    ]);

    // Save the form data to the database (Example)
    $user = new SignupForm();
    $user->name = $request->input('name');
    $user->mobile = $request->input('mobile');
    $user->email = $request->input('email');
    $user->city = $request->input('city');
    // Save file if needed
    // $user->file = $request->file('file')->store('uploads'); // Example for file upload

    $user->save();

    return redirect()->back()->with('message', 'Form submitted successfully!');
}


    public function sumbitUserContactForm(Request $request){
         // Validate the form data
         $validatedData = $request->validate([
            'owner_name' => 'required|max:255',
            'company_name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric',
            'city' => 'required|max:255',
            'state' => 'required|max:255',
            'country' => 'required|max:255',
            'partnership_type' => 'required|in:freelancer,agency,franchisee',
            'message' => 'required|max:2000',
        ]);

        // Store the validated data in the database
        ContactUs::create($validatedData);
        $contactDetails = [
            'name' => $validatedData['owner_name'],  // Use the validated data
            'email' => $validatedData['email'],      // Use the validated data
            'phone' => $validatedData['phone'],      // Use the validated data
            'message' => $validatedData['message'],  // Use the validated data
            'partnership_type' => $validatedData['partnership_type'],
        ];
    

        // SendContactFormEmail::dispatch($contactDetails);
        Mail::to(['akhtar@rahat.in','hina@rahat.in'])->send(new ContactFormMail($contactDetails));

        // Redirect back with a success message
        return redirect()->back()->with('message', 'Thank you for Contact Us Our Executive will contact you!');
        
    } 










    public function userCareerForm(Request $request){
        // Validate the input fields
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'address' => 'required|string|max:1000',
            'dob' => 'required|date',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'phone' => 'required',
            'email' => 'required|email|max:255',
            'area_of_interest' => 'required|string|max:255',
            'skill_level' => 'required|string',
            'others' => 'nullable|string|max:255|required_if:skill_level,Uneducated',
            'cover_letter' => 'required|string|max:2000',
            'why_we_hire' => 'required|string|max:2000',
        ]);

        Career::create($validated);
        return redirect()->back()->with('message', 'Congratulations for Join with Our RahatGroup Our Tech Team will contact you!');
    }







}
