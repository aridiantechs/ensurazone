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
@endsection

@section('content')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
   <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title jumper-primary-title">
                    Users List <a  class="badge badge-primary" href="#" data-toggle="modal" data-target="#enz_addOrUpdateUser">Add User</a>
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
                            <th>Role</th>
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
                                <td>
                                    @foreach ($user->roles as $role)
                                        {{ $role->name ?? '' }}
                                        <br>
                                    @endforeach
                                </td>
                                <td>
                                    <span class="kt-badge kt-badge--{{$user->status==1?'primary':'danger'}} kt-badge--inline kt-badge--pill" data-toggle="modal" data-target="#kt_modal_status">{{$user->status==1?'Active':'Inactive'}}</span>
                                </td>
                                <td>
                                    <span class="dropdown">
                                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                                          <i class="la la-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{route('backend.user.edit',$user->id)}}"><i class="la la-edit"></i> Edit Details</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#kt_modal_status"><i class="la la-leaf" data-toggle="modal" data-target="#kt_modal_status"></i> Update Status</a>
                                            <a class="dropdown-item" href="#" name="delete_user" data-userid="{{$user->id}}" data-toggle="modal" data-target="#kt_modal_status"
                                                 data-toggle="modal" data-target="#kt_modal_status"><i class="la la-trash"> </i> Delete</a>
    
                                        </div>
                                    </span>
                                    
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
            <form action="{{route('backend.user.updateStatus')}}" method="GET">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="kt-scroll" data-scroll="true" data-height="200">
                            <input type="hidden" name="user_id">
                            <div class="form-group">
                                <label class="form-control-label">Status</label>
                                <select name="status" id="" class="form-control">
                                    <option value="0">Deactivate</option>
                                    <option value="1">Active</option>
                                </select>
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

<div class="modal fade" id="enz_addOrUpdateUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add/Edit User</h5>
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

<!--begin::Modal-->
<div class="modal fade" id="kt_scrollable_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Scrollable Modal Content</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                
                    <form>
                        <div class="form-group">
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
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Message:</label>
                            <textarea class="form-control" rows="6"></textarea>
                        </div>
                    </form>
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="kt_blockui_4_1">Submit</button>
            </div>
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

<script>
    $(document).ready(function(){
        $('[name="delete_user"]').click(function(e){
            $('[name="user_id"]').val($(this).data('userid'));
            
        });
    })
</script>
@endsection