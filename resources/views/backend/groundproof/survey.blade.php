@extends('backend.layouts.app')


@section('meta')
<title>{{ app_name() }} | Dashboard</title>
@endsection


@section('styles')
<style type="text/css">
.switch-field {
  display: flex;
  margin-bottom: 36px;
  overflow: hidden;
}

.switch-field input {
  position: absolute !important;
  clip: rect(0, 0, 0, 0);
  height: 1px;
  width: 1px;
  border: 0;
  overflow: hidden;
}

.switch-field label {
    background-color: #f2f5f9;
    color: rgba(0, 0, 0, 0.6);
    font-size: 14px;
    line-height: 1;
    text-align: center;
    padding: 10px 18px;
    margin-right: -1px;
    border: 1px solid rgba(0, 0, 0, 0.2);
    /* box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1); */
    /* transition: all 0.1s ease-in-out; */
}

.switch-field label:hover {
  cursor: pointer;
}

.switch-field input:checked + label {
  background-color: #ffffff;
  box-shadow: none;
  border-color: #9a9a9a;
  z-index: 99;
}

.switch-field label:first-of-type {
  border-radius: 4px 0 0 4px;
}

.switch-field label:last-of-type {
  border-radius: 0 4px 4px 0;
}
textarea{
  width: 100%;
  background: #f2f5f9;
  border-color: #c2c4c7;
  border-radius: 5px;
}
.mt-4.text-md-left.str-constraints-box {
  border-left: 2px solid #959595;
  padding: 15px 0 2px 15px;
}
</style>
@endsection
@section('page_title')

@endsection

@section('content')


  <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

      <div class="kt-container ">
         <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title jumper-primary-title">
                     Ground Proof Assessment Survey 
                </h3>
            </div>
            
        </div>
        <div class="kt-portlet__body">
                
            <div class="kt-portlet__body">
                <!--begin: Datatable -->
                <form action="{{route('backend.groundproof-inquiries.store')}}" method="POST">
                  @csrf

                  <input type="hidden" name="gp_id" value="{{$gp->id}}">
                  <h2>Structure Assessment Zone 1</h2>
                  <hr>
                  <h5>Vegetation</h5>

                  
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <h5>Distance from structure</h5>
                        <div class="kt-radio-list">
                          <label class="kt-radio">
                            <input type="radio" name="distance_from_structure" value="5 feet apart from the structure"> 5 feet apart from the structure
                            <span></span>
                          </label>
                          <label class="kt-radio">
                            <input type="radio" name="distance_from_structure" value="less than 5 feet"> less than 5 feet
                            <span></span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                           <h5 class="form-control-label">Density</h5>
                           <select name="density" class="form-control" id="">
                             <option value="low">Low</option>
                             <option value="medium">Medium</option>
                             <option value="high">High</option>
                           </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <h5>Arrangement</h5>
                        <div class="kt-radio-list">
                          <label class="kt-radio">
                            <input type="radio" name="arrangement" value="continues"> Continues
                            <span></span>
                          </label>
                          <label class="kt-radio">
                            <input type="radio" name="arrangement" value="clump"> Clump
                            <span></span>
                          </label>
                          <label class="kt-radio">
                            <input type="radio" name="arrangement" value="apart"> Apart
                            <span></span>
                          </label>
                          <label class="kt-radio">
                            <input type="radio" name="arrangement" value="away"> Away
                            <span></span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <h5>Number of trees surface</h5>
                         <input type="number" min="0" class="form-control" name="trees"/>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                           <h5 class="form-control-label">Location</h5>
                            <div class="kt-radio-list">
                              <label class="kt-radio">
                                <input type="radio" name="location" value="east"> East
                                <span></span>
                              </label>
                              <label class="kt-radio">
                                <input type="radio" name="location" value="west"> West
                                <span></span>
                              </label>
                              <label class="kt-radio">
                                <input type="radio" name="location" value="north"> North
                                <span></span>
                              </label>
                              <label class="kt-radio">
                                <input type="radio" name="location" value="south"> South
                                <span></span>
                              </label>
                              <label class="kt-radio">
                                <input type="radio" name="location" value="northwest"> Northwest
                                <span></span>
                              </label>
                              <label class="kt-radio">
                                <input type="radio" name="location" value="northeast"> Northeast
                                <span></span>
                              </label>
                              <label class="kt-radio">
                                <input type="radio" name="location" value="southeast"> Southeast
                                <span></span>
                              </label>
                              <label class="kt-radio">
                                <input type="radio" name="location" value="southwest"> Southwest
                                <span></span>
                              </label>
                            </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <h5>Height of grass from the</h5>
                         <input type="number" class="form-control" name="grass"/>
                      </div>
                    </div>
                  </div>

                  

                  <div class="row">
                    <div class="col-md-4">
                       <div class="form-group">
                            <h5 class="form-control-label">Presence of Combustible Substance</h5>
                            <div class="kt-checkbox-list">
                              <label class="kt-checkbox">
                                <input type="checkbox" name="combustibles[]" value="Logs/Fire"> Logs/Fire woodpile
                                <span></span>
                              </label>
                              <label class="kt-checkbox">
                                <input type="checkbox" name="combustibles[]" value="Scrape"> Scrape
                                <span></span>
                              </label>
                              <label class="kt-checkbox">
                                <input type="checkbox" name="combustibles[]" value="Flammable Debris"> Flammable debris
                                <span></span>
                              </label>
                              <label class="kt-checkbox">
                                <input type="checkbox" name="combustibles[]" value="Wild grass longer than of 6 inches"> Wild grass longer than of 6 inches
                                <span></span>
                              </label>
                              <label class="kt-checkbox">
                                <input type="checkbox" name="combustibles[]" value="Presence of conifer(low limbed)"> Presence of conifer(low limbed)
                                <span></span>
                              </label>
                            </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                            <h5 class="form-control-label">Deposit of leaves</h5>
                            <div class="kt-checkbox-list">
                              <label class="kt-checkbox">
                                <input type="checkbox" name="leave_deposits[]" value="Gutters"> Gutters
                                <span></span>
                              </label>
                              <label class="kt-checkbox">
                                <input type="checkbox" name="leave_deposits[]" value="oof-line"> Roof-line
                                <span></span>
                              </label>
                              <label class="kt-checkbox">
                                <input type="checkbox" name="leave_deposits[]" value="Porch"> Porch
                                <span></span>
                              </label>
                              <label class="kt-checkbox">
                                <input type="checkbox" name="leave_deposits[]" value="Deck"> Deck
                                <span></span>
                              </label>
                              
                            </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <h5>Presence of Combustible</h5>
                         <input type="text" class="form-control" name="combustible_presence"/>
                      </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-md-4">
                       <div class="form-group">
                            <h5 class="form-control-label">Screening</h5>
                            <div class="kt-checkbox-list">
                              <label class="kt-checkbox">
                                <input type="checkbox" name="screening[]" value="Attic"> Attic
                                <span></span>
                              </label>
                              <label class="kt-checkbox">
                                <input type="checkbox" name="screening[]" value="Soffit"> Soffit
                                <span></span>
                              </label>
                              <label class="kt-checkbox">
                                <input type="checkbox" name="screening[]" value="Foundation vent"> Foundation vent
                                <span></span>
                              </label>
                               
                            </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                  
                    </div>
                    <div class="col-md-4"></div>
                  </div>


                  <h2>Space Assessment Zone 2</h2>
                  <hr>
                   
                  
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <h5>Density of trees</h5>
                        <div class="kt-radio-list">
                          <label class="kt-radio">
                            <input type="radio" name="density_of_trees" value="Trees scattered by 20 feet distance"> Trees scattered by 20 feet distance.
                            <span></span>
                          </label>
                          <label class="kt-radio">
                            <input type="radio" name="density_of_trees" value="Trees scattered by less than or equal to 10 feet distance"> Trees scattered by less than or equal to 10 feet distance.
                            <span></span>
                          </label>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-md-4">
                      <div class="form-group">
                        <h5>Arrangement</h5>
                        <div class="kt-radio-list">
                          <label class="kt-radio">
                            <input type="radio" name="space_arrangement" value="Continues"> Continues
                            <span></span>
                          </label>
                          <label class="kt-radio">
                            <input type="radio" name="space_arrangement" value="Clumps"> Clumps
                            <span></span>
                          </label>
                          <label class="kt-radio">
                            <input type="radio" name="space_arrangement" value="Scattered"> Scattered
                            <span></span>
                          </label>
                          <label class="kt-radio">
                            <input type="radio" name="space_arrangement" value="No Trees"> No Trees
                            <span></span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                       
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <h5>Size of clump</h5>
                        <div class="kt-radio-list">
                          <label class="kt-radio">
                            <input type="radio" name="clump_size" value="More than 3 trees"> More than 3 trees
                            <span></span>
                          </label>
                          <label class="kt-radio">
                            <input type="radio" name="clump_size" value="Less than 3 trees"> Less than 3 trees
                            <span></span>
                          </label>
                          
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                       <div class="form-group">
                          <h5>Ladder fuel</h5>
                          <div class="kt-radio-list">
                             <label class="kt-radio">
                                <input type="radio" name="ladder_fuel" value="Branch of trees at or under the 6ft height of a tree"> Branch of trees at or under the 6ft height of a tree
                                <span></span>
                              </label>
                              <label class="kt-radio">
                                <input type="radio" name="ladder_fuel" value="Branch of trees above the 6ft height of a tree"> Branch of trees above the 6ft height of a tree
                                <span></span>
                              </label>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                       
                    </div>
                  </div>

                  
                  <h3>Topography</h3>
                  <div class="row">
                    <div class="col-md-4">
                       <div class="form-group">
                            <h5 class="form-control-label">Slop</h5>
                            
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                            <h5 class="form-control-label">Types of Barier</h5>
                            <div class="kt-checkbox-list">
                              <label class="kt-checkbox">
                                <input type="checkbox" name="Barrier[]" value="Rocks"> Rocks
                                <span></span>
                              </label>
                              <label class="kt-checkbox">
                                <input type="checkbox" name="Barrier[]" value="Ponds"> Ponds
                                <span></span>
                              </label>
                              <label class="kt-checkbox">
                                <input type="checkbox" name="Barrier[]" value="Stream"> Stream
                                <span></span>
                              </label>
                              <label class="kt-checkbox">
                                <input type="checkbox" name="Barrier[]" value="Road"> Road
                                <span></span>
                              </label>
                              <label class="kt-checkbox">
                                <input type="checkbox" name="Barrier[]" value="Open Meadow"> Open Meadow
                                <span></span>
                              </label>
                              
                            </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                             <h5 class="form-control-label">Aspects</h5>
                             <select name="aspects" class="form-control" id="">
                               <option value="east">East</option>
                               <option value="west">West</option>
                               <option value="north">North</option>
                               <option value="south">South</option>
                              
                               <option value="south_east">South East</option>
                               <option value="south_west">South West</option>
                               <option value="north_west">North East</option>
                             </select>
                        </div>
                    </div>
                  </div>

 

                  <button type="submit" class="btn btn-primary" id="kt_blockui_4_1">Submit</button>
              </form>
            </div>
        </div>
                    
    </div>
          

      </div>


               
  </div>

@endsection