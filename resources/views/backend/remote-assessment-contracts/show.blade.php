@extends('backend.layouts.app')
@section('meta')
<title>{{ app_name() }} | Dashboard</title>

@section('styles')
<link href="{{ asset('backend/assets/vendors/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
<style type="text/css">

.location-details
{
    font-size: 14px;
    font-weight: 600;
    color: #4f4f4f;
    margin-bottom: 2rem
}

.kt-media.kt-media--xl img {
    width: 100%;
    max-width: 130px;
    height: 80px;
    margin: 6px 6px;
}

</style>
@endsection

@section('content')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="row">
        <div class="col-xl-7">
            <!--begin:: Widgets/Sale Reports-->
            <div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Location Details
                        </h3>
                    </div>
                    {{-- <div class="kt-portlet__head-toolbar">
                        <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#kt_widget11_tab1_content" role="tab">
                                Last Month
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_widget11_tab2_content" role="tab">
                                All Time
                                </a>
                            </li>
                        </ul>
                    </div> --}}
                </div>
                
            
                <div class="kt-portlet__body">
                    <div class="row">
                        <div class="col-sm-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3208.131821322163!2d-95.02251938441411!3d36.478532093439185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87c9d52824500a9d%3A0x88a060dbe98bf42b!2sMax%20Motorsports!5e0!3m2!1sen!2s!4v1605096556493!5m2!1sen!2s"  height="450" frameborder="0" style="border:0; width: 100%;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                         <div class="col-sm-6">
                            <div class="locaion-d">
                                <h4>Location: </h4>
                                <p class="ml-4 location-details">Max Motorsports, W. Main, Disney, OK, USA</p>
                                <h4>Lotitude: </h4>
                                <p class="ml-4 location-details">37.65152</p>
                                <h4>Longitude: </h4>
                                <p class="ml-4 location-details">42.65152</p>
                                <h4>City: </h4>
                                <p class="ml-4 location-details">W. Main</p>
                                <h4>Zip: </h4>
                                <p class="ml-4 location-details">654132</p>
                                
                            </div>
                        </div>
                    </div>
                </div>

   
            </div>
            <!--end:: Widgets/Sale Reports-->
        </div>
        <div class="col-xl-5">
            <!--begin:: Widgets/Order Statistics-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Personal Deatils
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="row">
                        
                        <div class="col-sm-8">
                            <div class="locaion-d">
                                <h4>Name: </h4>
                                <p class="ml-4 location-details">Max Motorsports, W. Main, Disney, OK, USA</p>
                                <h4>Email: </h4>
                                <p class="ml-4 location-details">xyz@gmail.com</p>
                                <h4>Phone: </h4>
                                <p class="ml-4 location-details">+42 4654 54 654 </p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="locaion-d">
                                <h4>Previous Report File: </h4>
                                <p class="ml-0">
                                    <a href="" class="btn btn-primary">Download</a>
                                </p>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="locaion-d">
                                <h4>Images of house: </h4>
                                <p class="ml-0">
                                    <a href="#" class="kt-media kt-media--xl">
                                        <img src="{{ url('/') }}/images/home-protection.jpg" alt="image">
                                    </a>
                                    <a href="#" class="kt-media kt-media--xl">
                                        <img src="{{ url('/') }}/images/home-protection.jpg" alt="image">
                                    </a>
                                    <a href="#" class="kt-media kt-media--xl">
                                        <img src="{{ url('/') }}/images/home-protection.jpg" alt="image">
                                    </a>
                                    <a href="#" class="kt-media kt-media--xl">
                                        <img src="{{ url('/') }}/images/home-protection.jpg" alt="image">
                                    </a>
                                                                        
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end:: Widgets/Order Statistics-->    
        </div>
    </div>
</div>
@endsection


@section('scripts')
<!--begin::Page Vendors(used by this page) -->
    <script src="{{ asset('backend/assets/vendors/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>
<!--end::Page Vendors -->

<!--begin::Page Scripts(used by this page) -->
    <script src="{{ asset('backend/assets/js/demo1/pages/crud/datatables/extensions/select.js') }}" type="text/javascript"></script>
<!--end::Page Scripts -->
@endsection