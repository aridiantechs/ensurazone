@extends('backend.layouts.app')
@section('meta')
<title>{{ app_name() }} | Dashboard</title>

@section('styles')
<link href="{{ asset('backend/assets/vendors/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
<style type="text/css">
.kt-checkbox.kt-checkbox--brand.kt-checkbox--solid > span {
    background: transparent;
    border: 2px solid #A5ABB1 !important;
}
td , th{
    border-right: 0 !important;
}
i.la.la-search-plus {
    color: #0601ff;
    font-size: 2.5rem !important;
}
a.btn.btn-sm.btn-clean.btn-icon.btn-icon-md {
    background: #5867dd;
}
a.btn.btn-sm.btn-clean.btn-icon.btn-icon-md i{
    color: #ffffff;
}

.pac-container {
    background-color: #FFF;
    z-index: 9999 !important;
    position: fixed;
    display: inline-block;
    float: left;
}

.error{
    color: red;
}
</style>

<link href="{{ url('/') }}/backend/assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
   <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title jumper-primary-title">
                    Inquiries
                </h3>
            </div>
            
        </div>
        <div class="kt-portlet__body">
                
            <div class="kt-portlet__body">
                <!--begin: Datatable -->
                <table class="table table-striped- table-hover table-checkable" id="kt_table_2">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $key => $user)
                            @if ($user->remote_assessment()->exists())
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{ $user->name ?? '' }}</td>
                                    <td>{{ $user->email ?? '' }}</td>
                                    <td style="max-width:300px">{{$user->remote_assessment()->exists() ? $user->remote_assessment->address1 : ''}}</td>
                                    <td>
                                        @php
                                            $status=$user->remote_assessment->status=='pending'?'primary':($user->remote_assessment->status=='in_process'?'success':($user->remote_assessment->status=='completed'?'warning':''));
                                        @endphp
                                        <span class="kt-badge kt-badge--{{$status}} kt-badge--inline kt-badge--pill" data-toggle="modal" data-target="#kt_modal_status">{{\Str::title(preg_replace('/[^A-Za-z0-9\-]/', ' ',$user->remote_assessment->status))}}</span>
                                    </td>
                                    <td>
                                        <span class="dropdown">
                                            <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                                            <i class="la la-ellipsis-h"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#enz_AssignContract"><i class="la la-edit"></i> Assign Contract</a>
                                                <a class="dropdown-item" href="#" name="remote_assess_update" data-raid="{{$user->remote_assessment->id}}" data-toggle="modal" data-target="#enz_updateInquiry"><i class="la la-edit"></i> Edit Details</a>
                                                <a class="dropdown-item" href="#" name="remote_assess_status" data-raid="{{$user->remote_assessment->id}}" data-toggle="modal" data-target="#kt_modal_status"><i class="la la-leaf"></i> Update Status</a>
                                                <a class="dropdown-item" name="gen_report_btn" data-raid="{{$user->remote_assessment->id}}" data-toggle="modal" data-target="#kt_scrollable_modal_1" href="#"><i class="la la-print"></i> Generate Report</a>
                                            </div>
                                        </span>
                                        <a href="{{ route('backend.inquiry-details',$user->remote_assessment->id) }}" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                        <i class="la la-eye"></i>
                                        </a>
                                        <a href="{{ route('inquiry-details') }}" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="modal" data-target="#enz_SendRequestToContractorsModal" title="Send email to contractors">
                                        <i class="la la-mail-forward"> </i>
                                        </a>
                                    </td>
                                
                                </tr>
                            @endif
                            
                        @endforeach
                        
                    </tbody>
                    
                </table>
                <!--end: Datatable -->
            </div>
        </div>
                    
    </div>
</div>


