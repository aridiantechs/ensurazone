@extends('frontend.layout.app')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" integrity="sha512-gxWow8Mo6q6pLa1XH/CcH8JyiSDEtiwJV78E+D+QP0EVasFs8wKXq16G8CLD4CJ2SnonHr4Lm/yY2fSI2+cbmw==" crossorigin="anonymous" />
<style type="text/css">
.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    background-color: #17172d;
}
tr td {
    padding-bottom: 10px;
}
header.header-section {
    box-shadow: 0px 1px 25px #2e2e2e1a;
}

.disabled{
    background: #929292 !important;
    cursor: default !important;
}

.p-0-20{
    padding: 0px 20px;
}
.error{
    color: red;
}

.d-grid{
    display: grid;
}

.valid-feedback{
    display: block;
}

.invalid-feedback{
    display: block;
}

.hide{
    display: none;
}
</style>
@endsection

@section('content')

<section class="pb-5 header">

    {{-- <section class="page-top-section set-bg" data-setbg="{{ url('/') }}/images/bg1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h2>Survey Form</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. </p>
                    <a href="" class="site-btn">Survey</a>
                </div>
            </div>
        </div>
    </section> --}}

    <div class="container py-4">
        <header class="text-center mb-5 pb-5 text-dark">
            <h1 class="display-4">My Account</h1>
            <p class="font-italic mb-1">You can update your personal details, download reports and download invoice details here.</p>
            
        </header>


        <div class="row">
            <div class="col-md-3">
                <!-- Tabs nav -->
                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <i class="fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Personal information</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <i class="fa fa-calendar-minus-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">My report</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <i class="fa fa-star mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Invoices</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                        <i class="fa fa-user mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Account </span></a>
                    </div>
            </div>


            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <form action="{{route('my_account.store')}}" id="personal-info-form" method="POST">
                            @csrf
                            
                            <h4 class="font-italic mb-4">Personal information</h4>
                            <div class="row mb-5">
                                <div class="col-6">
                                    <label for="username" class="form-label mt-3">Name</label>
                                    <input class="form-control" type="text" name="username" id="username" value="{{ old('username') ?? (!is_null($data['user']) ? $data['user']->username : '')}}" />
                                    @error('username')
                                        <div class="error">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="email" class="form-label mt-3">Email</label>
                                    <input class="form-control" type="email" name="email" id="email" value="{{ old('email') ?? (!is_null($data['user']) ? $data['user']->email : '')}}" />
                                    @error('email')
                                        <div class="error">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-6 d-grid">
                                    <label for="phone" class="form-label mt-3">Phone</label>
                                    <input class="form-control" type="tel" name="phone" id="phone" value="{{$data['user']->phone ?? ''}}" />
                                    <input type="tel" class="hide" name="new_phone" id="hiden" value="{{$data['user']->phone_c_data ?? ''}}">
                                    <span id="valid-msg" class="valid-feedback hide">✓ Valid</span>
                                    <span id="error-msg" class="invalid-feedback hide"></span>
                                    @error('phone')
                                        <div class="error">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="dob" class="form-label mt-3">DOB</label>
                                    <input class="form-control" max="{{ now() }}" type="date" name="dob" id="dob" placeholder="DATE OF BIRTH" value="{{ old('dob') ?? (!is_null($data['user']) ? $data['user']->dob : '')}}" />

                                    @error('dob')
                                        <div class="error">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-12">
                                    <button type="button" id="personalInfoFormBtn" class="site-btn sb-dark">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <h4 class="font-italic mb-4">My report</h4>
                        <div class="row mt-5 text-center">
                            <div class="col-4">
                                <h5 class="mb-3">Remote Assesment Report</h5>
                                <a href="{{route('view_report',['q'=>'remote_assessment'])}}" target="_blank" class="site-btn sb-dark"><i class="fa fa-download mr-2"></i> Download</a>
                            </div>

                            <div class="col-4 border-left">
                                <h5 class="mb-3">GroundProof Plan Report</h5>
                                @if (auth()->user()->ground_proof()->exists())
                                    <a href="{{route('view_report',['q'=>'ground_proof'])}}" target="_blank" class="site-btn sb-dark"><i class="fa fa-download mr-2"></i> Download</a>
                                @elseif(auth()->user()->remote_assessment()->exists())
                                    <button class="site-btn sb-dark" name="upgradeBtn" data-upgradetype="ground_proof" data-toggle="modal" data-target="#upgradeModal"><i class="fa fa-arrow-up mr-2"></i> Upgrade</button>
                                @endif
                                
                            </div>

                            @if (auth()->user()->mitigation()->exists() || auth()->user()->ground_proof()->exists())
                                <div class="col-4 border-left">
                                    <h5 class="mb-3">Mitigation Plan Report</h5>
                                    @if (auth()->user()->mitigation()->exists())
                                        <a href="{{route('view_report',['q'=>'mitigation'])}}" target="_blank" class="site-btn sb-dark"><i class="fa fa-download mr-2"></i> Download</a>
                                    @elseif(auth()->user()->ground_proof()->exists())
                                        <button class="site-btn sb-dark" name="upgradeBtn" data-upgradetype="mitigation" data data-toggle="modal" data-target="#upgradeModal"><i class="fa fa-arrow-up mr-2"></i> Upgrade</button>
                                    @endif
                                    
                                </div>
                            @endif
                            

                        </div>
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <h4 class="font-italic mb-4">Invoices</h4>
                        <table class="w-100">
                            <thead>
                                <th>No.</th>
                                <th>Date</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>12-10-2020</td>
                                    <td><a href="#"><i class="fa fa-download mr-2"></i></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>05-10-2019</td>
                                    <td><a href="#"><i class="fa fa-download mr-2"></i></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>12-10-2018</td>
                                    <td><a href="#"><i class="fa fa-download mr-2"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <form action="{{route('my_account.password')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="">
                                        <label for="old_pass" class="form-label mt-3">Old Password</label>
                                        <input class="form-control" type="password" name="old_pass" id="old_pass" />
                                    </div>

                                    <div class="">
                                        <label for="new_pass" class="form-label mt-3">New Password</label>
                                        <input class="form-control" type="password" name="new_pass" id="new_pass" />
                                    </div>

                                    <div class="">
                                        <label for="confirm_pass" class="form-label mt-3">Confirm Password</label>
                                        <input class="form-control" type="password" name="confirm_pass" id="confirm_pass" />
                                    </div>

                                    <button type="submit" class="site-btn sb-dark mt-4">Update password</button>
                                </div>

                                <div class="col-6">
                                    <h5 class="font-italic mb-4">Logout from account</h5>
                                    <a class="site-btn sb-dark" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                        <i class="fa fa-user mr-2"></i> Logout
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="upgradeModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Upgrade Plan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 mt-2 mb-3">
                        <div class="row">
                            <div class="col-sm-8">
                                <p class="p-0-20"><em>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</em></p>
                            </div>
                            <div class="col-sm-4">
                                <div class="p-0-20">
                                    <a id="sample_report" href="{{route('sample_report')}}" target="_blank" class="site-btn sb-dark">Sample Report</a>
                                </div>
                            </div>
                        </div>
                        <form action="{{route('upgrade_plan')}}" id="groundProofForm" method="POST">
                            @csrf
                            <input type="hidden" name="upgrade_type" id="upgrade_type">
                            <div id="payment-section">
                                                    
                                <div class="form-group">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <input class="form-control" id="card-holder-name" placeholder="Card Holder name" type="text">
                                        </div>
                                    
                                        <div id="card-element" class="form-control">
                                        <!-- A Stripe Element will be inserted here. -->
                                        </div>
                                        <!-- Used to display form errors. -->
                                        <div id="card-errors" role="alert"></div>
                                        <button type="submit" class="site-btn sb-dark mt-5" id="card-button" data-secret="{{ $intent->client_secret }}">Pay</button>
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('scripts')
<script src="https://js.stripe.com/v3/"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js" integrity="sha512-DNeDhsl+FWnx5B1EQzsayHMyP6Xl/Mg+vcnFPXGNjUZrW28hQaa1+A4qL9M+AiOMmkAhKAWYHh1a+t6qxthzUw==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.14/js/utils.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.js"></script>
<script>
    // Create a Stripe client.
    var stripe = Stripe('{{config('app.STRIPE_KEY')}}');

    $(document).ready(function () {
        // Create an instance of Elements.
        var elements = stripe.elements();
        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
            base: {
                color: '#32325d',
                lineHeight: '18px',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };
        // Create an instance of the card Element.
        var card = elements.create('card', { style: style });
        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');
        // Handle real-time validation errors from the card Element.
        card.addEventListener('change', function (event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });
        // Handle form submission.
        var form = document.getElementById('payment-section');
        const cardHolderName = document.getElementById('card-holder-name');
        const cardButton = document.getElementById('card-button');
        const clientSecret = cardButton.dataset.secret;
        cardButton.addEventListener('click', async (e) => {
            event.preventDefault();
            const { paymentMethod, error } = await stripe.createPaymentMethod(
                'card', card, {
                billing_details: { name: cardHolderName.value }
            }
            );
            if (error) {
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            } else {
                stripeTokenHandler(paymentMethod);
            }

        });
    })

    // Submit the form with the token ID.
    function stripeTokenHandler(paymentMethod) {
        // Insert the token ID into the form so it gets submitted to the server
        var pay_section = document.getElementById('payment-section');
        var form = document.getElementById('groundProofForm');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'paymentMethod');
        hiddenInput.setAttribute('value', paymentMethod.id);
        pay_section.appendChild(hiddenInput);
        // Submit the form
        form.submit();
    }
