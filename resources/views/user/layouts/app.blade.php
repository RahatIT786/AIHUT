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
