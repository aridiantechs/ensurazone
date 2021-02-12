@if (!is_null($data['findings']))
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="single-talent mb-5" style="font-size: 1.6rem;">
                <img src="{{ asset('images/ensurazone2.png') }}" style="z-index: 2;
                opacity: 0.2;
                top: 15%;
                position: absolute;
                width: 86%;" alt="">
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
                            <td>{{$data['findings']->ground_proof->user->name ?? ''}}</td>
                        </tr>
                    </table>
                  </div>
                  <div class="col-xs-4 col-sm-4 col-md-4">
                    <table style="width:100%">
                        <tr>
                            <th>Customer ID</th>
                            <td>{{$data['findings']->ground_proof->user->customer_id ?? ''}}</td>
                        </tr>
                    </table>
                  </div>
                  <div class="col-xs-4 col-sm-4 col-md-4">
                    <table style="width:100%">
                        <tr>
                            <th>Assessment Date</th>
                            <td>{{$data['findings']->ground_proof->created_at ?? ''}}</td>
                        </tr>
                    </table>
                  </div>
                  <div class="col-xs-4 col-sm-4 col-md-4">
                    <table style="width:100%">
                        <tr>
                            <th>Contact#</th>
                            <td>{{$data['findings']->ground_proof->user->remote_assessment->phone ?? ''}}</td>
                        </tr>
                    </table>
                  </div>
                  <div class="col-xs-4 col-sm-4 col-md-4">
                    <table style="width:100%">
                        <tr>
                            <th>Email ID</th>
                            <td><a href="#">{{$data['findings']->ground_proof->user->email ?? ''}}</a></td>
                        </tr>
                    </table>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <table style="width:100%">
                        <tr>
                            <th>Address </th>
                            <td>{{$data['findings']->ground_proof->user->remote_assessment->address1 ?? ''}}</td>
                        </tr>
                    </table>
                  </div>
                </div>

                <div class="row mt-5">
                  <div class="col-md-12">
                    <h3 style="text-align: center"><b>Ground proof Assessment Report</b> </h3>
                  </div>
                </div>

                <div class="row mt-5">
                  <div class="col-md-12">
                    <table style="width: 100%">
                      <tr style="border: 1px solid;">
                        <th><h4 style="text-align: center"><b>Structure Assessment </b></h4></th>
                      </tr>
                    </table>
                  </div>
                  <div class="col-md-12">
                    <table style="width: 100%">
                      <tr>
                        <th style="border-left: 1px solid;"><h4 class="ml-3"><b>Vegetation </b></h4></th>
                        <th></th>
                        <th style="border-right: 1px solid;"></th>
                      </tr>
                      <tr>
                        <th style="border: 1px solid;"><h4 class="ml-3"><b>Inspected variables </b></h4></th>
                        <th style="border: 1px solid;"><h4 class="ml-3"><b>Site findings </b></h4></th>
                        <th style="border: 1px solid;"><h4 class="ml-3"><b>Recommendation </b></h4></th>
                      </tr>
                      <tr>
                        <th style="border: 1px solid;"><h4 class="ml-3"><b>Vegetation free area around 5ft from structure  </b></h4></th>
                        @php
                          $veg_remarks=$data['survey']->where('key','veg_remarks')->first();
                          /* dd($veg_remarks->value); */
                        @endphp
                        <th style="border: 1px solid;"><h4 class="ml-3"><b style="color: red">{{$veg_remarks->value}}</b></h4></th>
                        <th style="border: 1px solid;"><h4 class="ml-3">5ft area around the structure should be clear</h4></th>
                      </tr>
                      <tr>
                        <th style="border-left: 1px solid;"><h4 class="ml-3"><b>Combustible substance </b></h4></th>
                        <th></th>
                        <th style="border-right: 1px solid;"></th>
                      </tr>
                      <tr>
                        <th style="border: 1px solid;">
                          <table>
                            <tr>
                              <th style="width: 47%;"><h4 class="ml-3"><b>Presence of Combustible Substance 30ft. area around the structure  </b></h4>
                              </th>
                              <th style="border-left: 1px solid;">
                                <table>
                                  <tr style="border-bottom: 1px solid;"><th><h4 class="ml-3"><b>Logs/ firewood pile</b></h4></th></tr>
                                  <tr style="border-bottom: 1px solid;"><th><h4 class="ml-3"><b>Scrape </b></h4></th></tr>
                                  <tr style="border-bottom: 1px solid;"><th><h4 class="ml-3"><b>Flammable debris </b></h4></th></tr>
                                  {{-- <tr style="border-bottom: 1px solid;"><th><h4 class="ml-3"><b>Propane cylinder </b></h4></th></tr> --}}
                                  <tr style="border-bottom: 1px solid;"><th><h4 class="ml-3"><b>Wildgrass longer than 6” </b></h4></th></tr>
                                  <tr><th><h4 class="ml-3"><b>Presence of low limbed conifer </b></h4></th></tr>
                                </table>
                              </th>
                            </tr>
                          </table>
                        </th>
                        
                        <th style="border: 1px solid;">
                          @php
                            $logs_woodpile_value=$data['survey']->where('key','logs_woodpile_value')->first();
                            $scrape_value=$data['survey']->where('key','scrape_value')->first();
                            $flammable_value=$data['survey']->where('key','flammable_value')->first();
                            $wild_grass_value=$data['survey']->where('key','wild_grass_value')->first();
                            $conifer_value=$data['survey']->where('key','conifer_value')->first();
                          @endphp
                          <table>
                            <tr style="border-bottom: 1px solid;"><th><h4 class="ml-3"><b style="color: red">{{$logs_woodpile_value->value ?? 'Not Found'}} </b></h4></th></tr>
                            <tr style="border-bottom: 1px solid;"><th><h4 class="ml-3"><b style="color: red">{{$scrape_value->value ?? 'Not Found'}}</b></h4></th></tr>
                            <tr style="border-bottom: 1px solid;"><th><h4 class="ml-3"><b style="color: red">{{$flammable_value->value ?? 'Not Found'}}</b></h4></th></tr>
                            {{-- <tr style="border-bottom: 1px solid;"><th><h4 class="ml-3"><b style="color: red">Found </b></h4></th></tr> --}}
                            <tr style="border-bottom: 1px solid;"><th><h4 class="ml-3"><b style="color: red">{{$wild_grass_value->value ?? 'Not Found'}}</b></h4></th></tr>
                            <tr><th><h4 class="ml-3"><b style="color: red">{{$conifer_value->value ?? 'Not Found'}} </b></h4></th></tr>
                          </table>
                        </th>
                        <th style="border: 1px solid;"><h4 class="ml-3">*/There should not be any 30ft area around <br> */Propane (LPG) tanks should be kept have 10ft away from vegetation </h4></th>
                      </tr>
                      <tr>
                        <th style="border: 1px solid;"><h4 class="ml-3">Presence of Combustible Material on the structure </h4></th>
                        <th style="border: 1px solid;"><h4 class="ml-3">Not Found</h4></th>
                        <th style="border: 1px solid;"><h4 class="ml-3">Structure should not made of or should be  cleared  from all types of combustible material </h4></th>
                      </tr>
                      <tr>
                        <th style="border: 1px solid;">
                          <table>
                            <tr>
                              <th style="width: 47%;"><h4 class="ml-3"><b>Deposits of leaves and pine needle on </b></h4>
                              </th>
                              <th style="border-left: 1px solid;">
                                <table style="width: 100%">
                                  <tr style="border-bottom: 1px solid;height: 60px;"><th><h4 class="ml-3">Gutters</h4></th></tr>
                                  <tr style="border-bottom: 1px solid;;height: 60px;"><th><h4 class="ml-3">Porch </h4></th></tr>
                                  <tr style="border-bottom: 1px solid;;height: 60px;"><th><h4 class="ml-3"><b>Roofline </b></h4></th></tr>
                                  <tr style="height: 60px;"><th><h4 class="ml-3"><b>Deck</b></h4></th></tr>
                                </table>
                              </th>
                            </tr>
                          </table>
                        </th>
                        
                        <th style="border: 1px solid;">
                          @php
                            $Gutters_value=$data['survey']->where('key','Gutters_value')->first();
                            $roof_line_value=$data['survey']->where('key','roof_line_value')->first();
                            $porch_value=$data['survey']->where('key','porch_value')->first();
                            $deck_value=$data['survey']->where('key','deck_value')->first(); 
                          @endphp
                          <table>
                            <tr style="border-bottom: 1px solid;height: 60px;"><th><h4 class="ml-3">{{$Gutters_value->value ?? 'Not Found'}}</h4></th></tr>
                            <tr style="border-bottom: 1px solid;height: 60px;"><th><h4 class="ml-3">{{$roof_line_value->value ?? 'Not Found'}}</h4></th></tr>
                            <tr style="border-bottom: 1px solid;height: 60px;"><th><h4 class="ml-3"><b style="color: red">{{$porch_value->value ?? 'Not Found'}}</b></h4></th></tr>
                            <tr style="height: 60px;"><th><h4 class="ml-3"><b style="color: red">{{$deck_value->value ?? 'Not Found'}}</b></h4></th></tr>
                          </table>
                        </th>
                        <th style="border: 1px solid;"><h4 class="ml-3">Gutter, porch, roof-line and should be completely clear from the from the pine needle and leaves</h4></th>
                      </tr>
                      <tr>
                        <th style="border-left: 1px solid;"><h4 class="ml-3"><b>Screening </b></h4></th>
                        <th></th>
                        <th style="border-right: 1px solid;"></th>
                      </tr>
                      <tr>
                        <th style="border: 1px solid;">
                          <table>
                            <tr>
                              <th style="width: 47%;"><h4 class="ml-3"><b>Screen protection</b></h4>
                              </th>
                              <th style="border-left: 1px solid;">
                                <table style="width: 100%">
                                  <tr style="border-bottom: 1px solid;height: 60px;"><th><h4 class="ml-3">Attic </h4></th></tr>
                                  <tr style="border-bottom: 1px solid;height: 60px;"><th><h4 class="ml-3">Chimney  </h4></th></tr>
                                  <tr style="border-bottom: 1px solid;height: 60px;"><th><h4 class="ml-3"><b>Soffit vent </b></h4></th></tr>
                                  <tr style="height: 60px;"><th><h4 class="ml-3"><b>Foundation vent</b></h4></th></tr>
                                </table>
                              </th>
                            </tr>
                          </table>
                        </th>
                        
                        <th style="border: 1px solid;">
                          @php
                            $screen_attic_value=$data['survey']->where('key','screen_attic_value')->first();
                            $screen_soffit_value=$data['survey']->where('key','screen_soffit_value')->first();
                            $screen_foundation_value=$data['survey']->where('key','screen_foundation_value')->first();
                            $screen_chimney_value=$data['survey']->where('key','screen_chimney_value')->first(); 
                          @endphp
                          <table>
                            <tr style="border-bottom: 1px solid;height: 60px;"><th><h4 class="ml-3">{{$screen_attic_value->value ?? 'Not Found'}}</h4></th></tr>
                            <tr style="border-bottom: 1px solid;height: 60px;"><th><h4 class="ml-3">{{$screen_chimney_value->value ?? 'Not Found'}}</h4></th></tr>
                            <tr style="border-bottom: 1px solid;height: 60px;"><th><h4 class="ml-3"><b style="color: red">{{$screen_soffit_value->value ?? 'Not Found'}}</b></h4></th></tr>
                            <tr style="height: 60px;"><th><h4 class="ml-3"><b style="color: red">{{$screen_foundation_value->value ?? 'Not Found'}}</b></h4></th></tr>
                          </table>
                        </th>
                        <th style="border: 1px solid;"><h4 class="ml-3">There should be screens on attics, roofs and soffits and foundation vent (1/8 inch metal screening) </h4></th>
                      </tr>
                    </table>
                  </div>
                  {{-- Space Assessment Zone 1 --}}
                  <div class="col-md-12">
                    <table style="width: 100%">
                      <tr style="border: 1px solid;">
                        <th><h4 style="text-align: center"><b>Space Assessment  Zone1 </b></h4></th>
                      </tr>
                    </table>
                  </div>
                  <div class="col-md-12">
                    @php
                      $space_assess1_trees=$data['survey']->where('key','space_assess1_trees')->first();
                      $space_assess1_trees_distance=$data['survey']->where('key','space_assess1_trees_distance')->first();
                      $space_assess1_density=$data['survey']->where('key','space_assess1_density')->first();
                      $space_assess1_space_arrangement=$data['survey']->where('key','space_assess1_space_arrangement')->first(); 
                      $location=$data['survey']->where('key','location')->first();
                      $space_assess1_img=$data['survey']->where('key','space_assess1_img')->first();
                      $space_assess1_img_description=$data['survey']->where('key','space_assess1_img_description')->first();
                      $space_assess2_sme_comments=$data['survey']->where('key','space_assess2_sme_comments')->first();
                    @endphp
                    <table style="width: 100%">
                      <tr>
                        <th style="border-left: 1px solid;"><h4 class="ml-3"><b>Vegetation </b></h4></th>
                        <th></th>
                        <th style="border-right: 1px solid;"></th>
                      </tr>
                      <tr>
                        <th style="border: 1px solid;"><h4 class="ml-3">No. of trees </h4></th>
                        <th style="border: 1px solid;"><h4 class="ml-3">{{$space_assess1_trees->value ?? ''}}</h4></th>
                        <th style="border: 1px solid;"><h4 class="ml-3">Conifer free zone </h4></th>
                      </tr>
                      <tr>
                        <th style="border: 1px solid;"><h4 class="ml-3">Density of trees</h4></th>
                        <th style="border: 1px solid;"><h4 class="ml-3">{{$space_assess1_density->value ?? ''}}</h4></th>
                        <th style="border: 1px solid;"><h4 class="ml-3"><b></b></h4></th>
                      </tr>
                      <tr>
                        <th style="border: 1px solid;"><h4 class="ml-3">Distance of trees from the structure</h4></th>
                        <th style="border: 1px solid;"><h4 class="ml-3">{{$space_assess1_trees_distance->value ?? ''}}</h4></th>
                        <th style="border: 1px solid;"><h4 class="ml-3"><b></b></h4></th>
                      </tr>

                      <tr>
                        <th style="border: 1px solid;"><h4 class="ml-3"><b>Arrangement of trees</b></h4></th>
                        <th style="border: 1px solid;"><h4 class="ml-3"><b>{{$space_assess1_space_arrangement->value ?? ''}}</b></h4></th>
                        <th style="border: 1px solid;"><h4 class="ml-3"><b>Scattered apart by 10ft. recommended no conifer zone</b></h4></th>
                      </tr>
                      <tr>
                        <th style="border: 1px solid;"><h4 class="ml-3">Location(directions)</h4></th>
                        <th style="border: 1px solid;"><h4 class="ml-3"><b>{{$location->value ?? ''}}</b></h4></th>
                        <th style="border: 1px solid;"><h4 class="ml-3"><b></b></h4></th>
                      </tr>
                      <tr>
                        <th style="border: 1px solid;"><h4 class="ml-3">Photograph </h4></th>
                        <th style="border: 1px solid;"><h4 class="ml-3">{{$space_assess1_img_description->value ?? ''}}</h4></th>
                        <th style="border: 1px solid;text-align: center"><img class="p-2" src="{{asset('storage/uploads/uploadData/'.$space_assess1_img->value)}}" width="130" alt=""></th>
                      </tr>
                      <tr>
                        <th style="border: 1px solid;"><h4 class="ml-3">SME Recommendation for zone 1</h4></th>
                        <th style="border: 1px solid;"><h4 class="ml-3">{{$space_assess2_sme_comments->value ?? ''}}</h4></th>
                        <th style="border: 1px solid;"><h4 class="ml-3"></h4></th>
                      </tr>
                    </table>
                  </div>
                  {{-- Space Assessment Zone 2 --}}
                  <div class="col-md-12">
                    <table style="width: 100%">
                      <tr style="border: 1px solid;">
                        <th><h4 style="text-align: center"><b>Space Assessment  Zone2 </b></h4></th>
                      </tr>
                    </table>
                  </div>
                  <div class="col-md-12">
                    @php
                      $space_assess2_trees=$data['survey']->where('key','space_assess2_trees')->first();
                      $space_assess2_trees_density=$data['survey']->where('key','space_assess2_trees_density')->first();
                      $space_assess2_density=$data['survey']->where('key','space_assess2_density')->first();
                      $space_assess2_space=$data['survey']->where('key','space_assess2_space')->first(); 
                      $space_assess2_clumpsize=$data['survey']->where('key','space_assess2_clumpsize')->first();
                      $space_assess2_ladder_fuel=$data['survey']->where('key','space_assess2_ladder_fuel')->first();
                      $space_assess2_neighbour_vege=$data['survey']->where('key','space_assess2_neighbour_vege')->first();
                      $space_assess2_site_findings=$data['survey']->where('key','space_assess2_site_findings')->first();
                      $space_assess2_slope=$data['survey']->where('key','space_assess2_slope')->first();
                      $space_assess2_aspects=$data['survey']->where('key','space_assess2_aspects')->first();
                      $space_assess2_rock=$data['survey']->where('key','space_assess2_rock')->first();
                      $space_assess2_sme_comments=$data['survey']->where('key','space_assess2_sme_comments')->first();
                      $space_assess2_img=$data['survey']->where('key','space_assess2_img')->first();
                    @endphp
                    <table style="width: 100%">
                      <tr>
                        <th style="border-left: 1px solid;"><h4 class="ml-3"><b>Vegetation </b></h4></th>
                        <th></th>
                        <th style="border-right: 1px solid;"></th>
                      </tr>
                      <tr>
                        <th style="border: 1px solid;"><h4 class="ml-3">Neighborhood growth of</h4></th>
                        <th style="border: 1px solid;">
                          <table>
                            <tr>
                              <th><h4 class="ml-3">{{$space_assess2_neighbour_vege->value ?? ''}}</h4></th>
                            </tr>
                            {{-- <tr>
                              <th style="border-top: 1px solid;width: 50%;"><h4 class="ml-3">low limbed conifers</h4></th>
                            </tr> --}}
                          </table>
                        </th>
                        <th style="border: 1px solid;"><h4 class="ml-3">Linking Your Defensible Space with Neighbors For wildfire protection since </h4></th>
                      </tr>
                      <tr>
                        <th style="border: 1px solid;"><h4 class="ml-3">No. of trees</h4></th>
                        <th style="border: 1px solid;"><h4 class="ml-3">{{$space_assess2_trees->value ?? ''}}</h4></th>
                        <th style="border: 1px solid;"></th>
                      </tr>
                      <tr>
                        <th style="border: 1px solid;"><h4 class="ml-3">Density of trees</h4></th>
                        <th style="border: 1px solid;"><h4 class="ml-3">{{$space_assess2_trees_density->value ?? ''}} </h4></th>
                        <th style="border: 1px solid;"></th>
                      </tr>
                      <tr>
                        <th style="border: 1px solid;"><h4 class="ml-3"><b>Arrangement </b></h4></th>
                        <th style="border: 1px solid;"><h4 class="ml-3">{{$space_assess2_density->value ?? ''}} </h4></th>
                        <th style="border: 1px solid;"><h4>Clumps of 2 to 3 trees can make the space defensible </h4></th>
                      </tr>
                      <tr>
                        <th style="border: 1px solid;"><h4 class="ml-3"><b>Space among the trees </b></h4></th>
                        <th style="border: 1px solid;"><h4 class="ml-3">{{$space_assess2_space->value ?? ''}} </h4></th>
                        <th style="border: 1px solid;"><h4>Space should be >= 20-30ft</h4></th>
                      </tr>
                      <tr>
                        <th style="border: 1px solid;"><h4 class="ml-3"><b>Size of clump</b></h4></th>
                        <th style="border: 1px solid;"><h4 class="ml-3">{{$space_assess2_clumpsize->value ?? ''}}</h4></th>
                        <th style="border: 1px solid;"><h4>Size of the clump should be 2 to 3 trees </h4></th>
                      </tr>
                      <tr>
                        <th style="border: 1px solid;"><h4 class="ml-3"><b>Ladder fuel</b></h4></th>
                        <th style="border: 1px solid;"><h4 class="ml-3">{{$space_assess2_ladder_fuel->value ?? ''}}</h4></th>
                        <th style="border: 1px solid;"><h4 class="ml-3">The branches of trees should be above 6ft high from the surface </h4></th>
                      </tr>
                      <tr>
                        <th style="border: 1px solid;"><h4 class="ml-3"><b>Photograph from the site</b></h4></th>
                        <th style="border: 1px solid;"><h4 class="ml-3">{{$space_assess2_site_findings->value ?? ''}}</h4></th>
                        <th style="border: 1px solid;text-align: center"><img class="p-2" src="{{asset('storage/uploads/uploadData/'.$space_assess2_img->value)}}" width="130" alt=""></th>
                      </tr>
                      <tr>
                        <th style="border-left: 1px solid;"><h4 class="ml-3"><b>Topography </b></h4></th>
                        <th></th>
                        <th style="border-right: 1px solid;"></th>
                      </tr>

                      <tr>
                        <th style="border: 1px solid;"><h4 class="ml-3">Aspects</h4></th>
                        <th style="border: 1px solid;"><h4 class="ml-3">{{$space_assess2_aspects->value ?? ''}}</h4></th>
                        <th style="border: 1px solid;" rowspan="3"><h4 class="ml-3">The defensible space form the structure till zone-2 needs to be increased in case of steep slope Incorporate artificial barriers to improve resistance frim fire </h4></th>
                      </tr>
                      <tr>
                        <th style="border: 1px solid;"><h4 class="ml-3"><b>Slope</b></h4></th>
                        <th style="border: 1px solid;"><h4 class="ml-3">{{$space_assess2_slope->value ?? ''}}</h4></th>
                      </tr>
                      <tr>
                        <th style="border: 1px solid;">
                          <table>
                            <tr>
                              <th style="width: 47%;"><h4 class="ml-3"><b>Types of barriers</b></h4>
                              </th>
                              <th style="border-left: 1px solid;">
                                <table style="width: 100%">
                                  <tr style="border-bottom: 1px solid;"><th><h4 class="ml-3">Rock </h4></th></tr>
                                  <tr style="border-bottom: 1px solid;"><th><h4 class="ml-3">Stream  </h4></th></tr>
                                  <tr style="border-bottom: 1px solid;"><th><h4 class="ml-3">Road</h4></th></tr>
                                  <tr style="border-bottom: 1px solid;"><th><h4 class="ml-3">Pond </h4></th></tr>
                                  <tr><th><h4 class="ml-3">Open meadow</h4></th></tr>
                                </table>
                              </th>
                            </tr>
                          </table>
                        </th>
                        <th style="border: 1px solid;"><h4 class="ml-3">{{$space_assess2_rock->value ?? ''}}</h4></th>
                      </tr>
                      <tr>
                        <th style="border: 1px solid;"><h4 class="ml-3"><b>SME recommendation for zone 2</b></h4></th>
                        <th style="border: 1px solid;"><h4 class="ml-3">{{$space_assess2_sme_comments->value ?? ''}}</h4></th>
                        <th style="border: 1px solid;"><h4></h4></th>
                      </tr>
                    </table>
                  </div>
                </div>
                
                
            </div>
            
        </div>
    </div>
    
@else
    <h4 style="text-align: center">No data found</h4>
@endif
