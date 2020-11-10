{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}



@extends('frontend.layout.app')

@section('styles')
@endsection

@section('content') 
 <!-- Page top section  -->
    <section class="page-top-section set-bg" data-setbg="{{ url('/') }}/images/bg1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h2>Register</h2>
                    <p>Already have an account ?</p>
                    <a href="{{ route('login') }}" class="site-btn">login</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Page top section end  -->

    <!-- Contact section   -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-text">
                        <h2>Register to your account now</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin estst quis, blandit sollicitudi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin estst quis, blandit sollicitudi</p>
                        <div class="header-info-box">
                            <div class="hib-icon">
                                <img src="img/icons/phone.png" alt="" class="">
                            </div>
                            <div class="hib-text">
                                <h6>+546 990221 123</h6>
                                <p>contact@industryalinc.com</p>
                            </div>
                        </div>
                        <div class="header-info-box">
                            <div class="hib-icon">
                                <img src="img/icons/map-marker.png" alt="" class="">
                            </div>
                            <div class="hib-text">
                                <h6>Main Str, no 23</h6>
                                <p>NY, New York PK 23589</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form class="contact-form"  method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <input placeholder="{{ __('Name') }}" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
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
                            <div class="col-lg-12">
                                <input placeholder="{{ __('Confirm Password') }}" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="col-lg-4">
                            </div>
                            <div class="col-lg-12">
                                <button class="site-btn w-100" type="submit">Register</button>
                            </div>
                        </div>
                    </form>
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