<div class="modal fade" id="kt_modal_status" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{route('backend.remote_assessment_status')}}" method="GET">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="kt-scroll" data-scroll="true" data-height="200">
                        <input type="hidden" name="ra_id">
                        <div class="form-group">
                            <label class="form-control-label">Status</label>
                            <select name="status" id="" class="form-control">
                                <option value="pending">Pending</option>
                                <option value="in_process">In Process</option>
                                <option value="completed">Completed</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Note</label>
                            <textarea class="form-control" id="" name="note" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="enz_updateInquiry" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            
            <form method="POST" action="{{route('backend.updateRA')}}" id="ra_update_form">
                @csrf
                <input type="hidden" name="ra_id">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Inquiry</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="kt-scroll" data-scroll="true" {{-- data-height="400" --}}>
                            {{-- <div class="form-group">
                                <label class="form-control-label">Name:</label>
                                <input type="text" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Email</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Phone</label>
                                <input type="text" class="form-control" />
                            </div> --}}

                            {{-- <div class="form-group">
                                <label for="file" class="form-label">Previous Report File (Optioanl)</label>
                                <input style="height: 45px;" class="form-control valid" type="file" name="file" id="file" aria-invalid="false">
                                <span class="text-input">Please attach pdf if any</span>
                            </div>

                            <div class="form-group">
                                <label for="file" class="form-label">Images of house (Optioanl)</label>
                                <input style="height: 45px;" class="form-control" type="file" name="file" id="file">
                                <span class="text-input">Please attach images with 4 dimensions of the house (Maximum 4)</span>
                            </div> --}}

                            <div class="form-group">
                                <label class="form-control-label">Location</label>
                                <div class="input-group">
                                    <input type="text" name="address1" id="current" required="" onFocus="initializeAutocompleteLocOne()" class="form-control" placeholder="PICKUP Current Location" aria-required="true" >
                                    {{-- <span class="input-group-btn">
                                        <button style="border-radius: unset;" type="button" class="btn btn-primary" id="current_loc_btn" >Use My Location</button>
                                    </span> --}}
                                </div>
                            </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="ra_update_btn">Update</button>
                </div>
            
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="enz_SendRequestToContractorsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Publish to Contractors</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="kt-scroll" data-scroll="true" data-height="400">
                    <form>
                        
                        <div class="form-group">
                            <label class="form-control-label">Subject</label>
                            <input type="text" class="form-control" value="Contract For Zach M" />
                        </div>
                        <div class="summernote"></div>
                        
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send Request</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="enz_AssignContract" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Assign Contract</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="kt-scroll" data-scroll="true" data-height="400">
                    <form>
                        
                        <div class="form-group">
                            <label class="form-control-label">Contractors</label>
                            <select class="form-control" name="" id="">
                                <option value="">Select Contractor</option>
                                <option value="">Contractor A</option>
                                <option value="">Contractor B</option>
                                <option value="">Contractor C</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Detail</label>
                            <div class="summernote"></div>
                        </div>
                        
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Assign</button>
            </div>
        </div>
    </div>
</div>


<!--begin::Modal-->
<div class="modal fade" id="kt_scrollable_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" action="{{route('backend.remote-assessment-findings')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="ra_id">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Generate Report</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="scroll scroll-pull" data-scroll="true" data-height="300">
                            {{-- <div class="form-group">
                                <label class="form-control-label">Name:</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Email:</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Groups:</label>
                                <div class="checkbox-list">
                                    <label class="checkbox">
                                    <input type="checkbox" checked="checked" />Management 
                                    <span></span></label>
                                    <label class="checkbox">
                                    <input type="checkbox" />Finance 
                                    <span></span></label>
                                    <label class="checkbox">
                                    <input type="checkbox" />IT Department 
                                    <span></span></label>
                                </div>
                            </div> --}}
                            <div class="form-group">
                                <label for="file" class="form-label">Report File</label>
                                <input style="height: 45px;" class="form-control" type="file" name="finding" id="finding" required/>
                                <span class="text-input">Please attach pdf if any</span>
                                @error('extension')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Message:</label>
                                <textarea class="form-control" rows="6" name="message" required></textarea>
                                @error('message')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                
            </form>
        </div>
    </div>
