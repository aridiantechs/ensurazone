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

    /* image preview */
    .magnific-img img {
        width: 100%;
        height: auto;
    }
    .mfp-bottom-bar,*{
    font-family: 'Abel', sans-serif;
    }
    .magnific-img {
        display: inline-block;
        width: 32.3%;
    }
    a.image-popup-vertical-fit {
        cursor: -webkit-zoom-in;
    }
    .mfp-with-zoom .mfp-container,
    .mfp-with-zoom.mfp-bg {
    opacity: 0;
    -webkit-backface-visibility: hidden;
    /* ideally, transition speed should match zoom duration */
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
    }

    .mfp-with-zoom.mfp-ready .mfp-container {
        opacity: 1;
    }
    .mfp-with-zoom.mfp-ready.mfp-bg {
        opacity: 0.98;
    }

    .mfp-with-zoom.mfp-removing .mfp-container,
    .mfp-with-zoom.mfp-removing.mfp-bg {
    opacity: 0;
    }
    .mfp-arrow-left:before {
        border-right: none !important;
    }
    .mfp-arrow-right:before {
        border-left: none !important;
    }
    button.mfp-arrow, .mfp-counter {
        opacity: 0 !important;
        transition: opacity 200ms ease-in, opacity 2000ms ease-out;
    }
    .mfp-container:hover button.mfp-arrow, .mfp-container:hover .mfp-counter{
        opacity: 1 !important;
    }


    /* Magnific Popup CSS */
    .mfp-bg {
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1042;
    overflow: hidden;
    position: fixed;
    background: #0b0b0b;
    opacity: 0.8; }

    .mfp-wrap {
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1043;
    position: fixed;
    outline: none !important;
    -webkit-backface-visibility: hidden; }

    .mfp-container {
    text-align: center;
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    padding: 0 8px;
    box-sizing: border-box; }

    .mfp-container:before {
    content: '';
    display: inline-block;
    height: 100%;
    vertical-align: middle; }

    .mfp-align-top .mfp-container:before {
    display: none; }

    .mfp-content {
    position: relative;
    display: inline-block;
    vertical-align: middle;
    margin: 0 auto;
    text-align: left;
    z-index: 1045; }

    .mfp-inline-holder .mfp-content,
    .mfp-ajax-holder .mfp-content {
    width: 100%;
    cursor: auto; }

    .mfp-ajax-cur {
    cursor: progress; }

    .mfp-zoom-out-cur, .mfp-zoom-out-cur .mfp-image-holder .mfp-close {
    cursor: -moz-zoom-out;
    cursor: -webkit-zoom-out;
    cursor: zoom-out; }

    .mfp-zoom {
    cursor: pointer;
    cursor: -webkit-zoom-in;
    cursor: -moz-zoom-in;
    cursor: zoom-in; }

    .mfp-auto-cursor .mfp-content {
    cursor: auto; }

    .mfp-close,
    .mfp-arrow,
    .mfp-preloader,
    .mfp-counter {
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none; }

    .mfp-loading.mfp-figure {
    display: none; }

    .mfp-hide {
    display: none !important; }

    .mfp-preloader {
    color: #CCC;
    position: absolute;
    top: 50%;
    width: auto;
    text-align: center;
    margin-top: -0.8em;
    left: 8px;
    right: 8px;
    z-index: 1044; }
    .mfp-preloader a {
        color: #CCC; }
        .mfp-preloader a:hover {
        color: #FFF; }

    .mfp-s-ready .mfp-preloader {
    display: none; }

    .mfp-s-error .mfp-content {
    display: none; }

    button.mfp-close,
    button.mfp-arrow {
    overflow: visible;
    cursor: pointer;
    background: transparent;
    border: 0;
    -webkit-appearance: none;
    display: block;
    outline: none;
    padding: 0;
    z-index: 1046;
    box-shadow: none;
    touch-action: manipulation; }

    button::-moz-focus-inner {
    padding: 0;
    border: 0; }

    .mfp-close {
    width: 44px;
    height: 44px;
    line-height: 44px;
    position: absolute;
    right: 0;
    top: 0;
    text-decoration: none;
    text-align: center;
    opacity: 0.65;
    padding: 0 0 18px 10px;
    color: #FFF;
    font-style: normal;
    font-size: 28px;
    font-family: Arial, Baskerville, monospace; }
    .mfp-close:hover,
    .mfp-close:focus {
        opacity: 1; }
    .mfp-close:active {
        top: 1px; }

    .mfp-close-btn-in .mfp-close {
    color: #333; }

    .mfp-image-holder .mfp-close,
    .mfp-iframe-holder .mfp-close {
    color: #FFF;
    right: -6px;
    text-align: right;
    padding-right: 6px;
    width: 100%; }

    .mfp-counter {
    position: absolute;
    top: 0;
    right: 0;
    color: #CCC;
    font-size: 12px;
    line-height: 18px;
    white-space: nowrap; }

    .mfp-arrow {
    position: absolute;
    opacity: 0.65;
    margin: 0;
    top: 50%;
    margin-top: -55px;
    padding: 0;
    width: 90px;
    height: 110px;
    -webkit-tap-highlight-color: transparent; }
    .mfp-arrow:active {
        margin-top: -54px; }
    .mfp-arrow:hover,
    .mfp-arrow:focus {
        opacity: 1; }
    .mfp-arrow:before,
    .mfp-arrow:after {
        content: '';
        display: block;
        width: 0;
        height: 0;
        position: absolute;
        left: 0;
        top: 0;
        margin-top: 35px;
        margin-left: 35px;
        border: medium inset transparent; }
    .mfp-arrow:after {
        border-top-width: 13px;
        border-bottom-width: 13px;
        top: 8px; }
    .mfp-arrow:before {
        border-top-width: 21px;
        border-bottom-width: 21px;
        opacity: 0.7; }

    .mfp-arrow-left {
    left: 0; }
    .mfp-arrow-left:after {
        border-right: 17px solid #FFF;
        margin-left: 31px; }
    .mfp-arrow-left:before {
        margin-left: 25px;
        border-right: 27px solid #3F3F3F; }

    .mfp-arrow-right {
    right: 0; }
    .mfp-arrow-right:after {
        border-left: 17px solid #FFF;
        margin-left: 39px; }
    .mfp-arrow-right:before {
        border-left: 27px solid #3F3F3F; }

    .mfp-iframe-holder {
    padding-top: 40px;
    padding-bottom: 40px; }
    .mfp-iframe-holder .mfp-content {
        line-height: 0;
        width: 100%;
        max-width: 900px; }
    .mfp-iframe-holder .mfp-close {
        top: -40px; }

    .mfp-iframe-scaler {
    width: 100%;
    height: 0;
    overflow: hidden;
    padding-top: 56.25%; }
    .mfp-iframe-scaler iframe {
        position: absolute;
        display: block;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
        background: #000; }

    /* Main image in popup */
    img.mfp-img {
    width: auto;
    max-width: 100%;
    height: auto;
    display: block;
    line-height: 0;
    box-sizing: border-box;
    padding: 40px 0 40px;
    margin: 0 auto; }

    /* The shadow behind the image */
    .mfp-figure {
    line-height: 0; }
    .mfp-figure:after {
        content: '';
        position: absolute;
        left: 0;
        top: 40px;
        bottom: 40px;
        display: block;
        right: 0;
        width: auto;
        height: auto;
        z-index: -1;
        box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
        background: #444; }
    .mfp-figure small {
        color: #BDBDBD;
        display: block;
        font-size: 12px;
        line-height: 14px; }
    .mfp-figure figure {
        margin: 0; }

    .mfp-bottom-bar {
    margin-top: -36px;
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    cursor: auto; }

    .mfp-title {
    text-align: left;
    line-height: 18px;
    color: #F3F3F3;
    word-wrap: break-word;
    padding-right: 36px; }

    .mfp-image-holder .mfp-content {
    max-width: 100%; }

    .mfp-gallery .mfp-image-holder .mfp-figure {
    cursor: pointer; }

    @media screen and (max-width: 800px) and (orientation: landscape), screen and (max-height: 300px) {
    /**
        * Remove all paddings around the image on small screen
        */
    .mfp-img-mobile .mfp-image-holder {
        padding-left: 0;
        padding-right: 0; }
    .mfp-img-mobile img.mfp-img {
        padding: 0; }
    .mfp-img-mobile .mfp-figure:after {
        top: 0;
        bottom: 0; }
    .mfp-img-mobile .mfp-figure small {
        display: inline;
        margin-left: 5px; }
    .mfp-img-mobile .mfp-bottom-bar {
        background: rgba(0, 0, 0, 0.6);
        bottom: 0;
        margin: 0;
        top: auto;
        padding: 3px 5px;
        position: fixed;
        box-sizing: border-box; }
        .mfp-img-mobile .mfp-bottom-bar:empty {
        padding: 0; }
    .mfp-img-mobile .mfp-counter {
        right: 5px;
        top: 3px; }
    .mfp-img-mobile .mfp-close {
        top: 0;
        right: 0;
        width: 35px;
        height: 35px;
        line-height: 35px;
        background: rgba(0, 0, 0, 0.6);
        position: fixed;
        text-align: center;
        padding: 0; } }

    @media all and (max-width: 900px) {
    .mfp-arrow {
        -webkit-transform: scale(0.75);
        transform: scale(0.75); }
    .mfp-arrow-left {
        -webkit-transform-origin: 0;
        transform-origin: 0; }
    .mfp-arrow-right {
        -webkit-transform-origin: 100%;
        transform-origin: 100%; }
    .mfp-container {
        padding-left: 6px;
        padding-right: 6px; } }
    /* end image preview */
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
                            <div id="map" style="height: 100%;"></div>
                        </div>
                         <div class="col-sm-6">
                            <div class="locaion-d">
                                <h4>Location: </h4>
                                <p class="ml-4 location-details">{{$data['info']->address1 ?? ''}}</p>
                                <h4>Latitude: </h4>
                                <p class="ml-4 location-details">{{$data['info']->latitude ?? ''}}</p>
                                <h4>Longitude: </h4>
                                <p class="ml-4 location-details">{{$data['info']->longitude ?? ''}}</p>
                                <h4>City: </h4>
                                <p class="ml-4 location-details">{{$data['info']->city ?? ''}}</p>
                                <h4>Zip: </h4>
                                <p class="ml-4 location-details">{{$data['info']->zipcode ?? ''}}</p>
                                
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
                                <p class="ml-4 location-details">{{$data['info']->username ?? ''}}</p>
                                <h4>Email: </h4>
                                <p class="ml-4 location-details">{{$data['info']->email ?? ''}}</p>
                                <h4>Phone: </h4>
                                <p class="ml-4 location-details">{{$data['info']->phone ?? ''}}</p>
                            </div>
                        </div>
                        
                        @php
                            $file=!is_null($data['info']) && $data['info']->attachments ? $data['info']->attachments->where('type','<>','image')->first() : null;
                        @endphp
                        @if (!is_null($file) && $file->file)
                            <div class="col-sm-4">
                                <div class="locaion-d">
                                    <h4>Previous Report File: </h4>
                                    <p class="ml-0">
                                        <a href="{{ !is_null($file)? route('backend.remote_assessment_report',$file->file) :'#'}}" class="btn btn-primary">Download</a>
                                    </p>
                                </div>
                            </div>  
                        @endif
                        
                        @if (!is_null($data['info']) && $data['info']->attachments)
                            <div class="col-sm-12">
                                <div class="locaion-d">
                                    <h4>Images of house: </h4>
                                    <p class="ml-0">
                                        <section class="img-gallery-magnific">
                                            @foreach ($data['info']->attachments as $img)
                                                @if ($img->type=='image' && file_exists( public_path().'/storage/uploads/uploadData/'.$img->file ))
                                                    <div class="magnific-img">
                                                        <a class="image-popup-vertical-fit" href="{{ asset('storage/uploads/uploadData/' . $img->file ?? '') }}" title="9.jpg">
                                                            <img src="{{ asset('storage/uploads/uploadData/' . $img->file ?? '') }}" alt="9.jpg" />
                                                            <i class="fa fa-search-plus" aria-hidden="true" style="display: none"></i>
                                                        </a>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </section>
                                        <div class="clear"></div>
                                                {{-- <a href="#" class="kt-media kt-media--xl">
                                                    <img src="{{ asset('storage/uploads/uploadData/' . $img->file ?? '') }}" alt="image">
                                                </a>  --}}    
                                    </p>
                                </div>
                            </div>
                        @endif
                        
                    </div>
                </div>
            </div>
            <!--end:: Widgets/Order Statistics-->    
        </div>
        <div class="col-md-12">
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Report
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    @include('backend.components.report.'.$data['type'],['finding'=>$data['findings']])
                </div>
            </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<!--end::Page Scripts -->
<script>
    function initMap() {
        const myLatLng = { lat: {{$data['info']->latitude ?? 0}}, lng: {{$data['info']->longitude ?? 0}} };
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 8,
            center: myLatLng,
        });

        @if(!is_null($data['info']) && ($data['info']->latitude && $data['info']->longitude))
            new google.maps.Marker({
                position: myLatLng,
                map,
                title: "I'm here!",
            });
        @endif
        
    }
</script>

<script>
    $(document).ready(function(){
        $('.image-popup-vertical-fit').magnificPopup({
            type: 'image',
        mainClass: 'mfp-with-zoom', 
        gallery:{
                    enabled:true
                },

        zoom: {
            enabled: true, 

            duration: 300, // duration of the effect, in milliseconds
            easing: 'ease-in-out', // CSS transition easing function

            opener: function(openerElement) {

            return openerElement.is('img') ? openerElement : openerElement.find('img');
        }
        }

        });

    });
</script>
<script defer
   src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqqhqN5q545cx57GD5ht6JVidUQuuGd34&callback=initMap"></script>
@endsection