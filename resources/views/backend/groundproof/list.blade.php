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
</style>

 <link href="{{ url('/') }}/backend/assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
   <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title jumper-primary-title">
                    Mitigration Inquiries
                </h3>
            </div>
            
        </div>
        <div class="kt-portlet__body">
                
            <div class="kt-portlet__body">
                <!--begin: Datatable -->
                <table class="table table-striped- table-hover table-checkable" id="kt_table_2">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $key => $user)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{ $user->name ?? '' }}</td>
                                <td>{{ $user->email ?? '' }}</td>
                                <td style="max-width:300px">{{$user->remote_assessment()->exists() ? $user->remote_assessment->address1 : ''}}</td>
                                <td>
                                    @php
                                        $status=$user->ground_proof->status=='pending'?'primary':($user->ground_proof->status=='in_process'?'success':($user->ground_proof->status=='completed'?'warning':''));
                                    @endphp
                                    <span class="kt-badge kt-badge--{{$status}} kt-badge--inline kt-badge--pill" data-toggle="modal" data-target="#kt_modal_status">{{\Str::title(preg_replace('/[^A-Za-z0-9\-]/', ' ',$user->ground_proof->status))}}</span>
                                </td>
                                <td>
                                    <span class="dropdown">
                                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                                        <i class="la la-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            @if (auth()->user()->hasRole('superadmin'))
                                                <a class="dropdown-item" name="ground_proof_assign" data-gpid="{{$user->ground_proof->id}}" href="#" data-toggle="modal" data-target="#enz_AssignContract"><i class="la la-edit"></i> Assign Contract</a>
                                            @endif
                                            
                                            {{-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#enz_updateInquiry"><i class="la la-edit"></i> Edit Details</a> --}}
                                            <a class="dropdown-item" href="{{ route('backend.ground-proof-survey',$user->ground_proof->id) }}"><i class="la la-leaf"></i> Update Status</a>
                                            <a class="dropdown-item" name="gen_report_btn" data-gpid="{{$user->ground_proof->id}}" data-toggle="modal" data-target="#kt_scrollable_modal_1" href="#"><i class="la la-print"></i> Generate Report</a>
                                        </div>
                                    </span>
                                    <a href="{{ route('backend.inquiry-details',$user->remote_assessment->id) }}" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                    <i class="la la-eye"></i>
                                    </a>
                                    <a href="{{ route('inquiry-details') }}" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="modal" data-target="#enz_SendRequestToContractorsModal" title="Send email to contractors">
                                    <i class="la la-mail-forward"> </i> 
                                </td>
                                
                            </tr>
                        
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
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="kt-scroll" data-scroll="true" data-height="200">
                    <form>
                      
                        <div class="form-group">
                            <label class="form-control-label">Status</label>
                             <select name="" id="" class="form-control">
                                 <option value="pending">Pending</option>
                                 <option value="in_process">In Process</option>
                                 <option value="completed">Completed</option>
                             </select>
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Note</label>
                             <textarea class="form-control" id="" cols="30" rows="3"></textarea>
                        </div>

                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="enz_updateInquiry" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Inquiry</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="kt-scroll" data-scroll="true" data-height="400">
                    <form>
                        
                        <div class="form-group">
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
                        </div>

                        <div class="form-group">
                            <label for="file" class="form-label">Previous Report File (Optioanl)</label>
                            <input style="height: 45px;" class="form-control valid" type="file" name="file" id="file" aria-invalid="false">
                            <span class="text-input">Please attach pdf if any</span>
                        </div>

                        <div class="form-group">
                            <label for="file" class="form-label">Images of house (Optioanl)</label>
                            <input style="height: 45px;" class="form-control" type="file" name="file" id="file">
                            <span class="text-input">Please attach images with 4 dimensions of the house (Maximum 4)</span>
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Location</label>
                             <textarea class="form-control" id="" cols="30" rows="2"></textarea>
                        </div>

                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="enz_AssignContract" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <form method="POST" action="{{route('backend.ground-proof.assign')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="gp_id" value="{{old('gp_id') ?? ''}}">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Assign Contract</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="kt-scroll" data-scroll="true" data-height="400">
                        <div class="form-group">
                            <label class="form-control-label">Contractors</label>
                            <select class="form-control" name="contractor" id="">
                                <option value="">Select Contractor</option>
                                @foreach ($contractors as $contractor)
                                    <option value="{{$contractor->id}}">{{$contractor->name}}</option>
                                @endforeach
                                
                            </select>
                            @error('contractor')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Detail</label>
                            <textarea class="summernote" name="note_to_contractor"></textarea>
                            @error('note_to_contractor')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Assign</button>
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

<!--begin::Modal-->
<div class="modal fade" id="kt_scrollable_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" action="{{route('backend.ground-proof-findings')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="gp_id">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Generate Report</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="kt-scroll" data-scroll="true">
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
                        {{-- <div class="summernote"></div> --}}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Send Request</button>
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
            $('[name="remote_assess_status"],[name="gen_report_btn"],[name="ground_proof_assign"]').click(function(e){
                $('[name="gp_id"]').val($(this).data('gpid'));
                
            });

            @if($errors->has('extension') || $errors->has('message') || $errors->has('gp_id') )
                $('#kt_scrollable_modal_1').modal('toggle');
            @endif
        })

        $('.summernote').summernote({
            height: 150
        });
        
    </script>
@endsection