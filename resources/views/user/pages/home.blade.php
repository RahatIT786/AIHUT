@extends('user.layouts.app')

@section('title', 'AIHUT')

@section('content')






    <div class="template-home-wrapper">

        <div class="page-content-home-page">
            <div data-elementor-type="wp-page" data-elementor-id="17066" class="elementor elementor-17066">
                <div class="elementor-element elementor-element-788c4d3 e-con-full e-flex e-con e-parent" data-id="788c4d3" data-element_type="container">
                    <div class="elementor-element elementor-element-70d88c9 elementor-widget elementor-widget-witrsslidew" data-id="70d88c9" data-element_type="widget" data-widget_type="witrsslidew.default">
                        <div class="elementor-widget-container">

                            <div class="witr_swiper_area ">
                                <div class="swiper witr_active ">
                                    <div class="swiper-wrapper">

                                        <div class="swiper-slide txbdslider" style="background-image:url('{{ asset('images/hero_banner.jpg') }}');">
                                            <div id="form-container" class="txbdsinner sliderheightdiv allleft">
                                                <div class="txbdscontent">
                                                    <!-- title 2 -->
                                                    <h1 class="txbdstitle swsmall swtone hlight">Earn High Commissions</h1>
                                                    <!-- title 3 -->
                                                    <h2 class="txbdstitle swttwo hlight">START Your <span><br> Hajj & Umrah Business</span></h2>

                                                    <!-- title -->
                                                    <!-- content -->
                                                    <p>Rahat Group is renowned for its large-scale operations and the highest standard of services, offering exclusive access to a wide range of Umrah content, premium products, and tailored packages.</p>


                                                    <!--- List Option --->

                                                    <div class="txbdsbtn allcostyle">
                                                        <!--- button 1 --->

                                                        <a class="btnallt btnall " href="#291783d">OUR AWARDS</a>

                                                        <a class="btnallt btnall btnallactive " href="/contact.php">JOIN NOW</a>




                                                    </div>

                                                    <!-- social -->





                                                </div>

                                                <div class="form-container">
                                                <div id="successMessage" class="success-message">
Your form has been submitted successfully!
</div>
<h2>Join Us as a Travel Partner</h2>
<form action="/admin/aihut/manage-quries.php" method="POST">
    <!-- <label for="company_name">Company Name:</label> -->
    <input type="text" id="company_name" name="company_name" placeholder="Enter company name" required>

    <!-- <label for="owner_name">Owner Name:</label> -->
    <input type="text" id="owner_name" name="owner_name" placeholder="Enter owner name" required>

    <!-- <label for="mobile">Mobile:</label> -->
    <input type="tel" id="mobile" name="mobile" placeholder="Enter mobile number" pattern="[0-9]{10}" title="Enter a valid 10-digit mobile number" required>

    <!-- <label for="city">City:</label> -->
    <input type="text" id="city" name="city" placeholder="Enter city" required>

    <!-- <label for="state">State:</label> -->
    <input type="text" id="state" name="state" placeholder="Enter state" required>

    <!-- <label for="country">Country:</label> -->
    <input type="text" id="country" name="country" placeholder="Enter country" required>

    <!-- <label for="email">Email:</label> -->
    <input type="email" id="email" name="email" placeholder="Enter email address" required>

    <!-- <label for="partnership_type">Partnership Type:</label> -->
    <select id="partnership_type" name="partnership_type" required>
        <option value="">-- Select Partnership Type --</option>
        <option value="freelancer">Freelancer</option>
        <option value="agency">Agency</option>
        <option value="franchisee">Franchisee</option>
    </select>

    <!-- <label for="comments">Comments:</label> -->
    <textarea id="comments" name="comments" rows="4" placeholder="Enter any additional comments"></textarea>

    <button type="submit">Submit</button>
