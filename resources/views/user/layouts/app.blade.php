<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>@yield('title', 'Default Title')</title> --}}
    <title>Umrah Franchisee & Agency Model - Complete Guide - How to Start Your Hajj and Umrah Business</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    @include('user.styles.home-style')
    @include('user.styles.franchise-style')
    @include('user.styles.contactus-style')
    @include('user.styles.agency-style')

    <style>
 
        #whatsapp{
            height: clamp(25px,30vw,5rem);
            z-index: 4;
            position: fixed;
            right: 10px;
            bottom:6rem;
            cursor: pointer;
          
        }
        #call{
         
            height: clamp(15px,8vw,3rem);
            z-index: 4;
            position: fixed;
            left: 1rem;
            bottom:7rem;
            cursor: pointer;
          
        
        }
        </style>
</head>
<body  class="home page-template page-template-template-nofooter page-template-template-nofooter-php page page-id-17066 wp-embed-responsive elementor-default elementor-kit-7 elementor-page elementor-page-17066">
    <!-- Header Section -->
    <header>
       
        <!-- Add Navigation -->
        <div class="wrapper">

            <!-- MAIN HEADER START -->
            <div class="tramo_theme_harea     ">
        
                <!-- HEADER TOP AREA -->
        
        
        
                <!-- HEADER TOP 2 creative AREA -->
        
                <div class="tx_top2_relative">
                    <div class="">
        
        
        
                        <!-- Mobile Logo -->
        
                      @include('user.layouts.navbar')
        
                        <!-- relative div -->
        
                    </div>
                    <!-- top 2 absulate div -->
                </div>
                <!--  top 2 relative div  extra -->
        
        
        
            </div>
            <!-- END MAIN HEADER -->
    </header>

    <div id="whatsapp">
        {{-- <a href="https://wa.me/+971567866713"> --}}
            <a target="_blank" href="https://api.whatsapp.com/send/?phone=%2B917863878630&text={{urlencode('Hello, I want some details about package')}}&type=phone_number&app_absent=0">
        <img src="{{asset('images/whatsapp.png')}}" alt="whats_app" style="height: 100%;">
    </a>
    </div>

    <div id="call">
        <a target="_blank" href="tel:+917863878632">
        <img src="{{asset('images/call_logo.png')}}" alt="call_logo" style="height: 100%;">
    </a>
    </div>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer Section -->
    <footer>
     
    </footer>



@include('user.styles.home-script')
{{-- @include('user.styles.franchise-script') --}}
</body>
</html>
