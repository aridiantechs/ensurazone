
@extends('frontend.layout.app')

@section('styles')
@endsection

@section('content') 
 <!-- Page top section  -->
    <section class="page-top-section set-bg" data-setbg="{{ url('/') }}/images/bg1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h2>Login</h2>
                    <p>Do not have an account ?</p>
                    <a href="{{ route('register') }}" class="site-btn">Register</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Page top section end  -->

    <!-- Contact section   -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-3">
                    <div class="contact-text">
                        <h2>Get in to your account</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, estst quis, blandit sollicitudi</p>
                        
                    </div>
                    <form class="contact-form"  method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <input placeholder="{{ __('E-Mail Address') }}" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <input placeholder="{{ __('Password') }}" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                            </div>
                            <div class="col-lg-12">
                                <button class="site-btn w-100" type="submit">login</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Contact section end  -->

    <!-- Call to action section  -->
    <section class="cta-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 d-flex align-items-center">
                    <h2>We produce or supply Goods, Services, or Sources</h2>
                </div>
                <div class="col-lg-3 text-lg-right" >
                    <a href="{{ route('contact') }}" class="site-btn sb-dark">contact us</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to action section end  -->
 @endsection