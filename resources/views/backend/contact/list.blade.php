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
                    Contacts
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
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contact as $key => $item)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{ $item->name ?? '' }}</td>
                                <td>{{ $item->email ?? '' }}</td>
                                <td>{{ $item->subject ?? '' }}</td>
                                <td>{{ $item->message ?? '' }}</td>
                                <td>
                                    <span class="dropdown">
                                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                                          <i class="la la-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{route('backend.contact.edit',$item->id)}}"><i class="la la-edit"></i> Edit Details</a>
                                            <a class="dropdown-item" href="{{route('backend.contact.delete',$item->id)}}"><i class="la la-trash"> </i> Delete</a>
    
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
        $('[name="delete_user"],[name="update_status"]').click(function(e){
            $('[name="user_id"]').val($(this).data('userid'));
            
        });
    })
</script>
@endsection