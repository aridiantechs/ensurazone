@extends('frontend.layout.app')

@section('content')
<!-- Hero section  -->
    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            <div class="hero-item no-height set-bg" data-setbg="{{ url('/') }}/images/bg1.jpg" >
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8">
                            <h2><span>Wildfire</span><span>Assessment</span><span> Services</span></h2>
                            <a href="#" class="site-btn sb-white mr-4 mb-3">Start planning for wildfire now</a>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </section>
    <!-- Hero section end  -->


{{--     <section class="services-section">
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
                            <p class="text-center"><a href="#" class="site-link">See Contractors</a></p>
                        </div>
                    </div>
                   
                    <div class="col-lg-6 col-md-12">
                        <div class="service-item">
                            <div class="si-head">
                                <div class="si-icon">
                                    
                                </div>
                                <h4 class="text-center">Wildfire Planning Information</h4>
                            </div>
                            <p class="text-center"><a href="#" class="site-link">See Wildfire Service Providers</a></p>
                        </div>
                    </div>
                 
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Services section end  -->

    <!-- Features section   -->
    <section class="features-section spad set-bg" >
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box">
                        {{-- <img src="{{ url('/') }}/theme/img/features/1.jpg" alt=""> --}}
                        <div class="fb-text">
                            <h5>What we do for the user/customer</h5>
                            <p>Ensurazone provides professional grade Defensible Space and Structural
                                Resilience / Home Hardening assessments, reports on our findings, and
                                the mitigation planning to assist you in managing the assessment and
                                mitigation requirements set by your fire services provider or fire safety
                                organization.</p>
                            {{-- <a href="" class="fb-more-btn">Read More</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box">
                        {{-- <img src="{{ url('/') }}/theme/img/features/2.jpg" alt=""> --}}
                        <div class="fb-text">
                            <h5>What is Defensible Space?</h5>
                            <p>Cal-Fire defines Defensible space as essential to improve your home’s
                                chance of surviving a wildfire. It’s the buffer you create between a
                                building on your property and the grass, trees, shrubs, or any wildland
                                areas that surround it. This space is needed to slow or stop the spread
                                of wildfire and it helps protect your home from catching fire—either from direct flame contact or radiant heat. Defensible space is also important
                                for the protection of the firefighters defending your home.
                                <a href="https://www.fire.ca.gov/dspace/" class="site-link">fire.ca.gov</a>
                            {{-- <a href="" class="fb-more-btn">Read More</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="feature-box">
                        {{-- <img src="{{ url('/') }}/theme/img/features/3.jpg" alt=""> --}}
                        <div class="fb-text">
                            <h5>Manufactoring</h5>
                            <p>In January 2005 a new state law became effective that extended the defensible space
                                clearance around homes and structures from 30 feet to 100 feet. Proper clearance to
                                100 feet dramatically increases the chance of your house surviving a wildfire. This
                                defensible space also provides for firefighter safety when protecting homes during a
                                wildland fire.
                                <a href="https://www.fire.ca.gov/programs/communications/defensible-space-prc-4291/" class="site-link">Defensible Space PRC 4291</a>
                            {{-- <a href="" class="fb-more-btn">Read More</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features section end  -->






    <!-- Clients section  -->
    <section class="clients-section spad pt-0">
        <div class="container">

            

            <div class="client-text text-left">
                <h2>100 Feet of Defensible Space is the Law</h2>

                <p>In January 2005 a new state law became effective that extended the defensible space
clearance around homes and structures from 30 feet to 100 feet. Proper clearance to
100 feet dramatically increases the chance of your house surviving a wildfire. This
defensible space also provides for firefighter safety when protecting homes during a
wildland fire.

                </p> 

                <p>
                    Ensurazone’s Defensible Space and Structure/Home Hardening
Assessments use the same step by step assessment and hazard
evaluation process used by CAL-FIRE. We've designed our system to work
quickly and to the requirements found in your area.
                </p>

                <p>
                    Our “Ground Proof” process is completed by experienced wildfire
assessment and mitigation experts that live near you! By using Ensrazone
as your #1 choice for wildfire safety planning, you are protecting your home
and your wallet.
                </p>

                <p>
                    Complete basic information about your home, take a few pictures, and our
team is off! Right away our Subject Matter Experts begin identifying
hazards and vulnerabilities in and around your home at the speed of light!
Our condensed reporting format is easy to understand and gives you the
confidence you are taking the right actions to be fire safe and fire ready.
                </p>
            </div>
                
        </div>
    </section>
    <!-- Clients section end  -->
 

@endsection