</div>
<!--end::Modal-->
@endsection


@section('scripts')
<!--begin::Page Vendors(used by this page) -->
    {{-- <script src="{{ asset('backend/assets/vendors/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script> --}}
<!--end::Page Vendors -->

<!--begin::Page Scripts(used by this page) -->
    <script src="{{ asset('backend/assets/js/demo1/pages/crud/datatables/extensions/select.js') }}" type="text/javascript"></script>
<!--end::Page Scripts -->

    <script src="{{ url('/') }}/backend/assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>

     <script>
         $(document).keypress(
            function(event){
                if (event.which == '13') {
                event.preventDefault();
                }
        });
        $(document).ready(function(){
            $('[name="remote_assess_status"],[name="remote_assess_update"],[name="gen_report_btn"]').click(function(e){
                $('[name="ra_id"]').val($(this).data('raid'));
                
            });

            @if($errors->has('extension') || $errors->has('message') || $errors->has('ra_id') )
                $('#kt_scrollable_modal_1').modal('toggle');
            @endif
        })

        $('.summernote').summernote({
            height: 150
        });
        
    </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqqhqN5q545cx57GD5ht6JVidUQuuGd34&sensor=false&v=3&libraries=geometry,places&callback=initAutocomplete" async defer></script>
<script type="text/javascript">
    var country,city,state,zipcode,address,lati,lngi;

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
	      lati = place.geometry.location.lat();
	      lngi = place.geometry.location.lng();
	      var placeId = place.place_id;
	      // to set city name, using the locality param
	      var componentForm = {
	        locality: 'short_name',
	      };
	      for (var i = 0; i < place.address_components.length; i++) {
				var addressType = place.address_components[i].types[0];
				if (componentForm[addressType]) {
					city = place.address_components[i][componentForm[addressType]];
				}
	
				if(addressType == 'country'){
					country = place.address_components[i]['long_name'];
				}
                if(addressType == "administrative_area_level_1"){
                    state = place.address_components[i]['long_name'];
                }
                if(addressType == "postal_code"){
                    zipcode = place.address_components[i]['long_name'];
                }
			}
	

          address = place['adr_address'];
	      console.log(lat,lng,place,city,state,zipcode,country);
	     
	    });
        
	 }

    
     $('#ra_update_form').submit(function(e) {
            
        $(this).append('<input type="hidden" name="state" value="'+ state +'" id="state">');
        $(this).append('<input type="hidden" name="zipcode" value="'+ zipcode +'" id="zipcode">');
        $(this).append('<input type="hidden" name="latitude" value="'+ lati +'" id="lat">');
        $(this).append('<input type="hidden" name="longitude" value="'+ lngi +'" id="long">');
        $(this).append('<input type="hidden" name="city" value="'+ city +'" id="city">');
        $(this).append('<input type="hidden" name="country" value="'+ country +'" id="country">');
        return true;
    });

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
        lati=latlng['lat'];lngi=latlng['lng'];
		geocoder.geocode({'location': latlng}, function(results, status) {
		  if (status === 'OK') {
			if (results[0]) {
                var componentForm = {
                    locality: 'short_name',
                };
                for (var i = 0; i < results[0].address_components.length; i++) {
                    var addressType = results[0].address_components[i].types[0];
                    if (componentForm[addressType]) {
                        city = results[0].address_components[i][componentForm[addressType]];
                    }
        
                    if(addressType == 'country'){
                        country = results[0].address_components[i]['long_name'];
                    }
                    if(addressType == "administrative_area_level_1"){
                        state = results[0].address_components[i]['long_name'];
                    }
                    if(addressType == "postal_code"){
                        zipcode = results[0].address_components[i]['long_name'];
                    }
                }
                console.log(country);
			    console.log(city);
			    console.log(state);
			    console.log(zipcode);
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