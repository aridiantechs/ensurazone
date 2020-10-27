@extends('frontend.layout.app')

@section('styles')
<style type="text/css">
.feature-box .fb-text {
    height: 280px !important;
}
.feature-box {
    box-shadow: 5px 5px 12px #17172d70
}
.feature-box .fb-more-btn {
    position: absolute;
    bottom: 50px;
}
.modal-cell {
    background: #eaeaea;
    margin: 10px 0;
    padding: 15px;
    color: #353535;
}
.fb-more-btns {
    display: inline-block;
    color: #e25822;
    font-size: 12px;
    text-transform: uppercase;
    border: 2px solid #e25822;
    padding: 15px;
    min-width: 128px;
    text-align: center;
}
/*.modal-body {
    position: relative;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1rem;
    border-top: 4px solid #e25822;
    border-radius: 3px;
}*/
</style>
@endsection

@section('content')
<!-- Hero section  -->
    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            <div class="hero-item set-bg" data-setbg="{{ url('/') }}/images/bg1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8">
                            <h2><span>Wildfire</span><span>Assessment</span><span> Services</span></h2>
                            <a href="#" class="site-btn sb-white mr-4 mb-3">Start planning for wildfire now</a>
                            <a href="{{ route('wildfire-assessment-services') }}" class="site-btn sb-dark">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
           {{--  <div class="hero-item set-bg" data-setbg="{{ url('/') }}/theme/img/hero-slider/2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8">
                            <h2><span>Power</span><span>& Energy</span><span>Industry</span></h2>
                            <a href="#" class="site-btn sb-white mr-4 mb-3">Read More</a>
                            <a href="#" class="site-btn sb-dark">our Services</a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- Hero section end  -->

    <!-- Services section  -->
{{--     <section class="services-section">
        <div class="services-warp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="service-item">
                            <div class="si-head">
                                <div class="si-icon">
                                    <img src="{{ url('/') }}/theme/img/icons/cogwheel.png" alt="">
                                </div>
                                <h5>Wildfire Protection Contractors</h5>
                            </div>
                            <p><a href="#" class="">See Contractors<i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="service-item">
                            <div class="si-head">
                                <div class="si-icon">
                                    <img src="{{ url('/') }}/theme/img/icons/helmet.png" alt="">
                                </div>
                                <h5>Wildfire Planning Information</h5>
                            </div>
                             
                            <p><a href="#" class="">See Wildfire Service Providers<i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a></p>
                        </div>
                    </div>
                    
            
                </div>
            </div>
        </div>
    </section> --}}

    <section class="services-section">
        <div class="services-warp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="service-item">
                            <div class="si-head">
                                <div class="si-icon">
                                    
                                </div>
                                <h4 class="text-center">Wildfire Protection Contractors</h4>
                            </div>
                            <p class="text-center"><a href="{{ route('wildfire-protection-contractors') }}" class="site-link">See Contractors</a></p>
                        </div>
                    </div>
                   
                    <div class="col-lg-6 col-md-12">
                        <div class="service-item">
                            <div class="si-head">
                                <div class="si-icon">
                                    
                                </div>
                                <h4 class="text-center">Wildfire Planning Information</h4>
                            </div>
                            <p class="text-center"><a href="{{ route('wildfire-planning-information') }}" class="site-link">See Wildfire Service Providers</a></p>
                        </div>
                    </div>
                 
                </div>
            </div>
        </div>
    </section>

    <!-- Services section end  -->

    <!-- Features section   -->
    <section 
        class="features-section spad set-bg" 
        {{-- data-setbg="{{ url('/') }}/theme/img/features-bg.jpg" --}}
        >
        <div class="container">
            <div class="client-text">
                <h2 ><span class="text-theme">ENSURAZONE</span> <span class="text-dark"> is a WILDFIRE SAFETY PLANNING TECHNOLOGY COMPANY. </span></h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="feature-box">
                        
                        <div class="fb-text">
                            
                            <p>Ensurazone provides its “Users” access to advancing technology through “Remote Sensed” Wildfire Hazard Assessment and Mitigation Planning on its Ensurazone Website and Web Application.</p>
                            <a href="{{ route('services') }}" class="fb-more-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="feature-box">
                        
                        <div class="fb-text">
                            
                            <p>Ensurazone uses sensor technology normally found on satellites combined
                                with computer imaging and modeling, and a ‘user friendly' interface to
                                empower you towards real wildfire vulnerability reduction measures.</p>
                            <a href="{{ route('services') }}" class="fb-more-btn">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="feature-box">
                        
                        <div class="fb-text">
                            
                            <p>
                                Ensurazone is building an automated solution to address the wildfire
                                assessment and mitigation process, house by house, and home by home,
                                and putting control back in the hands of home and property owners.
                            </p>
                            <a href="{{ route('services') }}" class="fb-more-btn">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="feature-box">
                        
                        <div class="fb-text">
                            
                            <p>Ensurazone helps you create defensible space by establishing a healthy
                                landscape and ecosystem surrounding your home and our Structural
                                Resilience/Home Hardening assessments survey your home and other
                                structures on your property to assure you all has been done to prepare you
                                for wildfire.</p>
                            <a href="{{ route('services') }}" class="fb-more-btn">Read More</a>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </section>
    <!-- Features section end  -->


    <!-- Clients section  -->
   {{--  <section class="clients-section spad py-0">
        <div class="container">
            <div class="client-text">
                <h2><span class="text-theme">ENSURAZONE</span> is a WILDFIRE SAFETY PLANNING TECHNOLOGYCOMPANY.</h2>
                <p ></p>
                    <p>
                        
                    </p>
                    <p></p>
                    <p>
                        
                    </p>
            </div>
            <div id="client-carousel" class="client-slider owl-carousel">
                <div class="single-brand">
                    <a href="#">
                        <img src="{{ url('/') }}/theme/img/clients/1.png" alt="">
                    </a>
                </div>
                <div class="single-brand">
                    <a href="#">
                        <img src="{{ url('/') }}/theme/img/clients/2.png" alt="">
                    </a>
                </div>
                <div class="single-brand">
                    <a href="#">
                        <img src="{{ url('/') }}/theme/img/clients/3.png" alt="">
                    </a>
                </div>
                <div class="single-brand">
                    <a href="#">
                        <img src="{{ url('/') }}/theme/img/clients/4.png" alt="">
                    </a>
                </div>
                <div class="single-brand">
                    <a href="#">
                        <img src="{{ url('/') }}/theme/img/clients/5.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Clients section end  -->


    <!-- Testimonial section -->
    <section class="testimonial-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="testimonial-bg set-bg" data-setbg="{{ url('/') }}/images/banner-homes.jpg"></div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="testimonial-box">
                        <div class="testi-box-warp">
                            <h2>Better Protection</h2>
                            <div class="">
                                <div class="testimonial">
                                    <p class="font-16">Combining Defensible Space and Structural Resilience / Home Hardening
Assessments and then completing recommended improvements, can mean
better protection and reduced vulnerability to extreme wildfire for your
home and family, and help you avoid unnecessary cost from enforcement
actions by your fire services provider or insurance company.</p>
                                     
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial section end  -->




    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="text-center">

                        <img src="{{ asset('images/question.png') }}" class="img img-fluid mt-5" style="max-width: 180px;">

                        <div class="row mt-5">
                            <div class="col-4">
                                <div class="modal-cell">Looking to sell your home? </div>
                            </div>
                            <div class="col-8">
                                <div class="modal-cell">Or Are you looking to prepare yourself for inspection by a fire agency? </div>
                            </div>
                            <div class="col-6">
                                <div class="modal-cell">Are you concerned about neighboring wild fire exposures? </div>
                            </div>
                            <div class="col-6">
                                <div class="modal-cell">Or are you just looking for more information on how to prepare ?</div>
                            </div>
                        </div>

                        <h4 class="mb-5 mt-5">Ensurazone can help you organize your hazard mitigation plan and find fire protection contractors who can complete the recommended repairs and/or improvements quickly and efficiently.</h4>

                        <a href="{{ route('services') }}" class="fb-more-btns mb-5">Read More</a>

                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 

@endsection


@section('scripts')
<script type="text/javascript">
$( window ).on( "load", function() {
    setTimeout(function(){ 
        $('#myModal').modal('show');
    }, 6000);
});
</script>
@endsection