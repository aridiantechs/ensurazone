@extends('frontend.layout.app')

@section('content')

    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            <div class="hero-item no-height set-bg" data-setbg="{{ url('/') }}/images/bg1.jpg" >
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8">
                            <h2><span>Wildfire</span><span>Protection</span><span> Constractors</span></h2>
                            <a href="#" class="site-btn sb-white mr-4 mb-3">Start planning for wildfire now</a>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </section>

@endsection

