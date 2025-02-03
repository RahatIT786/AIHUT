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
                                    <h2 class="txbdstitle sttwo hlight">Register Us <span>Travel Partner </span></h2>
                                    <!-- title bottom -->


                                    <!-- image -->
                                    <!-- icon -->

                                    <!-- bar -->
                                    <!-- circle bar -->



                                    <!-- content -->
                                    <p>Whether you're a freelancer, agency, or franchisee, we offer flexible partnership options tailored to your business needs.
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
                                    @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                    @endif

                                    <div class=" no-js" id="-f22637-p11552-o1" lang="en-US" dir="ltr">
                                        <div class="screen-reader-response">
                                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                                            <ul></ul>
                                        </div>
                                        <form method="POST" action="{{route('agent.submit.registerform')}}"  class="-form init" aria-label="Contact form" novalidate="novalida" data-status="init" enctype="multipart/form-data">
                                            @csrf
                                           
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="twr_form_box">
                                                       
                                                        <p class="text-start"><span class="wpcf7-form-control-wrap " data-name="text-30">
                                                            @error('company_name')
                                                            <span class="text-danger text-start">{{ $message }}</span>
                                                            @enderror
                                                            <input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Owner Name" value="" type="text" name="owner_name" />
                                                           
                                                            
                                                        </span>
                                                        </p>
                                                      

                                                    </div>
                                                   
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="twr_form_box">
                                                        <p class="text-start"><span class="wpcf7-form-control-wrap" data-name="text-30">
                                                            @error('owner_name')
                                                            <div class="text-danger text-start">{{ $message }}</div>
                                                            @enderror
                                                            <input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Company Name" value="" type="text" name="company_name" /></span>
                                                        </p>
                                                    </div>
                                                   
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="twr_form_box">
                                                        <p class="text-start"><span class="wpcf7-form-control-wrap" data-name="email-380">
                                                            @error('email')
                                                            <div class="text-danger text-start">{{ $message }}</div>
                                                            @enderror
                                                            <input size="40" maxlength="400" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Email" value="" type="email" name="email" /></span>
                                                        </p>
                                                    </div>
                                                   
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="twr_form_box">
                                                        <p class="text-start"><span class="wpcf7-form-control-wrap" data-name="number-19">
                                                            @error('mobile')
    <div class="text-danger text-start">{{ $message }}</div>
    @enderror
                                                            <input class="wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number form-control" aria-required="true" aria-invalid="false" placeholder="Phone" value="" type="number" name="mobile"  min="1"/></span>
                                                        </p>
                                                    </div>
                                                    
                                                    
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="twr_form_box">
                                                        <p class="text-start"><span class="wpcf7-form-control-wrap" data-name="text-31">
                                                            @error('city')
    <div class="text-danger text-start">{{ $message }}</div>
    @enderror
                                                            <input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="City" value="" type="text" name="city" /></span>
                                                        </p>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="twr_form_box">
                                                        <p class="text-start"><span class="wpcf7-form-control-wrap" data-name="text-31">
                                                            @error('state')
    <div class="text-danger text-start">{{ $message }}</div>
    @enderror
                                                            <input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="State" value="" type="text" name="state" /></span>
                                                        </p>
                                                    </div>
                                                    
                                                </div>



                                                <div class="col-lg-6 col-md-6">
                                                    <div class="twr_form_box">
                                                        <p class="text-start"><span class="wpcf7-form-control-wrap" data-name="text-31">
                                                            @error('pincode')
                                                            <div class="text-danger text-start">{{ $message }}</div>
                                                            @enderror
                                                            <input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Pincode" value="" type="text" name="pincode" /></span>
                                                        </p>
                                                    </div>
                                                   

                                                </div>








                                                <div class="col-lg-6 col-md-6">
                                                    <div class="twr_form_box">
                                                        <p class="text-start"><span class="wpcf7-form-control-wrap" data-name="text-31">
                                                            @error('country')
                                                            <div class="text-danger text-start">{{ $message }}</div>
                                                            @enderror
                                                            <input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Country" value="" type="text" name="country" /></span>
                                                        </p>
                                                    </div>
                                                  

                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="twr_form_box">
                                                        <p class="text-start"><span class="wpcf7-form-control-wrap" data-name="text-31">
                                                            @error('partnership_type')
                                                            <div class="text-danger text-start">{{ $message }}</div>
                                                            @enderror
                                                            {{-- <input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="State" value="" type="text" name="text-31" /> --}}
                                                                 <!-- <label for="partnership_type">Partnership Type:</label> -->
                                                        <select id="partnership_type" name="partnership_type" required>
                                                             <option value="">-- Select Partnership Type --</option>
                                                             <option value="freelancer">Freelancer</option>
                                                                <option value="agency">Agency</option>
                                                                <option value="franchisee">Franchisee</option>
                                                            </select>
                                                        </span>
                                                        </p>
                                                    </div>
                                                </div>


                                                <div class="col-lg-6 col-md-6">
                                                    <div class="twr_form_box">
                                                        <p class="text-start"><span class="wpcf7-form-control-wrap" data-name="text-31">
                                                            @error('hear_about')
                                                            <div class="text-danger text-start">{{ $message }}</div>
                                                            @enderror
                                                            {{-- <input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="State" value="" type="text" name="text-31" /> --}}
                                                                 <!-- <label for="partnership_type">Partnership Type:</label> -->
                                                        <select id="partnership_type" name="hear_about" required>
                                                             <option value="">-- How did you hear about us? --</option>
                                                             <option value="freelancer">Social Media</option>
                                                                <option value="agency">Referral from Friendss</option>
                                                                <option value="franchisee">Referred by Mentors</option>
                                                                <option value="franchisee">Through Our Agents</option>
                                                                <option value="franchisee">Google Search</option>
                                                            </select>
                                                        </span>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="twr_form_box">
                                                        <p class="text-start"><span class="wpcf7-form-control-wrap" data-name="text-31">
                                                            @error('document_type')
                                                            <div class="text-danger text-start">{{ $message }}</div>
                                                            @enderror
                                                            {{-- <input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="State" value="" type="text" name="text-31" /> --}}
                                                                 <!-- <label for="partnership_type">Partnership Type:</label> -->
                                                        <select id="partnership_type" name="document_type" required>
                                                             <option value="">-- Select Document Type --</option>
                                                             <option value="aadhaar">Aadhaar</option>
                                                             <option value="passport">PassPort</option>
                                                             <option value="pancard">Pancard</option>
                                                            </select>
                                                        </span>
                                                        </p>
                                                    </div>
                                                </div>




                                                <div class="col-lg-6 col-md-6 row">
                                                    <div class="twr_form_box ">
                                                        <p class="text-start"><span class="wpcf7-form-control-wrap text-start" data-name="textarea">
                                                            @error('document')
                                                            <div class="text-danger text-start">{{ $message }}</div>
                                                            @enderror
                                                            <input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control" aria-required="true" aria-invalid="false" placeholder="Country" value="" type="file" name="document" accept="image/*" />
                                                        </span>
                                                        </p>
                                                       {{-- <s class="text-start">Attach Aadhaar</span> --}}
                                                       
                                                    </div>
                                                    
                                                   
                                                </div>

                                                
                                                <div class="col-lg-12 col-md-12 row">
                                                    <div class="twr_form_box ">
                                                        <p class="text-start"><span class="wpcf7-form-control-wrap" data-name="textarea">
                                                            @error('address')
                                                            <div class="text-danger text-start">{{ $message }}</div>
                                                            @enderror
                                                            <textarea cols="40" rows="6" maxlength="2000" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Address" name="address"></textarea>
                                                        </span>
                                                        </p>
                                                       {{-- <s class="text-start">Attach Aadhaar</span> --}}
                                                       
                                                    </div>
                                                    
                                                   
                                                </div>
                                               
                                               
                                                <div class=" text-start">
                                                    <p><button type="submit" class="btn btn-primary">SEND NOW</button>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="wpcf7-response-output" aria-hidden="true"></div>
                                        </form>
                                    </div>

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
                                <div class="row align-items-center">
                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                        <div class="ttin text-left">
                                            <!-- title top -->

                                            <!-- title middle -->
                                            <h2 class="txbdstitle sttwo hlight" style="font-weight: 500; font-size: 22px;">Together, let's make great things happen!
                                                Explore open positions,<span><br> Work with Rahat Group.
                                                </span></h2>
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
                                            <a class="btnallt btnall btnallactive" href="{{route('career.form')}}">JOIN OUR TEAM </a>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
          
           
        </div>

    </div>

</div>














@endsection