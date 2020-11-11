@extends('frontend.layout.app')

@section('content')

    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            <div class="hero-item no-height set-bg" data-setbg="{{ url('/') }}/images/bg1.jpg" >
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8">
                            <h2><span>Wildfire</span><span>Planning</span><span> Information</span></h2>
                            <a href="{{ route('register') }}" class="site-btn sb-white mr-4 mb-3">Start planning for wildfire now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


        <!-- Clients section  -->
    <section class="clients-section spad">
        <div class="container">

            <div class="client-text text-left">
                 
                <p>
                    Looking to sell your home? Or Are you looking to prepare yourself for
inspection by a fire agency? Are you concerned about neighboring wild fire
exposures? Or are you just looking for more information on how to prepare,
Ensurazone can help you organize your hazard mitigation plan and find fire
protection contractors who can complete the recommended repairs and/or
improvements quickly and efficiently.
                </p>

                <p>
                    Home and property owners will need access Defensible Space and
Structural Resilience/Home Hardening solutions that help manage the
wildfire assessments process, respond to insurance cancelations, and help

avoid the expense of the citation process for failure to comply with local,
state, federal mandates(Reference WUI CODE, and CAL-FIRE)
                </p>

                <p>
                    Ensurazone provides “remote sensed” wildfire assessment services,
mitigation planning, and contractor services all together on one easy to use
customer based platform. Services are fast and secure, delivered 10X the
speed as any other provider.
                </p>

                <p>
                    Let our team of fire services professionals help you organize and complete
this important life and property saving process, while providing you a clear
plan towards repair and the access to professional fire mitigation
contractors with the experience to complete the clean up and repairs in line
with your local codes and requirements.
                </p>
                <p>
                    Insurance Companies are using this technology to evaluate insurability and
they assess 100’s even 1000’s of homes every day. We just don't know it's
happening to us.
                </p>

                <p>
                    With the high costs of human life, and the financial burden associated with
large fires, insurance companies are acting to limit their liability. Does your
insurance company see you as a liability?, are you sure?
                </p>
                <p>
                    Don't worry, most people can not answer this question!! Because Insurance
companies protect this information very carefully. You'll know when you
receive a notice of property insurance cancelation.
                </p>
                <p>
                    As many as 50,000-100,000 homes in the state of California alone may
receive cancelation notices this year(Estimated), and the actual number
may be much higher.
                </p>

                <p>
                    Do not let your home be the next. Take control and select Ensurazones
services today, and have the information and answers you need by
tomorrow.
                </p>

            </div>

           
                
        </div>
    </section>
    <!-- Clients section end  -->

@endsection