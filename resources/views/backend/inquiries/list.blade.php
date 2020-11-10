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
                    AGROTOX
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
                        <tr>
                            <td>1</td>
                            <td>Zach M</td>
                            <td>zach.mu43@gmail.com</td>
                            <td>
                                <h5 class="mt-4 text-dark">797 Saidpur Rd, Block B Satellite Town, Rawalpindi</h5>
                                <p>Punjab, Pakistan</p>
                            </td>
                            <td>
                                <span class="kt-badge kt-badge--primary kt-badge--inline kt-badge--pill">Pending</span>
                            </td>
                            <td>
                                <span class="dropdown">
                                    <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                                      <i class="la la-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                        <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#kt_scrollable_modal_1" href="#"><i class="la la-print"></i> Generate Report</a>
                                    </div>
                                </span>
                                <a href="{{ route('inquiry-details') }}" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                  <i class="la la-eye"></i>
                                </a>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Zach M</td>
                            <td>zach.mu43@gmail.com</td>
                            <td>
                                <h5 class="mt-4 text-dark">797 Saidpur Rd, Block B Satellite Town, Rawalpindi</h5>
                                <p>Punjab, Pakistan</p>
                            </td>
                            <td>
                                <span class="kt-badge kt-badge--primary kt-badge--inline kt-badge--pill">Pending</span>
                            </td>
                            <td>
                                <span class="dropdown">
                                    <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                                      <i class="la la-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                        <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#kt_scrollable_modal_1" href="#"><i class="la la-print"></i> Generate Report</a>
                                    </div>
                                </span>
                                <a href="{{ route('inquiry-details') }}" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                  <i class="la la-eye"></i>
                                </a>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Zach M</td>
                            <td>zach.mu43@gmail.com</td>
                            <td>
                                <h5 class="mt-4 text-dark">797 Saidpur Rd, Block B Satellite Town, Rawalpindi</h5>
                                <p>Punjab, Pakistan</p>
                            </td>
                            <td>
                                <span class="kt-badge kt-badge--primary kt-badge--inline kt-badge--pill">Pending</span>
                            </td>
                            <td>
                                <span class="dropdown">
                                    <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                                      <i class="la la-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                        <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#kt_scrollable_modal_1" href="#"><i class="la la-print"></i> Generate Report</a>
                                    </div>
                                </span>
                                <a href="{{ route('inquiry-details') }}" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                  <i class="la la-eye"></i>
                                </a>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Zach M</td>
                            <td>zach.mu43@gmail.com</td>
                            <td>
                                <h5 class="mt-4 text-dark">797 Saidpur Rd, Block B Satellite Town, Rawalpindi</h5>
                                <p>Punjab, Pakistan</p>
                            </td>
                            <td>
                                <span class="kt-badge kt-badge--primary kt-badge--inline kt-badge--pill">Pending</span>
                            </td>
                            <td>
                                <span class="dropdown">
                                    <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                                      <i class="la la-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                        <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#kt_scrollable_modal_1" href="#"><i class="la la-print"></i> Generate Report</a>
                                    </div>
                                </span>
                                <a href="{{ route('inquiry-details') }}" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                  <i class="la la-eye"></i>
                                </a>
                            </td>
                            
                        </tr>
                        
                        
                    </tbody>
                    
                </table>
                <!--end: Datatable -->
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
                <div class="scroll scroll-pull" data-scroll="true" data-height="300">
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
@endsection