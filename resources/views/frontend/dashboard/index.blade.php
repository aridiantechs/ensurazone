@extends('frontend.layout.app')

@section('styles')
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
                        <h4 class="font-italic mb-4">Personal information</h4>
                        <div class="row mb-5">
                            <div class="col-6">
                                <label for="username" class="form-label mt-3">Name</label>
                                <input class="form-control" type="text" name="username" id="username" value="Zach M" />
                            </div>
                            <div class="col-6">
                                <label for="email" class="form-label mt-3">Email</label>
                                <input class="form-control" type="email" name="email" id="email" value="Admin@ensurazone.com" />
                            </div>
                            <div class="col-6">
                                <label for="phone" class="form-label mt-3">Phone</label>
                                <input class="form-control" type="text" name="phone" id="phone" value="+874 65441185" />
                            </div>
                            <div class="col-6">
                                <label for="phone" class="form-label mt-3">Password</label>
                                <input class="form-control" type="password" name="phone" id="phone" value="+874 65441185" />
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-12">
                                <button class="site-btn sb-dark">Update</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <h4 class="font-italic mb-4">My report</h4>
                        <div class="row mt-5 text-center">
                            <div class="col-6">
                                <h5 class="mb-3">Remote Assesment Report</h5>
                                <button class="site-btn sb-dark"><i class="fa fa-download mr-2"></i> Download</button>
                            </div>

                            <div class="col-6 border-left">
                                <h5 class="mb-3">Mitigation Plan Report</h5>
                                {{-- <button class="site-btn sb-dark"><i class="fa fa-download mr-2"></i> Download</button> --}}
                                <button class="site-btn sb-dark"><i class="fa fa-arrow-up mr-2"></i> Upgrade</button>
                            </div>
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
                        <div class="row">
                            <div class="col-6">
                                <div class="">
                                    <label for="username" class="form-label mt-3">Old Password</label>
                                    <input class="form-control" type="password" name="username" id="username" value="Zach M" />
                                </div>

                                <div class="">
                                    <label for="username" class="form-label mt-3">New Password</label>
                                    <input class="form-control" type="password" name="username" id="username" value="Zach M" />
                                </div>

                                <div class="">
                                    <label for="username" class="form-label mt-3">Confirm Password</label>
                                    <input class="form-control" type="password" name="username" id="username" value="Zach M" />
                                </div>

                                <button class="site-btn sb-dark mt-4">Update password</button>
                            </div>

                            <div class="col-6">
                                <h5 class="font-italic mb-4">Logout from account</h5>
                                <button class="site-btn sb-dark"><i class="fa fa-user mr-2"></i> Logout</button>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection