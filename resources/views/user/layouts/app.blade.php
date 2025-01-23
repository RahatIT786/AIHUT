<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>


    @include('user.styles.home-style')
    @include('user.styles.franchise-style')
    @include('user.styles.contactus-style')
</head>
<body  class="home page-template page-template-template-nofooter page-template-template-nofooter-php page page-id-17066 wp-embed-responsive elementor-default elementor-kit-7 elementor-page elementor-page-17066">
    <!-- Header Section -->
    <header>
       
        <!-- Add Navigation -->
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer Section -->
    <footer>
     
    </footer>



@include('user.styles.home-script')
@include('user.styles.franchise-script')
@include('user.styles.contactus-script')
</body>
</html>