</form>
</div>


                                            </div>
                                        </div>


                                    </div>

                                    <!-- Add Pagination -->
                                    <div class="swiper-scrollbar"></div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-button-next swiper_atext"></div>
                                    <div class="swiper-button-prev swiper_atext"></div>
                                </div>
                            </div>

                            <script type='text/javascript'>
                                jQuery(function($) {

                                    new Swiper('.witr_active ', {
                                        effect: 'slide',
                                        grabCursor: false,
                                        speed: 2000,
                                        slidesPerGroup: 1,
                                        slidesPerView: 1,

                                        freeMode: false,
                                        mousewheel: false,
                                        keyboard: false,
                                        loop: false,
                                        autoplay: {
                                            delay: 8000,
                                            disableOnInteraction: false,
                                        },



                                        pagination: {
                                            el: '.swiper-pagination',
                                            clickable: true,
                                            type: "progressbar",

                                        },
                                        navigation: {
                                            nextEl: '.swiper-button-next',
                                            prevEl: '.swiper-button-prev',
                                        },
                                        scrollbar: {
                                            el: '.scrollbar_false',
                                            hide: true,
                                        },

                                        breakpoints: {
                                            240: {
                                                slidesPerView: 1,
                                                spaceBetween: 10,
                                            },
                                            768: {
                                                slidesPerView: 1,
                                                spaceBetween: 10,
                                            },
                                            1024: {
                                                slidesPerView: 1,
                                                spaceBetween: 10,
                                            },
                                            1200: {
                                                slidesPerView: 1,
                                                spaceBetween: 15,
                                            },
                                        },

                                    });

                                });
                            </script>




                        </div>
                    </div>
                </div>


                <div  class="elementor-element e-flex e-con-boxed e-con e-parent " data-id="4cce8ef" data-element_type="container">
                    <div class="e-con-inner">
                       
                        <div class="elementor-element elementor-element-7ad142e elementor-widget elementor-widget-witr_section_Shape" data-id="7ad142e" data-element_type="widget" data-widget_type="witr_section_Shape.default">
                            <div class="elementor-widget-container">

                                <div class="witr_shape_item">
                                    <div class="witr_shape_item_inner">
                                        <div class="witr_shape_image " style="animation: witr_movelr_box45  5s  linear  1s  infinite  alternate  running;">
                                            <!-- image -->
                                            <img decoding="async" width="136" height="155" src="https://demo.themexbd.com/sk/tramo/wp-content/uploads/2024/09/sun.png" class="attachment-large size-large wp-image-27308" alt="sun" />
                                        </div>
                                    </div>
                                </div>


                <div class="elementor-element elementor-element-e5eec4c e-flex e-con-boxed e-con e-parent" data-id="e5eec4c" data-element_type="container">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-7176674 e-con-full e-flex e-con e-child" data-id="7176674" data-element_type="container">
                            <div class="elementor-element elementor-element-ebb8afe elementor-widget elementor-widget-witr_section_Shape" data-id="ebb8afe" data-element_type="widget" data-widget_type="witr_section_Shape.default">
                                <div class="elementor-widget-container">

                                    <div class="witr_shape_item">
                                        <div class="witr_shape_item_inner">
                                            <div class="witr_shape_image " style="animation: witr_movetb_box45  5s  linear  1s  infinite  alternate  running;">
                                                <!-- image -->
                                                <img fetchpriority="high" decoding="async" width="405" height="224" src="https://demo.themexbd.com/sk/tramo/wp-content/uploads/2024/09/cloud-02.png" class="attachment-large size-large wp-image-27311" alt="02" />
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                            <div class="elementor-element elementor-element-3b47cc1 elementor-widget elementor-widget-witrsimage" data-id="3b47cc1" data-element_type="widget" data-widget_type="witrsimage.default">
                                <div class="elementor-widget-container">

                                    <div class="single_image_area">
                                        <div class="single_image single_line_option  ">
                                            <!-- image -->
                                            <img loading="lazy" decoding="async" width="706" height="735" src="{{asset('images/aboutus.png')}}" class="attachment-large size-large wp-image-27218" alt="" />
                                        </div>
                                    </div>




                                </div>
                            </div>
                            <div class="elementor-element elementor-element-891da53 elementor-widget elementor-widget-witr_section_Shape" data-id="891da53" data-element_type="widget" data-widget_type="witr_section_Shape.default">
                                <div class="elementor-widget-container">

                                    <div class="witr_shape_item">
                                        <div class="witr_shape_item_inner">
                                            <div class="witr_shape_image " style="animation: witr_movelr_box45  5s  linear  1s  infinite  alternate  running;">
                                                <!-- image -->
                                                <img loading="lazy" decoding="async" width="584" height="285" src="https://demo.themexbd.com/sk/tramo/wp-content/uploads/2024/09/cloud-04.png" class="attachment-large size-large wp-image-27346" alt="04" />
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-2148956 e-con-full e-flex e-con e-child" data-id="2148956" data-element_type="container">
                            <div class="elementor-element elementor-element-bc304f8 elementor-widget elementor-widget-witr_section_Shape" data-id="bc304f8" data-element_type="widget" data-widget_type="witr_section_Shape.default">
                                <div class="elementor-widget-container">

                                    <div class="witr_shape_item">
                                        <div class="witr_shape_item_inner">
                                            <div class="witr_shape_image " style="animation: witr_movelr_box45  5s  linear  1s  infinite  alternate  running;">
                                                <!-- image -->
                                                <img loading="lazy" decoding="async" width="602" height="285" src="https://demo.themexbd.com/sk/tramo/wp-content/uploads/2024/09/cloud-01.png" class="attachment-large size-large wp-image-27310" alt="01" />
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                            <div class="elementor-element elementor-element-3b92750 elementor-widget elementor-widget-tts" data-id="3b92750" data-element_type="widget" data-widget_type="tts.default">
                                <div class="elementor-widget-container">
                                    <!-- title left -->
                                    <div class="tts text-left">
                                        <div class="ttin">

                                            <!-- icon position -->

                                            <!-- end icon position -->

                                            <!-- title top -->
                                            <!-- <h4 class="txbdstitle tsmall stone hlight txbdbcolor">Life is either a daring adventure or nothing at all. </h4> -->


                                            <!-- icon position -->

                                            <!-- end icon position -->

                                            <!-- title middle -->
                                            <h2 class="txbdstitle sttwo hlight">Start your profitable <span>Hajj Umrah business</span>  today 	With Most Trustable Umrah Company in India</h2>
                                            <!-- title bottom -->


                                            <!-- image -->
                                            <!-- icon -->

                                            <!-- bar -->
                                            <!-- circle bar -->



                                            <!-- content -->
                                            <p>Rahat is one of India's foremost B2B travel portals, constantly evolving and adding value in business by giving it's distributors and agents the best technology, deals and a user-friendly platform to transact and achieve their own financial freedom..</p>

                                        </div>
                                        <!-- inner title -->

                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-a7f5320 e-con-full e-flex e-con e-child" data-id="a7f5320" data-element_type="container">
                                <div class="elementor-element elementor-element-d656ba5 e-con-full e-flex e-con e-child" data-id="d656ba5" data-element_type="container">
                                    <div class="elementor-element elementor-element-043a068 elementor-widget elementor-widget-tts" data-id="043a068" data-element_type="widget" data-widget_type="tts.default">
                                        <div class="elementor-widget-container">
                                            <!-- title left -->
                                            <div class="tts text-left">
                                                <div class="ttin">
                                                    <!-- icon position -->
                                                    <img src="{{asset('images/icons/experience.svg')}}" alt="gdfg">
                                                    <!-- title top -->
                                                    <h2 class="txbdstitle tsmall stone hlight txbdbcolor">17+</h2>
                                                    <!-- content -->
                                                    <p>Years of business experience</p>
                                                </div>
                                                <div class="ttin">
                                                    <!-- icon position -->
                                                    <img src="images/icons/multiple_income.svg" alt="gdfg">
                                                    <!-- title top -->
                                                    <h2 class="txbdstitle tsmall stone hlight txbdbcolor">Multiple Income</h2>
                                                    <!-- content -->
                                                    <p>Get awesome opportunities</p>
                                                </div>
                                                <div class="ttin">
                                                    <!-- icon position -->
                                                    <img src="images/icons/agent_portal.svg" alt="gdfg">
                                                    <!-- title top -->
                                                    <h4 class="txbdstitle tsmall stone hlight txbdbcolor">Agent portal</h4>
                                                    <!-- content -->
                                                    <p>Get Interactive exclusive portal</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-1d43012 e-con-full e-flex e-con e-child" data-id="1d43012" data-element_type="container">
                                    <div class="elementor-element elementor-element-baa9e3f elementor-widget elementor-widget-tts" data-id="baa9e3f" data-element_type="widget" data-widget_type="tts.default">
                                    <div class="elementor-widget-container">
                                            <!-- title left -->
                                            <div class="tts text-left">
                                                <div class="ttin">
                                                    <!-- icon position -->
                                                    <img src="images/icons/agent_support.svg" alt="gdfg">
                                                    <!-- title top -->
                                                    <h2 class="txbdstitle tsmall stone hlight txbdbcolor">24/7</h2>
                                                    <!-- content -->
                                                    <p>Agent support helpline</p>
                                                </div>
                                                <div class="ttin">
                                                    <!-- icon position -->
                                                    <img src="images/icons/good_commission.svg" alt="gdfg">
                                                    <!-- title top -->
                                                    <h2 class="txbdstitle tsmall stone hlight txbdbcolor">Good Commissions</h2>
                                                    <!-- content -->
                                                    <p>Earn good deals and commissions</p>
                                                </div>
                                                <div class="ttin" >
                                                    <!-- icon position -->
                                                    <img src="images/icons/hotel.svg" alt="gdfg">
                                                    <!-- title top -->
                                                    <h4 class="txbdstitle tsmall stone hlight txbdbcolor">200+ Hotels</h4>
                                                    <!-- content -->
                                                    <p>Hotels provide comfort, convenience, and luxury for travelers.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-a90e41a elementor-widget elementor-widget-tts" data-id="a90e41a" data-element_type="widget" data-widget_type="tts.default">
                                <div class="elementor-widget-container">
                                    <!-- title left -->
                                    <div class="tts text-left">
                                        <div class="ttin">

                                            <!-- icon position -->

                                            <!-- end icon position -->

                                            <!-- title top -->


                                            <!-- icon position -->

                                            <!-- end icon position -->

                                            <!-- title middle -->
                                            <!-- title bottom -->


                                            <!-- image -->
                                            <!-- icon -->

                                            <!-- bar -->
                                            <!-- circle bar -->



                                            <!-- content -->
                                            <!-- <p>Twenty years from now you will be more disappointed by the things you didn’t do than by the ones you did do. <span>So throw off the bowlines.</span> Sail away from the safe harbor. Catch the trade winds
                                                in your sails. Explore. Dream. Discover. </p> -->

                                        </div>
                                        <!-- inner title -->

                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-a88f98e tramo-star-rating-mobile--align-left tramo-star-rating--align-center elementor-widget elementor-widget-witr_section_button" data-id="a88f98e" data-element_type="widget" data-widget_type="witr_section_button.default">
                                <div class="elementor-widget-container">
                                    <!-- area -->
                                    <div class="witr_button_area">

                                        <!--  post meta -->


                                        <!-- btn default style -->
                                        <div class="witr_btn_style mr">
                                            <div class="witr_btn_sinner">

                                                <a href="https://demo.themexbd.com/sk/tramo/contact/" class="witr_btn">JOIN NOW                 <!-- icon --></a>

                                            </div>
                                        </div>




                                    </div>
                                    <!-- end area -->


                                </div>
                            </div>
                            <div class="elementor-element elementor-element-bd59ee3 elementor-widget elementor-widget-witr_section_Shape" data-id="bd59ee3" data-element_type="widget" data-widget_type="witr_section_Shape.default">
                                <div class="elementor-widget-container">

                                    <div class="witr_shape_item">
                                        <div class="witr_shape_item_inner">
                                            <div class="witr_shape_image " style="animation: witr_movelr_box45  5s  linear  1s  infinite  alternate  running;">
                                                <!-- image -->
                                                <img fetchpriority="high" decoding="async" width="405" height="224" src="https://demo.themexbd.com/sk/tramo/wp-content/uploads/2024/09/cloud-02.png" class="attachment-large size-large wp-image-27311" alt="02" />
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                            <div class="elementor-element elementor-element-128100a elementor-widget elementor-widget-witr_section_Shape" data-id="128100a" data-element_type="widget" data-widget_type="witr_section_Shape.default">
                                <div class="elementor-widget-container">

                                    <div class="witr_shape_item">
                                        <div class="witr_shape_item_inner">
                                            <div class="witr_shape_image " style="animation: witr_movelr_box45  5s  linear  1s  infinite  alternate  running;">
                                                <!-- image -->
                                                <img loading="lazy" decoding="async" width="131" height="112" src="https://demo.themexbd.com/sk/tramo/wp-content/uploads/2024/09/s_shap.png" class="attachment-large size-large wp-image-27339" alt="" />
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             
                <div class="elementor-element elementor-element-277776a e-flex e-con-boxed e-con e-parent" data-id="277776a" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-fd050f9 e-con-full e-flex e-con e-child" data-id="fd050f9" data-element_type="container">
                            <div class="elementor-element elementor-element-758eb3b elementor-widget elementor-widget-tts" data-id="758eb3b" data-element_type="widget" data-widget_type="tts.default">
                                <div class="elementor-widget-container">
                                    <!-- title left -->
                                    <div class="tts text-left">
                                        <div class="ttin">

                                            <!-- icon position -->

                                            <!-- end icon position -->

                                            <!-- title top -->


                                            <!-- icon position -->

                                            <!-- end icon position -->

                                            <!-- title middle -->
                                            <h2 class="txbdstitle sttwo hlight"><span>Rahat</span> Advantages</h2>
                                            <!-- title bottom -->


                                            <!-- image -->
                                            <!-- icon -->

                                            <!-- bar -->
                                            <!-- circle bar -->



                                            <!-- content -->
                                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Quis is ipsum suspendisse cilisis. Lorem ipsum dolor sit amet, dolorena aliqua. Quis
                                                is ipsum suspendisse cilisis. </p> -->

                                        </div>
                                        <!-- inner title -->

                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-fb6b003 e-con-full e-flex e-con e-child" data-id="fb6b003" data-element_type="container">
                                <div class="elementor-element elementor-element-6be26d9 e-con-full e-flex e-con e-child" data-id="6be26d9" data-element_type="container">
                                    <div class="elementor-element elementor-element-fc399b9 elementor-widget elementor-widget-witrservice" data-id="fc399b9" data-element_type="widget" data-widget_type="witrservice.default">
                                        <div class="elementor-widget-container">
                                            <div class="txbdsva allcostyle txbdsstyle3">

                                                <div class="txbdsi ">
                                                    <div class="mgb20 txbdsvflex txbdsvfdrl  txbdbg">
                                                        <!-- icon -->

                                                        <div class="iconalltf txbdicon">
                                                            <i class="flaticon flaticon-layers"></i>
                                                        </div>
                                                        <!-- image icon -->
                                                        <!-- title -->
                                                        <h2 class="subservicet txstcolor sp-txbdsvfdrl txbdsvtitle"><a href="#">200+ Hotel Suppliers</a></h2>


                                                    </div>
                                                    <div class="txbdcon txbdconpdr20">
                                                        <p>Leverage the best technology to find the best worldwide hotel deals for your customers</p>

                                                        <!-- button -->

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-b8eb9dd elementor-widget elementor-widget-witrservice" data-id="b8eb9dd" data-element_type="widget" data-widget_type="witrservice.default">
                                        <div class="elementor-widget-container">
                                            <div class="txbdsva allcostyle txbdsstyle3">

                                                <div class="txbdsi ">
                                                    <div class="mgb20 txbdsvflex txbdsvfdrl  txbdbg">
                                                        <!-- icon -->

                                                        <div class="iconalltf txbdicon">
                                                            <i class="flaticon flaticon-cash"></i>
                                                        </div>
                                                        <!-- image icon -->
                                                        <!-- title -->
                                                        <h2 class="subservicet txstcolor sp-txbdsvfdrl txbdsvtitle"><a href="#">Post Booking Service Automation</a></h2>


                                                    </div>
                                                    <div class="txbdcon txbdconpdr20">
                                                        <p>Manage all your booking completely online</p>

                                                        <!-- button -->

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-93cfc14 elementor-widget elementor-widget-witrservice" data-id="93cfc14" data-element_type="widget" data-widget_type="witrservice.default">
                                        <div class="elementor-widget-container">
                                            <div class="txbdsva allcostyle txbdsstyle3">

                                                <div class="txbdsi ">
                                                    <div class="mgb20 txbdsvflex txbdsvfdrl  txbdbg">
                                                        <!-- icon -->

                                                        <div class="iconalltf txbdicon">
                                                            <i class="flaticon flaticon-connection"></i>
                                                        </div>
                                                        <!-- image icon -->
                                                        <!-- title -->
                                                        <h2 class="subservicet txstcolor sp-txbdsvfdrl txbdsvtitle"><a href="#">Highest Commission in this Sector</a></h2>


                                                    </div>
                                                    <div class="txbdcon txbdconpdr20">
                                                        <p>Do your business with ease on the go</p>

                                                        <!-- button -->

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-da08b65 e-con-full e-flex e-con e-child" data-id="da08b65" data-element_type="container">
                                 <div class="elementor-element elementor-element-93cfc14 elementor-widget elementor-widget-witrservice" data-id="93cfc14" data-element_type="widget" data-widget_type="witrservice.default">
                                        <div class="elementor-widget-container">
                                            <div class="txbdsva allcostyle txbdsstyle3">

                                                <div class="txbdsi ">
                                                    <div class="mgb20 txbdsvflex txbdsvfdrl  txbdbg">
                                                        <!-- icon -->

                                                        <div class="iconalltf txbdicon">
                                                            <i class="flaticon flaticon-connection"></i>
                                                        </div>
                                                        <!-- image icon -->
                                                        <!-- title -->
                                                        <h2 class="subservicet txstcolor sp-txbdsvfdrl txbdsvtitle"><a href="#">Largest Network of global Airfares</a></h2>


                                                    </div>
                                                    <div class="txbdcon txbdconpdr20">
                                                        <p>Find fares from 40+ countries & book the best flight deals</p>

                                                        <!-- button -->

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-688d686 elementor-widget elementor-widget-witrservice" data-id="688d686" data-element_type="widget" data-widget_type="witrservice.default">
                                        <div class="elementor-widget-container">
                                            <div class="txbdsva allcostyle txbdsstyle3">

                                                <div class="txbdsi ">
                                                    <div class="mgb20 txbdsvflex txbdsvfdrl  txbdbg">
                                                        <!-- icon -->

                                                        <div class="iconalltf txbdicon">
                                                            <i class="flaticon flaticon-money"></i>
                                                        </div>
                                                        <!-- image icon -->
                                                        <!-- title -->
                                                        <h2 class="subservicet txstcolor sp-txbdsvfdrl txbdsvtitle"><a href="#">Automated Payments</a></h2>


                                                    </div>
                                                    <div class="txbdcon txbdconpdr20">
                                                        <p>Upload fund hassle free to your account even through RTGS/NEFT/IMPS channels</p>

                                                        <!-- button -->

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-ce055a2 e-con-full e-flex e-con e-child" data-id="ce055a2" data-element_type="container">
                            <div class="elementor-element elementor-element-7df799a elementor-widget elementor-widget-witr_section_Shape" data-id="7df799a" data-element_type="widget" data-widget_type="witr_section_Shape.default">
                                <div class="elementor-widget-container">

                                    <div class="witr_shape_item">
                                        <div class="witr_shape_item_inner">
                                            <div class="witr_shape_image " style="animation: witr_movelr_box45  5s  linear  1s  infinite  alternate  paused;">
                                                <!-- image -->
                                                <!-- <img loading="lazy" decoding="async" width="669" height="1024" src="https://demo.themexbd.com/sk/tramo/wp-content/uploads/2024/09/service.png" class="attachment-large size-large wp-image-27259" alt="" /> -->
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-68ce90f e-con-full e-flex e-con e-parent" data-id="68ce90f" data-element_type="container">
                    <div class="elementor-element elementor-element-585a160 e-flex e-con-boxed e-con e-child" data-id="585a160" data-element_type="container">
                        <div class="e-con-inner">
                            <div class="elementor-element elementor-element-b269311 elementor-widget elementor-widget-tts" data-id="b269311" data-element_type="widget" data-widget_type="tts.default">
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

                                            <h2 class="txbdstitle sttwo hlight">People Love <span> RAHAT .. </span> Watch some of Our Agents Speak... </h2>
                                            <!-- title bottom -->


                                            <!-- image -->
                                            <!-- icon -->

                                            <!-- bar -->
                                            <!-- circle bar -->



                                            <!-- content -->
                                            <!-- <p>To my mind, the greatest reward and luxury of travel is to be able to experience everyday things as if for the first time, to be in a position in which almost nothing is so familiar it is taken for granted.
                                                </p> -->

                                        </div>
                                        <!-- inner title -->

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-7d47f8f e-con-full e-flex e-con e-child" data-id="7d47f8f" data-element_type="container">
                        <div class="elementor-element elementor-element-c66fb56 elementor-widget elementor-widget-witrsslick" data-id="c66fb56" data-element_type="widget" data-widget_type="witrsslick.default">
                            <div class="elementor-widget-container">
                                <div class="witr_carousel_main row witr_slick_active row" dir="ltr" data-witrshowdata="{&quot;witr_infiv&quot;:true,&quot;witr_stsv&quot;:4,&quot;witr_stsr&quot;:1,&quot;witr_apv&quot;:true,&quot;witr_apsv&quot;:6000,&quot;witr_spv&quot;:1000,&quot;witr_pohv&quot;:true,&quot;witr_cmv&quot;:true,&quot;witr_cpv&quot;:&quot;0px&quot;,&quot;witr_fadev&quot;:false,&quot;witr_arrv&quot;:false,&quot;witr_dotv&quot;:true,&quot;witr_bpdv&quot;:1200,&quot;witr_shv&quot;:3,&quot;witr_bptv&quot;:992,&quot;witr_tshv&quot;:2,&quot;witr_bpmv&quot;:767,&quot;witr_mshv&quot;:1,&quot;witr_bpsmv&quot;:480,&quot;witr_smshv&quot;:1}"
                                    style="display:block">
                                    <div class="col-lg-12">
                                        <div class="txbdsva allcostyle boxsh text-center  ">
                                            <div class="thbdsvthumb">
                                                <p align="center" style="font-weight: bold"><iframe width="560" height="315" src="https://www.youtube.com/embed/D5hPm6YOXNs?si=8Pf4BJVImoUHi2EY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></p>
                                                </div>
                                            <div class="txbdsi boxtexrelative  iconsabsconpd sselect">
                                                <!-- overlay icon -->
                                                <!-- image icon -->
                                                <div class="txbdcon">
                                                    <!-- title -->
                                                    <h2 class="txbdsvtitle txstcolor hlight"> RATNAGRI</h2>
                                                    
                                                    <!-- button -->
                                                    <div class="txbdsvbtn txbdbtnicon">
                                                        <!-- <a class="btnallt btnalldefault " href="#">more details</a> -->
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="txbdsva allcostyle boxsh text-center  ">
                                            <div class="thbdsvthumb">
                                            <p align="center" style="font-weight: bold"><iframe width="560" height="315" src="https://www.youtube.com/embed/V5lULHzkVgI?si=iXjbbjDUeLH5xphe" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></p> </div>
                                            <div class="txbdsi boxtexrelative  iconsabsconpd sselect">
                                                <!-- overlay icon -->
                                                <!-- image icon -->
                                                <div class="txbdcon">
                                                    <!-- title -->

                                                    <h2 class="txbdsvtitle txstcolor hlight">DELHI</h2>
                                                    
                                                    <!-- button -->
                                                    <div class="txbdsvbtn txbdbtnicon">
                                                        <!-- <a class="btnallt btnalldefault " href="#">more details</a> -->
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="txbdsva allcostyle boxsh text-center  ">
                                            <div class="thbdsvthumb">
                                            <p align="center" style="font-weight: bold"><iframe width="560" height="315" src="https://www.youtube.com/embed/D8QKXg-srMI?si=0_logzn7fz5iimqS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></p>  </div>
                                            <div class="txbdsi boxtexrelative  iconsabsconpd sselect">
                                                <!-- overlay icon -->
                                                <!-- image icon -->
                                                <div class="txbdcon">
                                                    <!-- title -->

                                                    <h2 class="txbdsvtitle txstcolor hlight">Laddak</h2>


                                                    <!-- button -->
                                                    <div class="txbdsvbtn txbdbtnicon">
                                                        <!-- <a class="btnallt btnalldefault " href="#">more details</a> -->
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="txbdsva allcostyle boxsh text-center  ">
                                            <div class="thbdsvthumb">
                                            <p align="center" style="font-weight: bold"><iframe width="560" height="315" src="https://www.youtube.com/embed/vbREORgANBE?si=d623-gkS6JjQE9-J" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></p> </div>
                                            <div class="txbdsi boxtexrelative  iconsabsconpd sselect">
                                                <!-- overlay icon -->
                                                <!-- image icon -->
                                                <div class="txbdcon">
                                                    <!-- title -->

                                                    <h2 class="txbdsvtitle txstcolor hlight">VARANASI</h2>

                                                    <!-- button -->
                                                    <div class="txbdsvbtn txbdbtnicon">
                                                        <!-- <a class="btnallt btnalldefault " href="#">more details</a> -->
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="txbdsva allcostyle boxsh text-center  ">
                                            <div class="thbdsvthumb">
                                            <p align="center" style="font-weight: bold"><iframe width="560" height="315" src="https://www.youtube.com/embed/dmgmIMQPH0o?si=YmQHRwSLgToJC3a-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></p> </div>
                                            <div class="txbdsi boxtexrelative  iconsabsconpd sselect">
                                                <!-- overlay icon -->
                                                <!-- image icon -->
                                                <div class="txbdcon">
                                                    <!-- title -->

                                                    <h2 class="txbdsvtitle txstcolor hlight">PUNE</h2>
                                                    

                                                    <!-- button -->
                                                    <div class="txbdsvbtn txbdbtnicon">
                                                        <!-- <a class="btnallt btnalldefault " href="#">more details</a> -->
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

                <!-- portfolio section -->
                <div class="template-home-wrapper">
        <div class="page-content-home-page">
            <div data-elementor-type="wp-page" data-elementor-id="11527" class="elementor elementor-11527">
                <section class="elementor-section elementor-top-section elementor-element elementor-element-0a16bb2 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0a16bb2" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-291783d" data-id="291783d" data-element_type="column">
                            <div id="291783d" class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-d75c2bf elementor-widget elementor-widget-tts" data-id="d75c2bf" data-element_type="widget" data-widget_type="tts.default">
                                    <div class="elementor-widget-container">
                                        <!-- title center -->
                                        <div class="tts text-center">
                                            <div class="ttin">

                                                <!-- icon position -->

                                                <!-- end icon position -->

                                                <!-- title top -->
                                                <h4 class="txbdstitle tsmall stone hlight txbdbcolor">OUR WORK ENVIRONMENT </h4>


                                                <!-- icon position -->

                                                <!-- end icon position -->

                                                <!-- title middle -->
                                                <h2 class="txbdstitle sttwo hlight" style="margin-bottom:40px !important">We work towards your success</h2>
                                                <!-- title bottom -->


                                                <!-- image -->
                                                <!-- icon -->

                                                <!-- bar -->
                                                <!-- circle bar -->



                                                <!-- content -->

                                            </div>
                                            <!-- inner title -->

                                        </div>

                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-3460fc1 wittr_pfilter_menu--align-center elementor-widget elementor-widget-wportg" data-id="3460fc1" data-element_type="widget" data-widget_type="wportg.default">
                                    <div class="elementor-widget-container">
                                        <div class="clearfix kicuakta">
                                            <div class="col-md-12 " style="display: flex; justify-content: center;">
                                                <div class="portfolio_nav  wittr_pfilter_menu">
                                                    <ul id="filter" class="filter_menu ">
                                                        <li class="current_menu_item" data-filter="*">All</li>
                                                        <li data-filter=".entertaintment">Events </li>
                                                        <li data-filter=".inspirational">AGM </li>
                                                        <li data-filter=".lifestyle">Awards </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="em_port_container" id="epoitem">
                                            <div class="row em_portitem">
                                                <!--Section 1 -->
                                                <div class="col-lg-6  eportfolio_item col-md-6 col-xs-12 col-sm-12 entertaintment     allprt30">
                                                    <div class="tx_portfolio allposihv">
                                                        <div class="tx_pfthumb boxtextposire txbdbfall txbdbfltrb100 txbdbfallz txbdbfallbgov">
                                                            <img fetchpriority="high" decoding="async" width="975" height="550" src="{{asset('images/user/event1.jpeg')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6  eportfolio_item col-md-6 col-xs-12 col-sm-12 inspirational    allprt30">
                                                    <div class="tx_portfolio allposihv">
                                                        <div class="tx_pfthumb boxtextposire txbdbfall txbdbfltrb100 txbdbfallz txbdbfallbgov">
                                                            <img decoding="async" width="975" height="550" src="{{asset('images/user/agm1.jpg')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6  eportfolio_item col-md-6 col-xs-12 col-sm-12 lifestyle    allprt30">
                                                    <div class="tx_portfolio allposihv">
                                                        <div class="tx_pfthumb boxtextposire txbdbfall txbdbfltrb100 txbdbfallz txbdbfallbgov">
                                                            <img loading="lazy" decoding="async" width="975" height="550" src="{{asset('images/user/awart1.jpg')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- section 2 -->

                                                <div class="col-lg-6  eportfolio_item col-md-6 col-xs-12 col-sm-12 entertaintment     allprt30">
                                                    <div class="tx_portfolio allposihv">
                                                        <div class="tx_pfthumb boxtextposire txbdbfall txbdbfltrb100 txbdbfallz txbdbfallbgov">
                                                            <img fetchpriority="high" decoding="async" width="975" height="550" src="{{asset('images/user/event2.jpeg')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6  eportfolio_item col-md-6 col-xs-12 col-sm-12 inspirational    allprt30">
                                                    <div class="tx_portfolio allposihv">
                                                        <div class="tx_pfthumb boxtextposire txbdbfall txbdbfltrb100 txbdbfallz txbdbfallbgov">
                                                            <img decoding="async" width="975" height="550" src="{{asset('images/user/agm2.jpg')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6  eportfolio_item col-md-6 col-xs-12 col-sm-12 lifestyle    allprt30">
                                                    <div class="tx_portfolio allposihv">
                                                        <div class="tx_pfthumb boxtextposire txbdbfall txbdbfltrb100 txbdbfallz txbdbfallbgov">
                                                            <img loading="lazy" decoding="async" width="975" height="550" src="{{asset('images/user/awart2.jpg')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- section 3 -->
                                                <div class="col-lg-6  eportfolio_item col-md-6 col-xs-12 col-sm-12 entertaintment     allprt30">
                                                    <div class="tx_portfolio allposihv">
                                                        <div class="tx_pfthumb boxtextposire txbdbfall txbdbfltrb100 txbdbfallz txbdbfallbgov">
                                                            <img fetchpriority="high" decoding="async" width="975" height="550" src="{{asset('images/user/event3.jpg')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6  eportfolio_item col-md-6 col-xs-12 col-sm-12 inspirational    allprt30">
                                                    <div class="tx_portfolio allposihv">
                                                        <div class="tx_pfthumb boxtextposire txbdbfall txbdbfltrb100 txbdbfallz txbdbfallbgov">
                                                            <img decoding="async" width="975" height="550" src="{{asset('images/user/agm3.jpg')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6  eportfolio_item col-md-6 col-xs-12 col-sm-12 lifestyle    allprt30">
                                                    <div class="tx_portfolio allposihv">
                                                        <div class="tx_pfthumb boxtextposire txbdbfall txbdbfltrb100 txbdbfallz txbdbfallbgov">
                                                            <img loading="lazy" decoding="async" width="975" height="550" src="{{asset('images/user/awart4.jpg')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- section 4 -->
                                                <div class="col-lg-6  eportfolio_item col-md-6 col-xs-12 col-sm-12 entertaintment     allprt30">
                                                    <div class="tx_portfolio allposihv">
                                                        <div class="tx_pfthumb boxtextposire txbdbfall txbdbfltrb100 txbdbfallz txbdbfallbgov">
                                                            <img fetchpriority="high" decoding="async" width="975" height="550" src="{{asset('images/user/event4.jpg')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6  eportfolio_item col-md-6 col-xs-12 col-sm-12 inspirational    allprt30">
                                                    <div class="tx_portfolio allposihv">
                                                        <div class="tx_pfthumb boxtextposire txbdbfall txbdbfltrb100 txbdbfallz txbdbfallbgov">
                                                            <img decoding="async" width="975" height="550" src="{{asset('images/user/agm4.jpg')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6  eportfolio_item col-md-6 col-xs-12 col-sm-12 lifestyle    allprt30">
                                                    <div class="tx_portfolio allposihv">
                                                        <div class="tx_pfthumb boxtextposire txbdbfall txbdbfltrb100 txbdbfallz txbdbfallbgov">
                                                            <img loading="lazy" decoding="async" width="975" height="550" src="{{asset('images/user/awart5.jpg')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- section 5 -->
                                                <div class="col-lg-6  eportfolio_item col-md-6 col-xs-12 col-sm-12 entertaintment     allprt30">
                                                    <div class="tx_portfolio allposihv">
                                                        <div class="tx_pfthumb boxtextposire txbdbfall txbdbfltrb100 txbdbfallz txbdbfallbgov">
                                                            <img fetchpriority="high" decoding="async" width="975" height="550" src="{{asset('images/user/event5.jpg')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6  eportfolio_item col-md-6 col-xs-12 col-sm-12 inspirational    allprt30">
                                                    <div class="tx_portfolio allposihv">
                                                        <div class="tx_pfthumb boxtextposire txbdbfall txbdbfltrb100 txbdbfallz txbdbfallbgov">
                                                            <img decoding="async" width="975" height="550" src="{{asset('images/user/agm5.jpg')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6  eportfolio_item col-md-6 col-xs-12 col-sm-12 lifestyle    allprt30">
                                                    <div class="tx_portfolio allposihv">
                                                        <div class="tx_pfthumb boxtextposire txbdbfall txbdbfltrb100 txbdbfallz txbdbfallbgov">
                                                            <img loading="lazy" decoding="async" width="975" height="550" src="{{asset('images/user/awart6.jpg')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6  eportfolio_item col-md-6 col-xs-12 col-sm-12 inspirational    allprt30">
                                                    <div class="tx_portfolio allposihv">
                                                        <div class="tx_pfthumb boxtextposire txbdbfall txbdbfltrb100 txbdbfallz txbdbfallbgov">
                                                            <img decoding="async" width="975" height="550" src="{{asset('images/user/agm6.jpg')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- START PAGINATION -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>

    </div>
                <!-- portfolio section -->
                
                <!-- footer -->
                <div class="elementor-element elementor-element-533ab2b e-con-full e-flex e-con e-parent" data-id="533ab2b" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-element elementor-element-fd5d19f e-con-full e-flex e-con e-child" data-id="fd5d19f" data-element_type="container">
                        <div class="elementor-element elementor-element-9ff5897 elementor-widget elementor-widget-tts" data-id="9ff5897" data-element_type="widget" data-widget_type="tts.default">
                            <div class="elementor-widget-container">
                                <!-- title left -->
                                <div class="tts text-left">
                                    <div class="ttin">

                                        <!-- content -->
                                        <p>Copyright © RahatITSolutions All Right Reserved </p>

                                    </div>
                                    <!-- inner title -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-ccbe23b e-con-full e-flex e-con e-child" data-id="ccbe23b" data-element_type="container">
                        <div class="elementor-element elementor-element-5cdd4fe tramo-star-rating--align-right elementor-widget elementor-widget-witr_footerw" data-id="5cdd4fe" data-element_type="widget" data-widget_type="witr_footerw.default">
                            <div class="elementor-widget-container">
                                <div class="footer_widarea">
                                    <div class="witr_fwt">
                                        <!-- title -->

                                        <div class="footer-menu">
                                            <!-- FOOTER COPYRIGHT MENU -->
                                            <ul id="menu-footer-menu" class="">
                                                <li id="menu-item-19298" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19298"><a href="#">Get Start</a></li>
                                                <li id="menu-item-19298" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19298"><a href="#">agents</a></li>
                                                <li id="menu-item-14450" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14450"><a href="#">distributors</a></li>
                                                <li id="menu-item-14449" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14449"><a href="#">suppliers</a></li>
                                                <li id="menu-item-14448" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14448"><a href="#">Contact</a></li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer -->
            </div>

        </div>
    </div>



  </div>







    




@endsection