</script>

<script>
    $(document).ready(function(){

        dob.max = new Date().toISOString().split("T")[0];

        
        $('[name="upgradeBtn"]').click(function(){
            var upgrade_type=$(this).data('upgradetype');
            $('#upgrade_type').val(upgrade_type);

            $('#sample_report').attr('href','{{url('/')}}'+'/sample_report?q='+upgrade_type)
        })
    })
</script>

{{-------------------------}}
    {{-- input phone setting --}}
    <script>
        /* INITIALIZE BOTH INPUTS WITH THE intlTelInput FEATURE*/

        var phone = document.querySelector("#phone"),
            errorMsg = document.querySelector("#error-msg"),
            validMsg = document.querySelector("#valid-msg");
        
        // here, the index maps to the error code returned from getValidationError - see readme
        var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

        var iti=window.intlTelInput(phone,{
            allowDropdown: false,
            initialCountry: "us",
            separateDialCode: true,
            preferredCountries: ["fr", "us", "gb"],
            geoIpLookup: function (callback) {
                $.get('https://ipinfo.io', function () {
                }, "jsonp").always(function (resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "";
                    callback(countryCode);
                });
            },
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.14/js/utils.js"
        });

        var hiden_phone = document.querySelector("#hiden");
        window.intlTelInput(hiden_phone,{
            initialCountry: "us",
            dropdownContainer: 'body',
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.14/js/utils.js"
        });

        var reset = function() {
            phone.classList.remove("error");
            errorMsg.innerHTML = "";
            errorMsg.classList.add("hide");
            validMsg.classList.add("hide");
        };

        var mask1 = $("#phone").attr('placeholder').replace(/[0-9]/g, 0);

        $(document).ready(function () {
            $('#phone').mask(mask1)
        });

        $("#phone").on("countrychange", function (e, countryData) {
            $("#phone").val('');
            var mask1 = $("#phone").attr('placeholder').replace(/[0-9]/g, 0);
            $('#phone').mask(mask1);

            var country_data=iti.getSelectedCountryData();
            console.log(country_data);
            document.getElementById("hiden").value = JSON.stringify(country_data);/* $("#phone").val().replace(/\s+/g, '') */;
        });

        // on blur: validate
        phone.addEventListener('blur', function() {
        reset();
        if (phone.value.trim()) {
            if (iti.isValidNumber()) {
            validMsg.classList.remove("hide");
            } else {
            phone.classList.add("error");
            var errorCode = iti.getValidationError();
            errorMsg.innerHTML = errorMap[errorCode];
            errorMsg.classList.remove("hide");
            }
        }
        });

        $('input.hide').parent().hide();

        // on keyup / change flag: reset
        phone.addEventListener('change', reset);
        phone.addEventListener('keyup', reset);

    </script>
    {{-- end input phone setting --}}
    {{-----------------------------}}

    <script>
        $('#personalInfoFormBtn').on('click',function(e){
            e.preventDefault();
            if (iti.isValidNumber()) {
                var country_data=iti.getSelectedCountryData();
                console.log(country_data);
                document.getElementById("hiden").value = JSON.stringify(country_data);
                $('#personal-info-form').submit();
            } else {
                phone.classList.add("error");
                var errorCode = iti.getValidationError();
                errorMsg.innerHTML = errorMap[errorCode];
                errorMsg.classList.remove("hide");
                $('html, body').animate({
                    scrollTop: $("#phone-div").position().top
                }, 800);
                return false;
            }
        })
    </script>

@endsection