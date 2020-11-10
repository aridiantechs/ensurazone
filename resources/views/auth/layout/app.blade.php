<!DOCTYPE html>
<html lang="en" >
   <!-- begin::Head -->
   <head>
      <!--begin::Base Path (base relative path for assets of this page) -->
      <meta charset="utf-8"/>
      <title>{{ config('app.name', 'Laravel') }} Login</title>
      <meta name="description" content="Login page example">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!--begin::Fonts -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">        <!--end::Fonts -->


      <link href="{{ asset('backend/assets/css/demo1/pages/login/login-6.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('backend/assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" type="text/css" />
      <!--end:: Global Mandatory Vendors -->

      

      <!--begin::Global Theme Styles(used by all pages) -->

      <link href="{{ asset('backend/assets/css/demo1/style.bundle.css') }}" rel="stylesheet" type="text/css" />
      <!--end::Global Theme Styles -->

      <!--begin::Layout Skins(used by all pages) -->

      <link href="{{ asset('backend/assets/css/demo1/skins/header/base/light.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('backend/assets/css/demo1/skins/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('backend/assets/css/demo1/skins/brand/dark.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('backend/assets/css/demo1/skins/aside/dark.css') }}" rel="stylesheet" type="text/css" />        <!--end::Layout Skins -->

      <link rel="shortcut icon" href="{{ asset('backend/assets/media/logos/favicon.ico') }}" />
      <style type="text/css">
         .text-red-600 {
            color: #ce3434;
            font-weight: 600;
         }
      </style>
      <link href="{{ asset('backend/assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css" />
   </head>
   <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading" id="app" >

      @yield('content')
      
      <script src="{{ asset('backend/assets/vendors/general/jquery/dist/jquery.js') }}" type="text/javascript"></script>
      <script src="{{ asset('backend/assets/vendors/general/popper.js/dist/umd/popper.js') }}" type="text/javascript"></script>
      <script src="{{ asset('backend/assets/vendors/general/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
      <script src="{{ asset('backend/assets/vendors/general/js-cookie/src/js.cookie.js') }}" type="text/javascript"></script>
      <script src="{{ asset('backend/assets/vendors/general/moment/min/moment.min.js') }}" type="text/javascript"></script>
      <script src="{{ asset('backend/assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js') }}" type="text/javascript"></script>
      <script src="{{ asset('backend/assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js') }}" type="text/javascript"></script>
      <script src="{{ asset('backend/assets/vendors/general/sticky-js/dist/sticky.min.js') }}" type="text/javascript"></script>
      <script src="{{ asset('backend/assets/vendors/general/wnumb/wNumb.js') }}" type="text/javascript"></script>
      <!--end:: Global Optional Vendors -->
      <!--begin::Global Theme Bundle(used by all pages) -->
      <script src="{{ asset('backend/assets/js/demo1/scripts.bundle.js') }}" type="text/javascript"></script>
      <!--end::Global Theme Bundle -->
      <!--begin::Page Scripts(used by this page) -->
      <script src="{{ asset('backend/assets/js/demo1/pages/login/login-general.js') }}" type="text/javascript"></script>
      <!--end::Page Scripts -->
   </body>
   <!-- end::Body -->
</html>