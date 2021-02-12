@if (!is_null($finding))
    <div class="row">
        <div class="col-md-10 mx-auto col-centered">
            <div class="single-talent mb-5" style="font-size: 1.6rem;">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <table>
                        <tr><th>Ensurazone</th></tr>
                        <tr><th>401 Ryland St,Suite 100</tr>
                        <tr><th>Reno,NV 89502, US</tr>
                        <tr><th><i class="fa fa-phone"></i> 775-737-1355</tr>
                        <tr><th><a href="#">contact@ensurazone.com</a></tr>
                        <tr><th><a href="#">www.ensurazone.aridiantechnologies.com</a></tr>
                        </table>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <img src="{{ asset('images/ensurazone2.png') }}" style="width: 175px;float: right;">
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-xs-4 col-sm-4 col-md-4">
                    <table style="width:100%">
                        <tr>
                            <th>Name</th>
                            <td>{{$finding->remote_assessment->user->name ?? ''}}</td>
                        </tr>
                    </table>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                    <table style="width:100%">
                        <tr>
                            <th>Customer ID</th>
                            <td>{{$finding->remote_assessment->user->customer_id ?? ''}}</td>
                        </tr>
                    </table>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                    <table style="width:100%">
                        <tr>
                            <th>Assessment Date</th>
                            <td>{{$finding->remote_assessment->created_at ?? ''}}</td>
                        </tr>
                    </table>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                    <table style="width:100%">
                        <tr>
                            <th>Contact#</th>
                            <td>{{$finding->remote_assessment->phone ?? ''}}</td>
                        </tr>
                    </table>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                    <table style="width:100%">
                        <tr>
                            <th>Email ID</th>
                            <td><a href="#">{{$finding->remote_assessment->email ?? ''}}</a></td>
                        </tr>
                    </table>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <table style="width:100%">
                        <tr>
                            <th>Address </th>
                            <td>{{$finding->remote_assessment->address1 ?? ''}}</td>
                        </tr>
                    </table>
                    </div>
                </div>

                <div class="row mt-4">
                <div class="col-md-12">
                    <h3 style="text-align: center"><b>Remote Assessment Report</b> </h3>
                </div>
                </div>

                <div class="row">
                <div class="col-md-12">
                    <h3>Satellite view of the site </h3>
                </div>
                <div class="col-md-12">
                    <img src="{{asset('storage/uploads/uploadData/'.$finding->file)}}" style="width: 100%" alt="">
                </div>
                </div>

                <div class="row mt-5">
                <div class="col-md-12">
                    <table>
                    <tr>
                        <th style="width:35%">Zone 1:</th>
                        <th>30ft area around the structure  </th>
                    </tr>
                    </table>
                </div>
                </div>

                <div class="row mt-5">
                <div class="col-md-12">
                    <table>
                    <tr><td><em>Typed information by the SME regarding the <span style="color: red">X - trees to be removed</span> including the location of the trees </em></td></tr>
                    <tr><td><em> Typed information by the SME regarding the <span style="color: green">O - trees to be kept</span> including the location of the trees.  </em></td></tr>
                    </table>
                </div>
                </div>

                <div class="row mt-5">
                <div class="col-md-12">
                    <table>
                    <tr>
                        <th style="width:35%">Zone 2:</th>
                        <th>100ft area around the structure  </th>
                    </tr>
                    </table>
                </div>
                </div>

                <div class="row mt-5">
                <div class="col-md-12">
                    <table>
                    <tr><td><em>Typed information by the SME regarding the <span style="color: red">X - trees to be removed</span> including the location of the trees </em></td></tr>
                    <tr><td><em> Typed information by the SME regarding the <span style="color: green">O - trees to be kept</span> including the location of the trees.  </em></td></tr>
                    </table>
                </div>
                </div>

                <div class="row mt-5">
                <div class="col-md-12">
                    <table>
                    <tr>{!!$finding->message!!}</tr>
                    </table>
                </div>
                </div>

                <div class="row mt-5">
                <div class="col-md-12">
                    <table><tr><th><em>  * Please consult ground proof assessment consultant for detailed recommendation  </em></th></tr></table>
                </div>
                </div>
                
            </div>
            
        </div>
    </div>
    
@else
    <h4 style="text-align: center">No data found</h4>
@endif
