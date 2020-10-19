@extends('frontend.layout.app')

@section('content')
<!-- Hero section  -->
    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            <div class="hero-item no-height set-bg" data-setbg="{{ url('/') }}/images/bg1.jpg" >
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8">
                            <h2><span>Defensible Space</span></h2>
                          
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </section>
    <!-- Hero section end  -->

    <!-- Clients section  -->
    <section class="clients-section spad">
        <div class="container">

            <div class="client-text text-left">
                <h2>Defensible Space</h2>

                <p>
                    Defensible space is essential to improve your home’s chance of
surviving a wildfire. It’s the buffer you create between a building on your
property and the grass, trees, shrubs, or any wildland area that
surrounds it. This space is needed to slow or stop the spread of wildfire
and it helps protect your home from catching fire—either from direct
flame contact or radiant heat. Defensible space is also important for the
protection of the firefighters defending your home(Cal-Fire 2020).
                </p>

                <p>
                    Ensurazones Defensible Space Assessment combines information
systems, advanced imaging, and software to produce accurate and
informative assessment and hazard mitigation reporting.
                </p>

            </div>

            <div class="client-text text-left">
                <h2>Structural Resilience/Home Hardening</h2>
                <p>Flying embers from a wildfire can destroy homes up to a mile away. Taking
the necessary measures to harden (prepare) your home can help increase
its chance of survival when wildfires strike. Assessment of openings and
exposures to structures can identify weaknesses in your homes
resilience/hardening.
                </p>

                <p>
                    Ensurazones Structural Resilience/Home Hardening Assessment surveys
all areas and helps you identify priorities and potential hazards. After the
assessment process the Ensurazone team will provide you with a detailed
list of recommendations and provide connections to service providers and
fire protection contractors to assist you in returning your home to alignment
with enforcement mandates and insurance company requirements.
                </p>
            </div>

      
        </div>
    </section>
    <!-- Clients section end  -->
 

@endsection