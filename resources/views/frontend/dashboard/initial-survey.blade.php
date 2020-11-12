@extends('frontend.layout.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('theme/survey/fonts/material-icon/css/material-design-iconic-font.min.css') }}">
<link rel="stylesheet" href="{{ asset('theme/survey/vendor/nouislider/nouislider.min.css') }}">
<link rel="stylesheet" href="{{ asset('theme/survey/css/style.css') }}">
<style type="text/css">
header.header-section {
    box-shadow: 0px 1px 25px #2e2e2e1a;
}
</style>
@endsection

@section('content')
<!-- Hero section  -->
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
    <!-- Hero section end  -->

    
    <div class="main">

        <div class="container">
            <form method="POST" id="signup-form" class="signup-form" action="#">
                <div>
                    <h3>Personal info</h3>

                    <fieldset>
                        <h2>Personal information</h2>
                        <p class="desc">Please enter your infomation and proceed to next step so we can complete your account</p>
                        <div class="fieldset-content">

                            <div class="form-group">
                                <label for="username" class="form-label">Name</label>
                                <input class="form-control" type="username" name="username" id="username" />
                            </div>

                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input class="form-control" type="email" name="email" id="email" />
                                <span class="text-input">Example :<span>  Jeff@gmail.com</span></span>
                            </div>

                            <div class="form-group">
                                <label for="phone" class="form-label">Phone</label>
                                <input class="form-control" type="text" name="phone" id="phone" />
                            </div>
                            
                            <div class="form-group">
                                <label for="location" class="form-label">Location</label>
		                        <div class="input-group">
		                            <input type="text" name="addressone" id="current" onFocus="initializeAutocompleteLocOne()" class="form-control" placeholder="PICKUP Current Location" aria-required="true" >
		                            <span class="input-group-btn">
		                                <button style="border-radius: unset;" type="button" class="btn btn-primary" id="current_loc_btn" >Use My Location</button>
		                            </span>
	                         	</div>
                         	</div>

                         	<div id="map"></div>
                            
                        </div>
                    </fieldset>

						
					<h3>Previous History</h3>
                    <fieldset>
                        <h2>Previous History (Optional)</h2>
                        <p class="desc">Please enter your infomation and proceed to next step so we can complete your account</p>
                        <div class="fieldset-content">

                            <div class="form-group">
                                <label for="file" class="form-label">Previous Report File (Optioanl)</label>
                                <input style="height: 45px;" class="form-control" type="file" name="file" id="file" />
                                <span class="text-input">Please attach pdf if any</span>
                            </div>

                            <div class="form-group">
                                <label for="file" class="form-label">Images of house (Optioanl)</label>
                                <input style="height: 45px;" class="form-control" type="file" name="file" id="file" />
                                <span class="text-input">Please attach images with 4 dimensions of the house (Maximum 4)</span>
                            </div>
                            
                        </div>
                    </fieldset>

                    <h3>Payment Setup</h3>
                    <fieldset>
                        <h2>Payment Setup</h2>
                        <p class="desc">Set up your money limit to reach the future plan</p>
                        <div class="fieldset-content">
                            <form role="form">
			                    <div class="form-group">
			                        <label for="cardNumber">
			                            CARD NUMBER</label>
			                        <div class="input-group">
			                            <input type="text" class="form-control" id="cardNumber" placeholder="Valid Card Number"
			                                required autofocus />
			                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
			                        </div>
			                    </div>
			                    <div class="row">
			                        <div class="col-xs-7 col-md-7">
			                            <div class="form-group">
			                                <label for="expityMonth">
			                                    EXPIRY DATE</label>
			                                <div class="row">
			                                	<div class="col-xs-6 col-lg-6 pl-ziro">
				                                    <input type="text" class="form-control" id="expityMonth" placeholder="MM" required />
				                                </div>
				                                <div class="col-xs-6 col-lg-6 pl-ziro">
				                                    <input type="text" class="form-control" id="expityYear" placeholder="YY" required />
				                                </div>
			                                </div>
			                            </div>
			                        </div>
			                        <div class="col-xs-5 col-md-5 pull-right">
			                            <div class="form-group">
			                                <label for="cvCode">
			                                    CV CODE</label>
			                                <input type="password" class="form-control" id="cvCode" placeholder="CV" required />
			                            </div>
			                        </div>
			                    </div>
		                    </form>

		                    <div class="row mt-5">
		                    	<div class="col-12">
		                    		<h5 class="mb-3">Download Our Sample Report</h5>
                                	<button class="site-btn sb-dark"><i class="fa fa-download mr-2"></i> Download</button>
		                    	</div>
		                    </div>
                        </div>
                    </fieldset>
                </div>
            </form>
        </div>

    </div>
 

@endsection



@section('scripts')
<script src="{{ url('theme/survey/') }}/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="{{ url('theme/survey/') }}/vendor/jquery-validation/dist/additional-methods.min.js"></script>
<script src="{{ url('theme/survey/') }}/vendor/jquery-steps/jquery.steps.min.js"></script>
<script src="{{ url('theme/survey/') }}/vendor/minimalist-picker/dobpicker.js"></script>
<script src="{{ url('theme/survey/') }}/vendor/nouislider/nouislider.min.js"></script>
<script src="{{ url('theme/survey/') }}/vendor/wnumb/wNumb.js"></script>
{{-- <script src="{{ url('theme/survey/') }}/js/main.js"></script> --}}


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqqhqN5q545cx57GD5ht6JVidUQuuGd34&sensor=false&v=3&libraries=geometry,places&callback=initAutocomplete" async defer></script>
<script type="text/javascript">
	(function($) {



    var form = $("#signup-form");
    form.validate({
        errorPlacement: function errorPlacement(error, element) {
            element.before(error);
        },
        rules: {
            email: {
                email: true
            }
        },
        onfocusout: function(element) {
            $(element).valid();
        },
    });
    form.children("div").steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "fade",
        stepsOrientation: "vertical",
        titleTemplate: '<div class="title"><span class="step-number">#index#</span><span class="step-text">#title#</span></div>',
        labels: {
            previous: 'Previous',
            next: 'Next',
            finish: 'Finish',
            current: ''
        },
        onStepChanging: function(event, currentIndex, newIndex) {
            if (currentIndex === 0) {
                form.parent().parent().parent().append('<div class="footer footer-' + currentIndex + '"></div>');
            }
            if (currentIndex === 1) {
                form.parent().parent().parent().find('.footer').removeClass('footer-0').addClass('footer-' + currentIndex + '');
            }
            if (currentIndex === 2) {
                form.parent().parent().parent().find('.footer').removeClass('footer-1').addClass('footer-' + currentIndex + '');
            }
            if (currentIndex === 3) {
                form.parent().parent().parent().find('.footer').removeClass('footer-2').addClass('footer-' + currentIndex + '');
            }
            // if(currentIndex === 4) {
            //     form.parent().parent().parent().append('<div class="footer" style="height:752px;"></div>');
            // }
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function(event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function(event, currentIndex) {
        	window.location.href = "{{ route('thanks') }}";
            // alert('Submited');
        },
        onStepChanged: function(event, currentIndex, priorIndex) {

            return true;
        }
    });

    jQuery.extend(jQuery.validator.messages, {
        required: "",
        remote: "",
        email: "",
        url: "",
        date: "",
        dateISO: "",
        number: "",
        digits: "",
        creditcard: "",
        equalTo: ""
    });

    $.dobPicker({
        daySelector: '#birth_date',
        monthSelector: '#birth_month',
        yearSelector: '#birth_year',
        dayDefault: '',
        monthDefault: '',
        yearDefault: '',
        minimumAge: 0,
        maximumAge: 120
    });
    var marginSlider = document.getElementById('slider-margin');
    if (marginSlider != undefined) {
        noUiSlider.create(marginSlider, {
              start: [1100],
              step: 100,
              connect: [true, false],
              tooltips: [true],
              range: {
                  'min': 100,
                  'max': 2000
              },
              pips: {
                    mode: 'values',
                    values: [100, 2000],
                    density: 4
                    },
                format: wNumb({
                    decimals: 0,
                    thousand: '',
                    prefix: '$ ',
                })
        });
        var marginMin = document.getElementById('value-lower'),
	    marginMax = document.getElementById('value-upper');

        marginSlider.noUiSlider.on('update', function ( values, handle ) {
            if ( handle ) {
                marginMax.innerHTML = values[handle];
            } else {
                marginMin.innerHTML = values[handle];
            }
        });
    }
})(jQuery);
</script>
<script type="text/javascript">
	function initializeAutocompleteLocOne(){
	    var input = document.getElementById('current');
	    var options = {
	       //types: ['(regions)'],
	       componentRestrictions: {country: "PK"}
	    };
	    //var options = {}

	    var autocomplete = new google.maps.places.Autocomplete(input, options);

	    google.maps.event.addListener(autocomplete, 'place_changed', function() {
	      var place = autocomplete.getPlace();
	      var lat = place.geometry.location.lat();
	      var lng = place.geometry.location.lng();
	      var placeId = place.place_id;
	      // to set city name, using the locality param
	      var componentForm = {
	        locality: 'short_name',
	      };
	      for (var i = 0; i < place.address_components.length; i++) {
	        var addressType = place.address_components[i].types[0];
	        if (componentForm[addressType]) {
	          var city = place.address_components[i][componentForm[addressType]];
	          console.log('city', city);
	        }
	      }
	      console.log(lat,lng);
	     
	    });
	 }

    function showPosition(position) {
	  latlng = position.coords.latitude + ',' +  position.coords.longitude;
	  initMap(latlng);
		  
	}

	function initMap(latlng) {
		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 8,
			center: {lat: 40.731, lng: -73.997}
		});
		var geocoder = new google.maps.Geocoder;
		var infowindow = new google.maps.InfoWindow;
		geocodeLatLng(geocoder, map, infowindow, latlng);
		
	}

	function geocodeLatLng(geocoder, map, infowindow, input) {
		var latlngStr = input.split(',', 2);
		var latlng = {lat: parseFloat(latlngStr[0]), lng: parseFloat(latlngStr[1])};
		geocoder.geocode({'location': latlng}, function(results, status) {
		  if (status === 'OK') {
			if (results[0]) {
			  document.getElementById("current").value =  results[0].formatted_address ;
			  
			} else {
			  window.alert('No results found');
			}
		  } else {
			window.alert('Geocoder failed due to: ' + status);
		  }
		});
	}

$(function() {
	$(document).ready(function () {

	    var x = document.getElementById("demo");

		$('#current_loc_btn').click(function(e){

			e.preventDefault();
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(showPosition);
			} else { 
				x.innerHTML = "Geolocation is not supported by this browser.";

			}
		});
	});
});

</script>
@endsection
