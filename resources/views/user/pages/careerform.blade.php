@extends('user.layouts.app')
@section('content')



<div class="template-home-wrapper">
    <div class="page-content-home-page">
        <div data-elementor-type="wp-page" data-elementor-id="11552" class="elementor elementor-11552">
            <div class="elementor-element elementor-element-d8ec2e5 e-flex e-con-boxed e-con e-parent" data-id="d8ec2e5" data-element_type="container">
               
                <div class="e-con-inner">
                    {{-- <div class="container d-flex justify-content-evenly p-3" >
                       <div class="d-flex flex-column gap-3 justify-content-center align-items-center">
                        <div>
                            <span style="padding: 10px 15px; border: 2px solid #FD8C00; border-radius: 30px ; font-size: larger;"><i class="fa-solid fa-phone"></i></span>
                        </div>
                        <p class="text-center">24/7 Customer Support <br> <a href="tel:+917863878630" >+91 786 38 786 30</a></p>
                        <p></p>
                       </div>
                       <div class="d-flex flex-column gap-3 justify-content-center align-items-center">
                        <div>
                            <span style="padding: 10px 15px; border: 2px solid #FD8C00; border-radius: 30px ; font-size: larger;"><i class="fa-brands fa-sellsy"></i></span>
                        </div>
                        <p class="text-center">Sales Support <br> <a href="tel:+917506195551" >+91 750619 5551</a></p>
                        <p></p>
                       </div>
                       <div class="d-flex flex-column gap-3 justify-content-center align-items-center">
                        <div>
                            <span style="padding: 10px 15px; border: 2px solid #FD8C00; border-radius: 30px ; font-size: larger;"><i class="fa-solid fa-building-user"></i></span>
                        </div>
                        <p class="text-center">Agency Support <br> <a href="+917861078617" >+91 78610 78617</a></p>
                        <p></p>
                       </div>
                        
                    </div> --}}
                    <div class="elementor-element elementor-element-0dff1ab elementor-widget elementor-widget-tts" data-id="0dff1ab" data-element_type="widget" data-widget_type="tts.default">
                        <div class="elementor-widget-container">
                            <!-- title center -->
                            <div id="partner-form" class="tts text-center">
                                <div class="ttin">

                                    <!-- icon position -->

                                    <!-- end icon position -->

                                    <!-- title top -->


                                    <!-- icon position -->

                                    <!-- end icon position -->

                                    <!-- title middle -->
                                    <h2 class="txbdstitle sttwo hlight">Join With Us <span>Grow With Us </span></h2>
                                    <!-- title bottom -->


                                    <!-- image -->
                                    <!-- icon -->

                                    <!-- bar -->
                                    <!-- circle bar -->



                                    <!-- content -->
                                    <p>Join our dynamic team and embark on a rewarding career journey! Whether you're looking to grow your skills or take your career to the next level, we offer opportunities that align with your ambitions. Become a part of our innovative workforce and make a meaningful impact!
                                        </p>

                                </div>
                                <!-- inner title -->

                            </div>

                        </div>
                    </div>
                    <div class="elementor-element elementor-element-de38647 tramo-star-rating--align-center tramo-star-rating--align-center elementor-widget elementor-widget-witr_section_apartment" data-id="de38647" data-element_type="widget" data-widget_type="witr_section_apartment.default">
                        <div class="elementor-widget-container">

                            <div class="apartment_area">
                                <div class="apartment_text">
                                    <!-- title -->

                                    <!-- content -->

                                </div>
                                <div class="witr_apartment_form">
                                    @if (session('message'))
                                    <div class="alert alert-success text-center">
                                        {{ session('message') }}
                                    </div>
                                    @endif

                                    <div class=" no-js" id="-f22637-p11552-o1" lang="en-US" dir="ltr">
                                        <div class="screen-reader-response">
                                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                                            <ul></ul>
                                        </div>
                                        <form method="POST" action="{{ route('career.form.submit') }}" class="-form init" novalidate="novalidate" enctype="multipart/form-data">
                                            @csrf
                                        
                                            <div class="row">
                                                <!-- Full Name -->
                                                <div class="col-lg-6">
                                                    <input value="{{ old('full_name') }}" type="text" name="full_name" placeholder="Full Name" class="form-control" required>
                                                    @error('full_name')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                        
                                                <!-- Address -->
                                                <div class="col-lg-6">
                                                    <input type="text" {{ old('address') }} name="address" placeholder="Address" class="form-control" required>
                                                    @error('address')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                        
                                                <!-- Date of Birth -->
                                                <div class="col-lg-6">
                                                    <label for="" class="text-start">Date of Birth</label>
                                                    <input type="date" {{ old('dob') }} name="dob" placeholder="Date of Birth" class="form-control" required>
                                                    @error('dob')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                        
                                                {{-- <!-- Date -->
                                                <div class="col-lg-6">
                                                    <input type="date" name="date" placeholder="Date" class="form-control" required>
                                                    @error('date')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div> --}}
                                        
                                                <!-- City -->
                                                <div class="col-lg-6">
                                                    <label for=""></label>
                                                    <input type="text" {{ old('city') }} name="city" placeholder="City" class="form-control" required>
                                                    @error('city')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                        
                                                <!-- State -->
                                                <div class="col-lg-6">
                                                    <input type="text" {{ old('state') }} name="state" placeholder="State" class="form-control" required>
                                                    @error('state')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                        
                                                <!-- Phone -->
                                                <div class="col-lg-6">
                                                    <input type="text" {{ old('phone') }} name="phone" placeholder="Phone" class="form-control" required>
                                                    @error('phone')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                        
                                                <!-- Email -->
                                                <div class="col-lg-6">
                                                    <input type="email" {{ old('email') }} name="email" placeholder="Email" class="form-control" required>
                                                    @error('email')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                        
                                                <!-- Area of Interest -->
                                                {{-- <div class="col-lg-6">
                                                    <input type="text" name="area_of_interest" placeholder="Area of Interest" class="form-control" required>
                                                    @error('area_of_interest')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div> --}}
                                        
                                                <!-- Position -->
                                                <div class="col-lg-6">
                                                    <select name="area_of_interest" class="form-control" required>
                                                        <option value="" selected disabled>Choose Area Of Interest</option>
                                                        <option value="Branch Manager">Branch Manager</option>
                                                        <option value="Tour Leaders">Tour Leader</option>
                                                        <option value="Sales Executive">Sales Executive</option>
                                                        <option value="Web Developers">Web Developer</option>
                                                        <option value="Ticketing and Visa Staff">Ticketing and Visa Staff</option>
                                                        <option value="Accountant">Accountant</option>
                                                        <option value="Office Boy">Office Boy</option>
                                                        <option value="Drivers">Driver</option>
                                                        {{-- <option value="Other">Other</option> --}}
                                                    </select>
                                                    @error('area_of_interest')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                        
                                                <!-- Skill Level -->
                                                <div class="col-lg-6">
                                                    <select name="skill_level" id="skill_level" class="form-control" required>
                                                        <option value="" selected disabled>Choose Skill Level</option>
                                                        <option value="Graduate">Graduate</option>
                                                        <option value="Diploma Holder">Diploma Holder</option>
                                                        <option value="Completed 12th">Completed 12th</option>
                                                        <option value="Completed 10th">Completed 10th</option>
                                                        <option value="Uneducated">Uneducated</option>
                                                        <option value="others">Others</option>
                                                        
                                                    </select>
                                                    @error('skill_level')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                              
                                               <div class="col-lg-6" id="other_skill_level">
                                                <input type="text" name="others" placeholder="Enter Other Skill Level"  class="form-control">
                                                @error('others')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                               
                                            
                                        
                                                <!-- Cover Letter -->
                                                <div class="col-lg-12">
                                                    <textarea {{ old('cover_letter') }} name="cover_letter" placeholder="Cover Letter" class="form-control" required></textarea>
                                                    @error('cover_letter')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                 <!-- Cover Letter -->
                                                 <div class="col-lg-12">
                                                    <textarea {{ old('why_we_hire') }} name="why_we_hire" placeholder="Why do you think we should offer you this job?" class="form-control" required></textarea>
                                                    @error('why_we_hire')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                        
                                                <!-- Document Type -->
                                                {{-- <div class="col-lg-6">
                                                    <select name="document_type" class="form-control" required>
                                                        <option value="aadhaar">Aadhaar</option>
                                                        <option value="passport">Passport</option>
                                                        <option value="pancard">Pancard</option>
                                                    </select>
                                                    @error('document_type')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror --}}
                                                </div>
                                        
                                                <!-- Document Upload -->
                                                {{-- <div class="col-lg-6">
                                                    <input type="file" name="document" class="form-control">
                                                    @error('document')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div> --}}
                                        
                                                <!-- Submit Button -->
                                                <div class="col-lg-12 text-center">
                                                    <button type="submit" class="btn btn-primary">SEND NOW</button>
                                                </div>
                                            </div>
                                        </form>

                                        <script>
                                            document.getElementById('other_skill_level').style.display = 'none';
                                            // When the document is ready, we add an event listener to the "skill_level" dropdown
                                            document.getElementById('skill_level').addEventListener('change', function() {
                                                // Get the selected value
                                                var selectedValue = this.value;
                                        
                                                // Check if the selected value is "Uneducated"
                                                if (selectedValue === "others") {
                                                    // Show the "Other" skill level input
                                                    document.getElementById('other_skill_level').style.display = 'block';
                                                } else {
                                                    // Hide the "Other" skill level input
                                                    document.getElementById('other_skill_level').style.display = 'none';
                                                }
                                            });
                                        </script>
                                        


                                       
                                        
                                    </div>
                                  

                                </div>
                            </div>

                            <div class="d-flex justify-content-center align-items-center">
                               <div>
                                <h1>
                                    We have multiple vacancies and are urgently looking to
                fill the following roles across India:
                                </h1>
                                <ul>
                                    <li>Php Developers (Laravel, MySql)</li>
                                    <li>Branch Managers.</li>
                                    <li>Graphic Designers.</li>
                                    <li>Web Developers.</li>
                                    <li>Sales & Marketing Manager</li>
                                    <li>Accountants</li>
                                    <li>Drivers & Office Boys.</li>
                                </ul>
                                <p><i class="fa-solid fa-map-location-dot"></i> <strong>Locations:</strong> Mumbai, Delhi, Lucknow, Bangalore, Jaipur, Ahmedabad, Indore, Bhopal</p>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
          
            <div class="elementor-element elementor-element-3b83cf8 e-flex e-con-boxed e-con e-parent" data-id="3b83cf8" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-8a0f17a elementor-widget elementor-widget-tts" data-id="8a0f17a" data-element_type="widget" data-widget_type="tts.default">
                        <div class="elementor-widget-container">

                            <!-- title right -->
                            <div class="tts ttssb">
                                {{-- <div class="row align-items-center">
                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                        <div class="ttin text-left">
                                            <!-- title top -->

                                            <!-- title middle -->
                                            <h2 class="txbdstitle sttwo hlight">Together, let's make great things happen!
                                                Explore open positions<span> Work with Rahat Group.
                                                </span> please fill the form</h2>
                                            <!-- title bottom -->
                                            <!-- image -->
                                            <!-- icon -->

                                            <!-- bar -->
                                            <!-- circle bar -->


                                            <!-- content -->
                                        </div>
                                        <!-- inner title -->

                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <!-- button -->
                                        <div class="text-right ttitlebtn">
                                            <a class="btnallt btnall btnallactive" href="#partner-form">JOIN OUR TEAM </a>
                                        </div>

                                    </div>

                                </div> --}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
          
           
        </div>

    </div>

</div>














@endsection