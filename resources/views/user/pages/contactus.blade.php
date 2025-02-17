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
                        <p class="text-center">Sales Support <br> <a href="tel:+918097734658" >+91 809 77 346 58</a></p>
                        <p></p>
                       </div>
                       <div class="d-flex flex-column gap-3 justify-content-center align-items-center">
                        <div>
                            <span style="padding: 10px 15px; border: 2px solid #FD8C00; border-radius: 30px ; font-size: larger;"><i class="fa-solid fa-building-user"></i></span>
                        </div>
                        <p class="text-center">Agency Support <br> <a href="tel:+917063105786" >+91 706 31 05 786</a></p>
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
                                        <form action="{{route('user.contactus.formsubmit')}}" method="post" class=" init" aria-label="Contact form" novalidate="" data-status="init">
                                            @csrf
                                           
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="twr_form_box">
                                                        <input type="text" name="owner_name" placeholder="Owner Name" class="form-control" value="{{ old('owner_name') }}">
                                                        @error('owner_name')<span class="text-danger">{{ $message }}</span>@enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="twr_form_box">
                                                        <input type="text" name="company_name" placeholder="Company Name" class="form-control" value="{{ old('company_name') }}">
                                                        @error('company_name')<span class="text-danger">{{ $message }}</span>@enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="twr_form_box">
                                                        <input type="email" name="email" placeholder="Email" class="form-control" value="{{ old('email') }}">
                                                        @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="twr_form_box">
                                                        <input type="number" name="phone" placeholder="Phone" class="form-control" value="{{ old('phone') }}">
                                                        @error('phone')<span class="text-danger">{{ $message }}</span>@enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="twr_form_box">
                                                        <input type="text" name="city" placeholder="City" class="form-control" value="{{ old('city') }}">
                                                        @error('city')<span class="text-danger">{{ $message }}</span>@enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="twr_form_box">
                                                        <input type="text" name="state" placeholder="State" class="form-control" value="{{ old('state') }}">
                                                        @error('state')<span class="text-danger">{{ $message }}</span>@enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="twr_form_box">
                                                        <input type="text" name="country" placeholder="Country" class="form-control" value="{{ old('country') }}">
                                                        @error('country')<span class="text-danger">{{ $message }}</span>@enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="twr_form_box">
                                                        <select name="partnership_type" class="form-control">
                                                            <option value="">-- Select Partnership Type --</option>
                                                            <option value="freelancer" {{ old('partnership_type') == 'freelancer' ? 'selected' : '' }}>Freelancer</option>
                                                            <option value="agency" {{ old('partnership_type') == 'agency' ? 'selected' : '' }}>Agency</option>
                                                            <option value="franchisee" {{ old('partnership_type') == 'franchisee' ? 'selected' : '' }}>Franchisee</option>
                                                        </select>
                                                        @error('partnership_type')<span class="text-danger">{{ $message }}</span>@enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="twr_form_box">
                                                        <textarea name="message" placeholder="Message" class="form-control">{{ old('message') }}</textarea>
                                                        @error('message')<span class="text-danger">{{ $message }}</span>@enderror
                                                    </div>
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary">SEND NOW</button>
                                                    </div>
                                                </div>
                                            </div>
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
                                        <p><a href="mailto:akhtar@rahat.in">akhtar@rahat.in</a><br> <a href="mailto:info@rahat.in">info@rahat.in</a> </p>

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
                                        <p><a href="tel:+917063105786">+917063105786 </a><br><a href="tel:+918097734658">  +918097734658 </a></p>

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
                                            <h2 class="txbdstitle sttwo hlight" style="font-weight: 500; font-size: 22px;">Together, let's make great things happen!
                                                Explore open positions ,<span><br>   Work with Rahat Group.
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