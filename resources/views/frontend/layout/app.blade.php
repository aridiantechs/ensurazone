<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <title>Ensurazone</title>
    <meta charset="UTF-8">
    <meta name="description" content="Ensurazone">
    <meta name="keywords" content="Ensurazone, ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicon -->
    <link href="{{ url('/') }}/theme/img/favicon.ico" rel="shortcut icon"/>
    
     @include('frontend.partials.header_scripts')

    @yield('styles')
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    
    @include('frontend.partials.navbar')
   
    @yield('content')

    @include('frontend.partials.footer')
    @include('frontend.partials.footer_scripts')

    @yield('scripts')
</body>

</html>