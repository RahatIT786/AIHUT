@extends('user.layouts.app')
@section('title', 'AIHUT')
@section('content')
    




<div class="template-home-wrapper">
    <div class="page-content-home-page">
        <div data-elementor-type="wp-page" data-elementor-id="11552" class="elementor elementor-11552">
            <div class="elementor-element elementor-element-d8ec2e5 e-flex e-con-boxed e-con e-parent" data-id="d8ec2e5" data-element_type="container">
               
                <div class="e-con-inner">
                    <div class="container d-flex justify-content-evenly p-3" >
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
                        <p class="text-center">Sales Support <br> <a href="tel:+917861078618" >+91 78610 78618</a></p>
                        <p></p>
                       </div>
                       <div class="d-flex flex-column gap-3 justify-content-center align-items-center">
                        <div>
                            <span style="padding: 10px 15px; border: 2px solid #FD8C00; border-radius: 30px ; font-size: larger;"><i class="fa-solid fa-building-user"></i></span>
                        </div>
                        <p class="text-center">Agency Support <br> <a href="+917861078617" >+91 78610 78617</a></p>
                        <p></p>
                       </div>
                        
                    </div>
                    <div class="elementor-element elementor-element-0dff1ab elementor-widget elementor-widget-tts" data-id="0dff1ab" data-element_type="widget" data-widget_type="tts.default">
                        <div class="elementor-widget-container">
                            <!-- title center -->
                            <div class="tts text-center">
                                <div class="ttin">

                                    <!-- icon position -->

                                    <!-- end icon position -->

                                    <!-- title top -->


                                    <!-- icon position -->

                                    <!-- end icon position -->

                                    <!-- title middle -->
                                    <h2 class="txbdstitle sttwo hlight">Contact Us <span>Today! </span></h2>
                                    <!-- title bottom -->


                                    <!-- image -->
                                    <!-- icon -->

                                    <!-- bar -->
                                    <!-- circle bar -->



                                    <!-- content -->
                                    <p>Reach out for more details on how you can get involved. Our team is ready to help you launch or elevate your travel business.
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
                                

                                    <div class="wpcf7 no-js" id="wpcf7-f22637-p11552-o1" lang="en-US" dir="ltr">
                                        <div class="screen-reader-response">
                                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                                            <ul></ul>
                                        </div>
                                        <form action="/sk/tramo/contact/#wpcf7-f22637-p11552-o1" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
                                            <div style="display: none;">
                                                <input type="hidden" name="_wpcf7" value="22637" />
                                                <input type="hidden" name="_wpcf7_version" value="5.9.8" />
                                                <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f22637-p11552-o1" />
                                                <input type="hidden" name="_wpcf7_container_post" value="11552" />
                                                <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="twr_form_box">
                                                        <p><span class="wpcf7-form-control-wrap" data-name="text-30"><input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Owner Name" value="" type="text" name="text-30" /></span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="twr_form_box">
                                                        <p><span class="wpcf7-form-control-wrap" data-name="text-30"><input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Company Name" value="" type="text" name="text-30" /></span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="twr_form_box">
                                                        <p><span class="wpcf7-form-control-wrap" data-name="email-380"><input size="40" maxlength="400" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Email" value="" type="email" name="email-380" /></span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="twr_form_box">
                                                        <p><span class="wpcf7-form-control-wrap" data-name="number-19"><input class="wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number form-control" aria-required="true" aria-invalid="false" placeholder="Phone" value="" type="number" name="number-19" /></span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="twr_form_box">
                                                        <p><span class="wpcf7-form-control-wrap" data-name="text-31"><input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="City" value="" type="text" name="text-31" /></span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="twr_form_box">
                                                        <p><span class="wpcf7-form-control-wrap" data-name="text-31"><input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="State" value="" type="text" name="text-31" /></span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="twr_form_box">
                                                        <p><span class="wpcf7-form-control-wrap" data-name="text-31"><input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Country" value="" type="text" name="text-31" /></span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="twr_form_box">
                                                        <p><span class="wpcf7-form-control-wrap" data-name="text-31">
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
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="twr_form_box ">
                                                        <p><span class="wpcf7-form-control-wrap" data-name="textarea"><textarea cols="40" rows="6" maxlength="2000" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Message" name="textarea"></textarea></span>
                                                        </p>
                                                    </div>
                                                    <div class=" text-center">
                                                        <p><button type="submit" class="btn btn-primary">SEND NOW</button>
                                                        </p>
                                                    </div>
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
            <div class="elementor-element elementor-element-7b13e97 e-flex e-con-boxed e-con e-parent" data-id="7b13e97" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-20efe06 e-con-full e-flex e-con e-child" data-id="20efe06" data-element_type="container">
                        <div class="elementor-element elementor-element-a5f9aff elementor-widget elementor-widget-tts" data-id="a5f9aff" data-element_type="widget" data-widget_type="tts.default">
                            <div class="elementor-widget-container">
                                <!-- title center -->
                                <div class="tts text-center">
                                    <div class="ttin">

                                        <!-- icon position -->

                                        <!-- image -->
                                        <div class="ttit">
                                            <img decoding="async" width="139" height="150" src="https://demo.themexbd.com/sk/tramo/wp-content/uploads/2024/09/con_3.png" class="attachment-large size-large wp-image-27854" alt="" />
                                        </div>
                                        <!-- icon -->

                                        <!-- bar -->
                                        <!-- circle bar -->


                                        <!-- end icon position -->

                                        <!-- title top -->
                                        <h4 class="txbdstitle tsmall stone hlight txbdbcolor">OFFICES </h4>


                                        <!-- icon position -->

                                        <!-- end icon position -->

                                        <!-- title middle -->
                                        <!-- title bottom -->



                                        <!-- content -->
                                        <p>Head Office : Mumbai <br>Corporate Offices : Delhi, Bangalore, Lucknow & Dubai </p>

                                    </div>
                                    <!-- inner title -->

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-63b65bc e-con-full e-flex e-con e-child" data-id="63b65bc" data-element_type="container">
                        <div class="elementor-element elementor-element-c452c20 elementor-widget elementor-widget-tts" data-id="c452c20" data-element_type="widget" data-widget_type="tts.default">
                            <div class="elementor-widget-container">
                                <!-- title center -->
                                <div class="tts text-center">
                                    <div class="ttin">

                                        <!-- icon position -->

                                        <!-- image -->
                                        <div class="ttit">
                                            <img decoding="async" width="162" height="145" src="https://demo.themexbd.com/sk/tramo/wp-content/uploads/2024/09/con_2.png" class="attachment-large size-large wp-image-27853" alt="" />
                                        </div>
                                        <!-- icon -->

                                        <!-- bar -->
                                        <!-- circle bar -->


                                        <!-- end icon position -->

                                        <!-- title top -->
                                        <h4 class="txbdstitle tsmall stone hlight txbdbcolor">EMAIL </h4>


                                        <!-- icon position -->

                                        <!-- end icon position -->

                                        <!-- title middle -->
                                        <!-- title bottom -->



                                        <!-- content -->
                                        <p><a href="mailto:nazim@aihut.in">nazim@aihut.in</a><br> <a href="mailto:info@rahat.in">info@rahat.in</a> </p>

                                    </div>
                                    <!-- inner title -->

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-3d37133 e-con-full e-flex e-con e-child" data-id="3d37133" data-element_type="container">
                        <div class="elementor-element elementor-element-960220d elementor-widget elementor-widget-tts" data-id="960220d" data-element_type="widget" data-widget_type="tts.default">
                            <div class="elementor-widget-container">
                                <!-- title center -->
                                <div class="tts text-center">
                                    <div class="ttin">

                                        <!-- icon position -->

                                        <!-- image -->
                                        <div class="ttit">
                                            <img decoding="async" width="152" height="146" src="https://demo.themexbd.com/sk/tramo/wp-content/uploads/2024/09/con_1.png" class="attachment-large size-large wp-image-27852" alt="" />
                                        </div>
                                        <!-- icon -->

                                        <!-- bar -->
                                        <!-- circle bar -->


                                        <!-- end icon position -->

                                        <!-- title top -->
                                        <h4 class="txbdstitle tsmall stone hlight txbdbcolor">PHONE </h4>


                                        <!-- icon position -->

                                        <!-- end icon position -->

                                        <!-- title middle -->
                                        <!-- title bottom -->



                                        <!-- content -->
                                        <p><a href="tel:+917863878630">+91 78638 78630 </a><br><a href="tel:+917863878632">  +91 786 38 786 32 </a></p>

                                    </div>
                                    <!-- inner title -->

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
                                            <h2 class="txbdstitle sttwo hlight">To work <span>tour guide</span> please fill the form</h2>
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
                                            <a class="btnallt btnall btnallactive" href="#">JOIN OUR TEAM </a>
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