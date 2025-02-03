@extends('admin.layouts.app')

@section('content')
<div class="section-content-right p-6">

    <div class="header-dashboard" style="height:100vh; overflow: scroll;">

        <div class="d-flex flex-column" style="overflow: scroll; padding: 2rem;">

            <div class="col-lg-12 bg-white shadow-md rounded-2xl overflow-hidden" >
                <div class="">
                    {{-- <h2 class="">Enquiry List</h2> --}}
                </div>
                <div class="p-4">
                    <h3 class="py-3">SignUp Enquiry</h3>
                    <table class="min-w-full leading-normal border border-gray-200 rounded-lg">
                        <thead>
                            <tr>
                                {{-- <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">
                                    Enquiry Type
                                </th> --}}
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">
                                    Name
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">
                                    Mobile
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">
                                    Email
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-sm font-semibold text-gray-600 uppercase tracking-wider">
                                    City
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($enquiries as $enquiry)
                            <tr class="hover:bg-gray-50">
                                <td class="px-5 py-4 border-b border-gray-200 text-sm text-gray-700">
                                    {{ $enquiry->name }}
                                </td>
                                <td class="px-5 py-4 border-b border-gray-200 text-sm text-gray-700">
                                    {{ $enquiry->mobile }}
                                </td>
                                <td class="px-5 py-4 border-b border-gray-200 text-sm text-gray-700">
                                    {{ $enquiry->email }}
                                </td>
                                <td class="px-5 py-4 border-b border-gray-200 text-sm text-gray-700">
                                    {{ $enquiry->city }}
                                </td>
                                {{-- <td class="px-5 py-4 border-b border-gray-200 text-center text-sm">
                                    <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">View</button>
                                    <button class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600">Delete</button>
                                </td> --}}
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <hr>
            
            <div class="col-lg-12 bg-white shadow-md rounded-2xl overflow-hidden" >
                <div class="">
                  
                </div>
                <div class="p-4">
                    <h3 class="py-3">Register Enquiry</h3>
                    <table class="min-w-full leading-normal border border-gray-200 rounded-lg">
                        <thead>
                            <tr>
                                
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">
                                   Owner Name
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">
                                    company_name
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">
                                    Mobile
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-sm font-semibold text-gray-600 uppercase tracking-wider">
                                    City
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($regiEq as $enquiry)
                            <tr class="hover:bg-gray-50">
                                <td class="px-5 py-4 border-b border-gray-200 text-sm text-gray-700">
                                    {{ $enquiry->owner_name }}
                                </td>
                                <td class="px-5 py-4 border-b border-gray-200 text-sm text-gray-700">
                                    {{ $enquiry->company_name }}
                                </td>
                                <td class="px-5 py-4 border-b border-gray-200 text-sm text-gray-700">
                                    {{ $enquiry->mobile }}
                                </td>
                                <td class="px-5 py-4 border-b border-gray-200 text-sm text-gray-700">
                                    {{ $enquiry->city }}
                                </td>
                               
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-2xl overflow-hidden" >
                <div class="">
                  
                </div>
                <div class="p-4">
                    <h3 class="py-3">Contactus Enquiry</h3>
                    <table class="min-w-full leading-normal border border-gray-200 rounded-lg">
                        <thead>
                            <tr>
                                
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">
                                    Owner_name
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">
                                    Company_name
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">
                                    Email
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-sm font-semibold text-gray-600 uppercase tracking-wider">
                                    City
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contactEnq as $enquiry)
                            <tr class="hover:bg-gray-50">
                                <td class="px-5 py-4 border-b border-gray-200 text-sm text-gray-700">
                                    {{ $enquiry->owner_name }}
                                </td>
                                <td class="px-5 py-4 border-b border-gray-200 text-sm text-gray-700">
                                    {{ $enquiry->company_name }}
                                </td>
                                <td class="px-5 py-4 border-b border-gray-200 text-sm text-gray-700">
                                    {{ $enquiry->email }}
                                </td>
                                <td class="px-5 py-4 border-b border-gray-200 text-sm text-gray-700">
                                    {{ $enquiry->city }}
                                </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-2xl overflow-hidden" >
                <div class="">
                    {{-- <h2 class="">Enquiry List</h2> --}}
                </div>
                <div class="p-4">
                    <h3 class="py-3">Career Enquiry</h3>
                    <table class="min-w-full leading-normal border border-gray-200 rounded-lg">
                        <thead>
                            <tr>
                              
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">
                                    Full_name
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">
                                    Area_of_interest
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">
                                    Email
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-sm font-semibold text-gray-600 uppercase tracking-wider">
                                    City
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-sm font-semibold text-gray-600 uppercase tracking-wider">
                                    Skill_level
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($careerEnq as $enquiry)
                            <tr class="hover:bg-gray-50">
                                <td class="px-5 py-4 border-b border-gray-200 text-sm text-gray-700">
                                    {{ $enquiry->full_name }}
                                </td>
                                <td class="px-5 py-4 border-b border-gray-200 text-sm text-gray-700">
                                    {{ $enquiry->area_of_interest }}
                                </td>
                                <td class="px-5 py-4 border-b border-gray-200 text-sm text-gray-700">
                                    {{ $enquiry->email }}
                                </td>
                                <td class="px-5 py-4 border-b border-gray-200 text-sm text-gray-700">
                                    {{ $enquiry->city }}
                                </td>
                                <td class="px-5 py-4 border-b border-gray-200 text-sm text-gray-700">
                                    {{ $enquiry->skill_level }}
                                </td>
                               
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
   
</div>
@endsection
