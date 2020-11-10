{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
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





@extends('auth.layout.app')
 
@section('content')
<div class="kt-grid kt-grid--ver kt-grid--root">
   <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v6 kt-login--signin" id="kt_login">
      <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">
         <div class="kt-grid__item  kt-grid__item--order-tablet-and-mobile-2  kt-grid kt-grid--hor kt-login__aside">
            <div class="kt-login__wrapper">
               <div class="kt-login__container">
                  <div class="kt-login__body">
                     <div class="kt-login__logo">
                        <a href="#">
                            <h1 class="logo_title">Powerful automation for scaling ads</h1>     
                        </a>
                     </div>
                     <div class="kt-login__signin">
                        <div class="kt-login__head">
                           <h3 class="kt-login__title">Sign In To Admin</h3>
                        </div>
                        <div class="kt-login__form">
                            
                            <form class="kt-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                              </div>
                              <div class="form-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                 
                              </div>
                              <div class="kt-login__extra">
                                 <label class="kt-checkbox">
                                 <input type="checkbox" class="" name="remember"> Remember me
                                 <span></span>
                                 </label>                        
                                 <a href="javascript:;" id="kt_login_forgot">Forget Password ?</a>
                              </div>
                              <div class="kt-login__actions">
                                <button type="submit" id="" class="btn btn-brand btn-pill btn-elevate">Login</button>
                              </div>

                           </form>

                           <!--begin::Divider-->
                                <div class="kt-login__divider">
                                  <div class="kt-divider">
                                    <span></span>
                                    <span>OR</span>
                                    <span></span>
                                  </div>
                                </div>
                                <!--end::Divider-->
                              <!--begin::Options-->
                                <div class="kt-login__options text-center pt-4">
                                  <a href="{{-- {{ route('social_login','facebook') }} --}}#" class="btn btn-primary kt-btn">
                                    <i class="fab fa-facebook-f"></i>
                                    Facebook
                                  </a>

                                  <a href="{{-- {{ route('social_login','google') }} --}}#" class="btn btn-danger kt-btn">
                                    <i class="fab fa-google"></i>
                                    Google
                                  </a>
                                </div>
                                <!--end::Options-->

                        </div>
                     </div>
                     <div class="kt-login__signup">
                        <div class="kt-login__head">
                           <h3 class="kt-login__title">Sign Up</h3>
                           <div class="kt-login__desc">Enter your details to create your account:</div>
                        </div>
                        <div class="kt-login__form">
                           <form class="kt-form" action="">
                              <div class="form-group mb-3">
                                 <input class="form-control" type="text" placeholder="Fullname" name="fullname">
                              </div>
                              <div class="form-group">
                                 <input class="form-control mb-3" type="text" placeholder="Email" name="email" autocomplete="off">
                              </div>
                              <div class="form-group">
                                 <input class="form-control mb-3" type="password" placeholder="Password" name="password">
                              </div>
                              <div class="form-group">
                                 <input class="form-control form-control-last" type="password" placeholder="Confirm Password" name="rpassword">
                              </div>
                              <div class="kt-login__extra">
                                 <label class="kt-checkbox">
                                 <input type="checkbox" name="agree"> I Agree the <a href="#">terms and conditions</a>.
                                 <span></span>
                                 </label>
                              </div>
                              <div class="kt-login__actions">
                                 {{-- <button id="kt_login_signup_submit" class="btn btn-brand btn-pill btn-elevate">Sign Up</button> --}}
                                 <a href="{{ route('login') }}" id="kt_login_signup_submit" class="btn btn-brand btn-pill btn-elevate">Sign in</a>
                                 <button id="kt_login_signup_cancel" class="btn btn-outline-brand btn-pill">Cancel</button>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="kt-login__forgot">
                        <div class="kt-login__head">
                           <h3 class="kt-login__title">Forgotten Password ?</h3>
                           <div class="kt-login__desc">Enter your email to reset your password:</div>
                        </div>
                        <div class="kt-login__form">
                           <form class="kt-form" action="">
                              <div class="form-group">
                                 <input class="form-control" type="text" placeholder="Email" name="email" id="kt_email" autocomplete="off">
                              </div>
                              <div class="kt-login__actions">
                                 <button id="kt_login_forgot_submit" class="btn btn-brand btn-pill btn-elevate">Request</button>
                                 <button id="kt_login_forgot_cancel" class="btn btn-outline-brand btn-pill">Cancel</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="kt-login__account">
                  <span class="kt-login__account-msg">
                  Don't have an account yet ?
                  </span>&nbsp;&nbsp;
                  <a href="javascript:;" id="kt_login_signup" class="kt-login__account-link">Sign Up!</a>
               </div>
            </div>
         </div>
         <div class="kt-grid__item kt-grid__item--fluid kt-grid__item--center kt-grid kt-grid--ver kt-login__content" style="background: #E5E5E5;">
            <div class="kt-login__section">
               <div class="kt-login__block">
                <img src="{{ asset('backend/images/login/clip-message-sent.png') }}" class="img img-fluid">
                  {{-- <h3 class="kt-login__title">Join Our Community</h3>
                  <div class="kt-login__desc">
                     Lorem ipsum dolor sit amet, coectetuer adipiscing
                     <br>elit sed diam nonummy et nibh euismod   
                  </div> --}}
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection



