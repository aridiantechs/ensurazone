@extends('backend.layouts.app')


@section('meta')
<title>Adbotics | Create Strategy</title>
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
                <form>
                  <h2>Structure Assessment Zone 1</h2>
                  <hr>
                  <h5>Vegetation</h5>

                  
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <h5>Distance from structure</h5>
                        <div class="kt-radio-list">
                          <label class="kt-radio">
                            <input type="radio" name="distance_from_structure"> 5 feet apart from the structure
                            <span></span>
                          </label>
                          <label class="kt-radio">
                            <input type="radio" name="distance_from_structure"> less than 5 feet
                            <span></span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                           <h5 class="form-control-label">Density</h5>
                           <select name="denstity" class="form-control" id="">
                             <option value="">Low</option>
                             <option value="">Medium</option>
                             <option value="">High</option>
                           </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <h5>Arrangement</h5>
                        <div class="kt-radio-list">
                          <label class="kt-radio">
                            <input type="radio" name="arrangement"> Continues
                            <span></span>
                          </label>
                          <label class="kt-radio">
                            <input type="radio" name="arrangement"> Clump
                            <span></span>
                          </label>
                          <label class="kt-radio">
                            <input type="radio" name="arrangement"> Apart
                            <span></span>
                          </label>
                          <label class="kt-radio">
                            <input type="radio" name="arrangement"> Away
                            <span></span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <h5>Number of treessurface</h5>
                         <input type="text" class="form-control" />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                           <h5 class="form-control-label">Location</h5>
                            <div class="kt-radio-list">
                              <label class="kt-radio">
                                <input type="radio" name="arrangement"> East
                                <span></span>
                              </label>
                              <label class="kt-radio">
                                <input type="radio" name="arrangement"> West
                                <span></span>
                              </label>
                              <label class="kt-radio">
                                <input type="radio" name="arrangement"> North
                                <span></span>
                              </label>
                              <label class="kt-radio">
                                <input type="radio" name="arrangement"> South
                                <span></span>
                              </label>
                              <label class="kt-radio">
                                <input type="radio" name="arrangement"> Northwest
                                <span></span>
                              </label>
                              <label class="kt-radio">
                                <input type="radio" name="arrangement"> Northeast
                                <span></span>
                              </label>
                              <label class="kt-radio">
                                <input type="radio" name="arrangement"> Southeast
                                <span></span>
                              </label>
                              <label class="kt-radio">
                                <input type="radio" name="arrangement"> Southwest
                                <span></span>
                              </label>
                            </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <h5>Height of grass from the</h5>
                         <input type="text" class="form-control" />
                      </div>
                    </div>
                  </div>

                  

                  <div class="row">
                    <div class="col-md-4">
                       <div class="form-group">
                            <h5 class="form-control-label">Presence of Combustible Substance</h5>
                            <div class="kt-checkbox-list">
                              <label class="kt-checkbox">
                                <input type="checkbox" name="arrangement"> Logs/Fire woodpile
                                <span></span>
                              </label>
                              <label class="kt-checkbox">
                                <input type="checkbox" name="arrangement"> Scrape
                                <span></span>
                              </label>
                              <label class="kt-checkbox">
                                <input type="checkbox" name="arrangement"> Flammable debris
                                <span></span>
                              </label>
                              <label class="kt-checkbox">
                                <input type="checkbox" name="arrangement"> Wild grass longer than of 6 inches
                                <span></span>
                              </label>
                              <label class="kt-checkbox">
                                <input type="checkbox" name="arrangement"> Presence of conifer(low limbed)
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
                                <input type="checkbox" name="arrangement"> Gutters
                                <span></span>
                              </label>
                              <label class="kt-checkbox">
                                <input type="checkbox" name="arrangement"> Roof-line
                                <span></span>
                              </label>
                              <label class="kt-checkbox">
                                <input type="checkbox" name="arrangement"> Porch
                                <span></span>
                              </label>
                              <label class="kt-checkbox">
                                <input type="checkbox" name="arrangement"> Deck
                                <span></span>
                              </label>
                              
                            </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <h5>Presence of Combustible</h5>
                         <input type="text" class="form-control" />
                      </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-md-4">
                       <div class="form-group">
                            <h5 class="form-control-label">Screening</h5>
                            <div class="kt-checkbox-list">
                              <label class="kt-checkbox">
                                <input type="checkbox" name="arrangement"> Attic
                                <span></span>
                              </label>
                              <label class="kt-checkbox">
                                <input type="checkbox" name="arrangement"> Soffit
                                <span></span>
                              </label>
                              <label class="kt-checkbox">
                                <input type="checkbox" name="arrangement"> Foundation vent
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
                            <input type="radio" name="distance_from_structure"> Trees scattered by 20 feet distance.
                            <span></span>
                          </label>
                          <label class="kt-radio">
                            <input type="radio" name="distance_from_structure"> Trees scattered by less than or equal to 10 feet distance.
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
                            <input type="radio" name="arrangement"> Continues
                            <span></span>
                          </label>
                          <label class="kt-radio">
                            <input type="radio" name="arrangement"> Clumps
                            <span></span>
                          </label>
                          <label class="kt-radio">
                            <input type="radio" name="arrangement"> Scattered
                            <span></span>
                          </label>
                          <label class="kt-radio">
                            <input type="radio" name="arrangement"> No Trees
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
                            <input type="radio" name="arrangement"> More than 3 trees
                            <span></span>
                          </label>
                          <label class="kt-radio">
                            <input type="radio" name="arrangement"> Less than 3 trees
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
                                <input type="radio" name="arrangement"> Branch of trees at or under the 6ft height of a tree
                                <span></span>
                              </label>
                              <label class="kt-radio">
                                <input type="radio" name="arrangement"> Branch of trees above the 6ft height of a tree
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
                                <input type="checkbox" name="arrangement"> Rocks
                                <span></span>
                              </label>
                              <label class="kt-checkbox">
                                <input type="checkbox" name="arrangement"> Ponds
                                <span></span>
                              </label>
                              <label class="kt-checkbox">
                                <input type="checkbox" name="arrangement"> Stream
                                <span></span>
                              </label>
                              <label class="kt-checkbox">
                                <input type="checkbox" name="arrangement"> Road
                                <span></span>
                              </label>
                              <label class="kt-checkbox">
                                <input type="checkbox" name="arrangement"> Open Meadow
                                <span></span>
                              </label>
                              
                            </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                             <h5 class="form-control-label">Aspects</h5>
                             <select name="denstity" class="form-control" id="">
                               <option value="">East</option>
                               <option value="">West</option>
                               <option value="">North</option>
                               <option value="">South</option>
                              
                               <option value="">South East</option>
                               <option value="">South West</option>
                               <option value="">North East</option>
                             </select>
                        </div>
                    </div>
                  </div>

 


              </form>
            </div>
        </div>
                    
    </div>
          

      </div>


               
  </div>

@endsection