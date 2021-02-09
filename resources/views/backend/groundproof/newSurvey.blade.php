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

.check-cust{
  padding-left: 0 !important;
}

.kt-checkbox > .check-cust-span{
  border-radius: 3px;
  background: none;
  position: absolute;
  top: 1px;
  left: auto;
  right: 50%;
  height: 18px;
  width: 18px;
}

.kt-checkbox > .combustible_value{
  position: absolute;
  left: auto;
  right: 15%;
  z-index: 1;
  opacity: 1;
  border: 1px solid #e2e5ec;
  border-radius: 4px;
}

.d-flex{
  display: flex;
}

.error{
  color: red;
}

.barier{
  padding: 1rem;
  border: 1px solid #e2e5ec;
  border-radius: 4px;
}

.barier_field{
  margin-bottom: 3px;
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
                <form action="{{route('backend.groundproof-inquiries.store')}}" method="POST" enctype="multipart/form-data">
                  @csrf

                  <input type="hidden" name="gp_id" value="{{$gp->id}}">
                  {{-- <h2>Structure Assessment Zone 1</h2>
                  <hr> --}}
                  <h5>Vegetation:</h5>
                  <hr>

                  
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <h5>Vegetation free area around 5ft from structure</h5>
                        <div class="kt-radio-list">
                          @error('vegetation_free_area')
                              <div class="error">{{ $message }}</div>
                          @enderror
                          <label class="kt-radio">
                            <input type="radio" name="vegetation_free_area" value="5 feet apart from the structure" {{old('vegetation_free_area')=='5 feet apart from the structure' ? 'checked' : ''}}> 5 feet apart from the structure
                            <span></span>
                          </label>
                          <label class="kt-radio">
                            <input type="radio" name="vegetation_free_area" value="less than 5 feet" {{old('vegetation_free_area')=='less than 5 feet' ? 'checked' : ''}}> less than 5 feet
                            <span></span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                           <h5 class="form-control-label">SME remarks about vegetation 5ft area around the structure </h5>
                           <textarea name="veg_remarks" id="veg_remarks" cols="30" rows="3">{{old('veg_remarks') ?? ''}}</textarea>
                            @error('veg_remarks')
                                <div class="error">{{ $message }}</div>
                            @enderror
                      </div>
                    </div>
                    {{-- <div class="col-md-4">
                      <div class="form-group">
                           <h5 class="form-control-label">Density</h5>
                           <select name="density" class="form-control" id="">
                             <option value="low">Low</option>
                             <option value="medium">Medium</option>
                             <option value="high">High</option>
                           </select>
                            @error('density')
                                <div class="error">{{ $message }}</div>
                            @enderror
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <h5>Arrangement</h5>
                        <div class="kt-radio-list">
                          @error('density')
                              <div class="error">{{ $message }}</div>
                          @enderror
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
                    </div> --}}
                  </div>

                  <h5>Combustible Subtance:</h5>
                  <hr>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <h5>Height of grass from the Surface</h5>
                          <select name="grass" class="form-control" id="grass">
                            <option value="Grass is 6”or higher from the surface" {{old('grass')=='Grass is 6”or higher from the surface' ? 'checked' : ''}}>Grass is 6”or higher from the surface</option>
                            <option value="Grass is lower the 6”from the ground" {{old('grass')=='Grass is lower the 6”from the ground' ? 'checked' : ''}}>Grass is lower the 6”from the ground </option>
                          </select>
                          @error('grass')
                              <div class="error">{{ $message }}</div>
                          @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <h5 class="form-control-label">Presence of Combustible Material on the structure</h5>
                          <textarea name="combustible_presence" id="combustible_presence" cols="30" rows="3">{{old('combustible_presence') ?? ''}}</textarea>
                          @error('combustible_presence')
                              <div class="error">{{ $message }}</div>
                          @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <h5 class="form-control-label">Presence of Combustible Substance 30 ft area around the </h5>
                        <div class="kt-checkbox-list">
                          @error('combustibles')
                              <div class="error">{{ $message }}</div>
                          @enderror
                          <label class="kt-checkbox check-cust">
                            
                            <input type="checkbox" {{-- name="combustibles[]" --}} value="Logs/Fire" {{ !is_null(old('logs_woodpile_value')) ? 'checked' : ''}}> Logs/Fire woodpile
                            <span class="check-cust-span"></span>
                            <input type="text" class="combustible_value" name="logs_woodpile_value" value="{{!is_null(old('logs_woodpile_value')) ? old('logs_woodpile_value') : ''}}" {{!is_null(old('logs_woodpile_value')) ? '' : 'disabled'}} >
                          </label>
                          <label class="kt-checkbox check-cust">
                            <input type="checkbox" {{-- name="combustibles[]" --}} value="Scrape" {{!is_null(old('scrape_value')) ? 'checked' : ''}}> Scrape
                            <span class="check-cust-span"></span>
                            <input type="text" class="combustible_value" name="scrape_value" value="{{!is_null(old('scrape_value')) ? old('scrape_value') : ''}}" {{!is_null(old('scrape_value')) ? '' : 'disabled'}} >
                          </label>
                          <label class="kt-checkbox check-cust">
                            <input type="checkbox" {{-- name="combustibles[]" --}} value="Flammable Debris" {{ !is_null(old('flammable_value')) ? 'checked' : ''}}> Flammable debris
                            <span class="check-cust-span"></span>
                            <input type="text" class="combustible_value" name="flammable_value" value="{{ !is_null(old('flammable_value')) ? old('flammable_value') : ''}}" {{ !is_null(old('flammable_value')) ? '' : 'disabled'}}>
                          </label>
                          <label class="kt-checkbox check-cust">
                            <input type="checkbox" {{-- name="combustibles[]" --}} value="Wild grass longer than of 6 inches" {{ !is_null(old('wild_grass_value')) ? 'checked' : ''}}> Wild grass longer than of 6 inches
                            <span class="check-cust-span"></span>
                            <input type="text" class="combustible_value" name="wild_grass_value" value="{{ !is_null(old('wild_grass_value')) ? old('wild_grass_value') : ''}}" {{ !is_null(old('wild_grass_value')) ? '' : 'disabled'}}>
                          </label>
                          <label class="kt-checkbox check-cust">
                            <input type="checkbox" {{-- name="combustibles[]" --}} value="Presence of conifer(low limbed)" {{ !is_null(old('conifer_value')) ? 'checked' : ''}}> Presence of conifer(low limbed)
                            <span class="check-cust-span"></span>
                            <input type="text" class="combustible_value" name="conifer_value" value="{{ !is_null(old('conifer_value')) ? old('conifer_value') : ''}}" {{ !is_null(old('conifer_value')) ? '' : 'disabled'}}>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <h5 class="form-control-label">Deposit of leaves</h5>
                        <div class="kt-checkbox-list">
                          @error('leave_deposits')
                              <div class="error">{{ $message }}</div>
                          @enderror
                          <label class="kt-checkbox check-cust">
                            <input type="checkbox" {{-- name="leave_deposits[]" --}} value="Gutters" {{ !is_null(old('Gutters_value')) ? 'checked' : ''}}> Gutters
                            <span class="check-cust-span"></span>
                            <input type="text" class="combustible_value" name="Gutters_value" value="{{ !is_null(old('Gutters_value')) ? old('Gutters_value') : ''}}" {{ !is_null(old('Gutters_value')) ? '' : 'disabled'}}>
                          </label>
                          <label class="kt-checkbox check-cust">
                            <input type="checkbox" {{-- name="leave_deposits[]" --}} value="roof_line" {{ !is_null(old('roof_line_value')) ? 'checked' : ''}}> Roof-line
                            <span class="check-cust-span"></span>
                            <input type="text" class="combustible_value" name="roof_line_value" value="{{ !is_null(old('roof_line_value')) ? old('roof_line_value') : ''}}" {{ !is_null(old('roof_line_value')) ? '' : 'disabled'}}>
                          </label>
                          <label class="kt-checkbox check-cust">
                            <input type="checkbox" {{-- name="leave_deposits[]" --}} value="Porch" {{ !is_null(old('porch_value')) ? 'checked' : ''}}> Porch
                            <span class="check-cust-span"></span>
                            <input type="text" class="combustible_value" name="porch_value" value="{{ !is_null(old('porch_value')) ? old('porch_value') : ''}}" {{ !is_null(old('porch_value')) ? '' : 'disabled'}}>
                          </label>
                          <label class="kt-checkbox check-cust">
                            <input type="checkbox" {{-- name="leave_deposits[]" --}} value="Deck" {{ !is_null(old('deck_value')) ? 'checked' : ''}}> Deck
                            <span class="check-cust-span"></span>
                            <input type="text" class="combustible_value" name="deck_value" value="{{ !is_null(old('deck_value')) ? old('deck_value') : ''}}" {{ !is_null(old('deck_value')) ? '' : 'disabled'}}>
                          </label>
                          
                        </div>
                      </div>
                    </div>
                  </div>

                  <h5>Screening:</h5>
                  <hr>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <h5 class="form-control-label">Attic</h5>
                        <select name="screen_attic" class="form-control" id="grass">
                          <option value="missing" {{ !is_null(old('screen_attic')) && old('screen_attic') == 'missing' ? 'selected' : ''}}>Missing </option>
                          <option value="broken" {{ !is_null(old('screen_attic')) && old('screen_attic') == 'broken' ? 'selected' : ''}}>Broken</option>
                          <option value="placed" {{ !is_null(old('screen_attic')) && old('screen_attic') == 'placed' ? 'selected' : ''}}>Placed</option>
                        </select>
                          @error('screen_attic')
                              <div class="error">{{ $message }}</div>
                          @enderror
                     </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <textarea name="screen_attic_value" id="screen_attic_value" cols="30" rows="3">{{ old('screen_attic_value') ?? ''}}</textarea>
                          @error('screen_attic_value')
                              <div class="error">{{ $message }}</div>
                          @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <h5 class="form-control-label">Soffit</h5>
                        <select name="screen_soffit" class="form-control" id="grass">
                          <option value="missing" {{ !is_null(old('screen_soffit')) && old('screen_soffit') == 'missing' ? 'selected' : ''}}>Missing </option>
                          <option value="broken" {{ !is_null(old('screen_soffit')) && old('screen_soffit') == 'broken' ? 'selected' : ''}}>Broken</option>
                          <option value="placed" {{ !is_null(old('screen_soffit')) && old('screen_soffit') == 'placed' ? 'selected' : ''}}>Placed</option>
                        </select>
                          @error('screen_soffit')
                              <div class="error">{{ $message }}</div>
                          @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <textarea name="screen_soffit_value" id="screen_soffit_value" cols="30" rows="3">{{ old('screen_soffit_value') ?? ''}}</textarea>
                          @error('screen_soffit_value')
                              <div class="error">{{ $message }}</div>
                          @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <h5 class="form-control-label">Foundation Vent</h5>
                        <select name="screen_foundation" class="form-control" id="grass">
                          <option value="missing" {{ !is_null(old('screen_foundation')) && old('screen_foundation') == 'missing' ? 'selected' : ''}}>Missing </option>
                          <option value="broken" {{ !is_null(old('screen_foundation')) && old('screen_foundation') == 'broken' ? 'selected' : ''}}>Broken</option>
                          <option value="placed" {{ !is_null(old('screen_foundation')) && old('screen_foundation') == 'placed' ? 'selected' : ''}}>Placed</option>
                        </select>
                          @error('screen_foundation')
                              <div class="error">{{ $message }}</div>
                          @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <textarea name="screen_foundation_value" id="screen_foundation_value" cols="30" rows="3">{{ old('screen_foundation_value') ?? ''}}</textarea>
                          @error('screen_foundation_value')
                              <div class="error">{{ $message }}</div>
                          @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <h5 class="form-control-label">Chimney</h5>
                        <select name="screen_chimney" class="form-control" id="grass">
                          <option value="missing" {{ !is_null(old('screen_chimney')) && old('screen_chimney') == 'missing' ? 'selected' : ''}}>Missing </option>
                          <option value="broken" {{ !is_null(old('screen_chimney')) && old('screen_chimney') == 'broken' ? 'selected' : ''}}>Broken</option>
                          <option value="placed" {{ !is_null(old('screen_chimney')) && old('screen_chimney') == 'placed' ? 'selected' : ''}}>Placed</option>
                        </select>
                          @error('screen_chimney')
                              <div class="error">{{ $message }}</div>
                          @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <textarea name="screen_chimney_value" id="screen_chimney_value" cols="30" rows="3">{{ old('screen_chimney_value') ?? ''}}</textarea>
                          @error('screen_chimney_value')
                              <div class="error">{{ $message }}</div>
                          @enderror
                      </div>
                    </div>
                  </div>

                  <hr>
                  <h2 class="text-center">Space Assessment Zone 1</h2>
                  <hr>
                  <h5>Vegetation:</h5>
                  <hr>

                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <h6>Number of trees</h6>
                         <input type="number" min="0" class="form-control" name="space_assess1_trees" value="{{ old('space_assess1_trees') ?? ''}}"/>
                          @error('space_assess1_trees')
                              <div class="error">{{ $message }}</div>
                          @enderror
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <h6>Distance of trees from the structure </h6>
                         <input type="number" min="0" class="form-control" name="space_assess1_trees_distance" value="{{ old('space_assess1_trees_distance') ?? ''}}"/>
                          @error('space_assess1_trees_distance')
                              <div class="error">{{ $message }}</div>
                          @enderror
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                           <h6 class="form-control-label">Density</h6>
                           <select name="space_assess1_density" class="form-control" id="">
                             <option value="low" {{ !is_null(old('space_assess1_density')) && old('space_assess1_density') == 'low' ? 'selected' : ''}}>Low</option>
                             <option value="medium" {{ !is_null(old('space_assess1_density')) && old('space_assess1_density') == 'medium' ? 'selected' : ''}}>Medium</option>
                             <option value="high" {{ !is_null(old('space_assess1_density')) && old('space_assess1_density') == 'high' ? 'selected' : ''}}>High</option>
                           </select>
                            @error('space_assess1_density')
                                <div class="error">{{ $message }}</div>
                            @enderror
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <h6>Arrangement</h6>
                        <div class="kt-radio-list">
                          <select name="space_assess1_space_arrangement" class="form-control" id="">
                            <option value="continues" {{ !is_null(old('space_assess1_space_arrangement')) && old('space_assess1_space_arrangement') == 'continues' ? 'selected' : ''}}>Continues</option>
                            <option value="clumps" {{ !is_null(old('space_assess1_space_arrangement')) && old('space_assess1_space_arrangement') == 'clumps' ? 'selected' : ''}}>clumps</option>
                            <option value="scattered" {{ !is_null(old('space_assess1_space_arrangement')) && old('space_assess1_space_arrangement') == 'scattered' ? 'selected' : ''}}>Scattered</option>
                            <option value="no_tree" {{ !is_null(old('space_assess1_space_arrangement')) && old('space_assess1_space_arrangement') == 'no_tree' ? 'selected' : ''}}>No tree </option>
                          </select>
                          @error('space_assess1_space_arrangement')
                              <div class="error">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                          <h5 class="form-control-label">Location</h5>
                          <div class="kt-radio-list d-flex">
                            @error('location')
                                <div class="error">{{ $message }}</div>
                            @enderror
                            <label class="kt-radio m-3">
                              <input type="radio" name="location" value="east" {{ !is_null(old('location')) && old('location') == 'east' ? 'selected' : ''}}> East
                              <span></span>
                            </label>
                            <label class="kt-radio m-3">
                              <input type="radio" name="location" value="west" {{ !is_null(old('location')) && old('location') == 'west' ? 'selected' : ''}}> West
                              <span></span>
                            </label>
                            <label class="kt-radio m-3">
                              <input type="radio" name="location" value="north" {{ !is_null(old('location')) && old('location') == 'north' ? 'selected' : ''}}> North
                              <span></span>
                            </label>
                            <label class="kt-radio m-3">
                              <input type="radio" name="location" value="south" {{ !is_null(old('location')) && old('location') == 'south' ? 'selected' : ''}}> South
                              <span></span>
                            </label>
                            <label class="kt-radio m-3">
                              <input type="radio" name="location" value="northwest" {{ !is_null(old('location')) && old('location') == 'northwest' ? 'selected' : ''}}> Northwest
                              <span></span>
                            </label>
                            <label class="kt-radio m-3">
                              <input type="radio" name="location" value="northeast" {{ !is_null(old('location')) && old('location') == 'northeast' ? 'selected' : ''}}> Northeast
                              <span></span>
                            </label>
                            <label class="kt-radio m-3">
                              <input type="radio" name="location" value="southeast" {{ !is_null(old('location')) && old('location') == 'southeast' ? 'selected' : ''}}> Southeast
                              <span></span>
                            </label>
                            <label class="kt-radio m-3">
                              <input type="radio" name="location" value="southwest" {{ !is_null(old('location')) && old('location') == 'southwest' ? 'selected' : ''}}> Southwest
                              <span></span>
                            </label>
                          </div>
                      </div>
                    </div>
                    {{-- <div class="col-md-4">
                       <div class="form-group">
                            <h5 class="form-control-label">Screening</h5>
                            <div class="kt-checkbox-list">
                              @error('screening[]')
                                  <div class="error">{{ $message }}</div>
                              @enderror
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
                    </div> --}}
                    <div class="col-md-6">
                      <div class="form-group">
                            <h5 for="file" class="form-control-label">Photographic evidence from site</h5>
                            <input style="height: 45px;" class="form-control" type="file" name="space_assess1_img" id="space_assess1_img" required/>
                            <span class="text-input">Please attach pdf if any</span>
                            @error('space_assess1_img')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <h5 class="form-control-label">Picture description:</h5>
                        <textarea class="form-control" rows="2" name="space_assess1_img_description" required>{{ old('space_assess1_img_description') ?? ''}}</textarea>
                        @error('space_assess1_img_description')
                            <div class="error">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <h5 class="form-control-label">SME Comments:</h5>
                        <textarea class="form-control" rows="2" name="space_assess1_sme_comments" required>{{ old('space_assess1_sme_comments') ?? ''}}</textarea>
                        @error('space_assess1_sme_comments')
                            <div class="error">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                  </div>
                  
                  <hr>
                  <h2 class="text-center">Space Assessment Zone 2</h2>
                  <hr>
                  <h5>Vegetation:</h5>
                  <hr>

                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <h6>Number of trees</h6>
                         <input type="number" min="0" class="form-control" name="space_assess2_trees" value="{{ old('space_assess2_trees') ?? ''}}"/>
                          @error('space_assess2_trees')
                              <div class="error">{{ $message }}</div>
                          @enderror
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <h6>Density of Trees</h6>
                         <select name="space_assess2_trees_density" class="form-control" id="">
                          <option value="low" {{ !is_null(old('space_assess2_trees_density')) && old('space_assess2_trees_density') == 'low' ? 'selected' : ''}}>Low</option>
                          <option value="medium" {{ !is_null(old('space_assess2_trees_density')) && old('space_assess2_trees_density') == 'medium' ? 'selected' : ''}}>Medium</option>
                          <option value="high" {{ !is_null(old('space_assess2_trees_density')) && old('space_assess2_trees_density') == 'high' ? 'selected' : ''}}>High</option>
                        </select>
                        @error('space_assess2_trees_density')
                            <div class="error">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <h6 class="form-control-label">Arrangement</h6>
                        <select name="space_assess2_density" class="form-control" id="">
                          <option value="continues" {{ !is_null(old('space_assess2_density')) && old('space_assess2_density') == 'continues' ? 'selected' : ''}}>Continues</option>
                            <option value="clumps" {{ !is_null(old('space_assess2_density')) && old('space_assess2_density') == 'clumps' ? 'selected' : ''}}>clumps</option>
                            <option value="scattered" {{ !is_null(old('space_assess2_density')) && old('space_assess2_density') == 'scattered' ? 'selected' : ''}}>Scattered</option>
                            <option value="no_tree" {{ !is_null(old('space_assess2_density')) && old('space_assess2_density') == 'no_tree' ? 'selected' : ''}}>No tree </option>
                        </select>
                        @error('space_assess2_density')
                            <div class="error">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <h6>Space</h6>
                        <select name="space_assess2_space" class="form-control" id="">
                          <option value="Trees are scattered by 20ft apart" {{ !is_null(old('space_assess2_space')) && old('space_assess2_space') == 'Trees are scattered by 20ft apart' ? 'selected' : ''}}>Trees are scattered by 20ft apart</option>
                          <option value="Trees are scattered by less than 20ft apart" {{ !is_null(old('space_assess2_space')) && old('space_assess2_space') == 'Trees are scattered by less than 20ft apart' ? 'selected' : ''}}>Trees are scattered by less than 20ft apart</option>
                        </select>
                        @error('space_assess2_space')
                            <div class="error">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <h6>Size of clump</h6>
                        <select name="space_assess2_clumpsize" class="form-control" id="">
                          <option value="More than 3 trees" {{ !is_null(old('space_assess2_clumpsize')) && old('space_assess2_clumpsize') == 'More than 3 trees' ? 'selected' : ''}}>More than 3 trees</option>
                          <option value="Less than or equal to 3" {{ !is_null(old('space_assess2_clumpsize')) && old('space_assess2_clumpsize') == 'Less than or equal to 3' ? 'selected' : ''}}>Less than or equal to 3</option>
                        </select>
                        @error('space_assess2_clumpsize')
                            <div class="error">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-4">
                       <div class="form-group">
                          <h5>Ladder fuel</h5>
                          <select name="space_assess2_ladder_fuel" class="form-control" id="" required>
                            <option value="Branch of trees below 6ft from the surface" {{ !is_null(old('space_assess2_ladder_fuel')) && old('space_assess2_ladder_fuel') == 'Branch of trees below 6ft from the surface' ? 'selected' : ''}}>Branch of trees below 6ft from the surface </option>
                            <option value="Branch of trees above 6ft from the surface" {{ !is_null(old('space_assess2_ladder_fuel')) && old('space_assess2_ladder_fuel') == 'Branch of trees above 6ft from the surface' ? 'selected' : ''}}>Branch of trees above 6ft from the surface</option>
                          </select>
                          @error('space_assess2_ladder_fuel')
                              <div class="error">{{ $message }}</div>
                          @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <h5 class="form-control-label">Neighborhood vegetation growth security threats:</h5>
                        <textarea class="form-control" rows="2" name="space_assess2_neighbour_vege" required>{{ old('space_assess2_neighbour_vege') ?? ''}}</textarea>
                        @error('space_assess2_neighbour_vege')
                            <div class="error">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                            <h5 for="file" class="form-control-label">Photographic evidence</h5>
                            <input style="height: 45px;" class="form-control" type="file" name="space_assess2_img" id="space_assess2_img" required/>
                            <span class="text-input">Please attach pdf if any</span>
                            @error('space_assess2_img')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <h5 class="form-control-label">Site findings by SME </h5>
                        <textarea class="form-control" rows="2" name="space_assess2_site_findings" required>{{old('space_assess2_site_findings') ?? ''}}</textarea>
                        @error('space_assess2_site_findings')
                            <div class="error">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                  </div>

                  <hr>
                  
                  <h3>Topography</h3>
                  <hr>
                  <div class="row">
                    <div class="col-md-4">
                       <div class="form-group">
                          <h5 class="form-control-label">Slope</h5>
                          <select name="space_assess2_slope" class="form-control" id="" required>
                            <option value="Leveled" {{ !is_null(old('space_assess2_slope')) && old('space_assess2_slope') == 'Leveled' ? 'selected' : ''}}>Leveled</option>
                            <option value="Medium Steep slope" {{ !is_null(old('space_assess2_slope')) && old('space_assess2_slope') == 'Medium Steep slope' ? 'selected' : ''}}>Medium Steep slope</option>
                            <option value="Steep Slope" {{ !is_null(old('space_assess2_slope')) && old('space_assess2_slope') == 'Steep Slope' ? 'selected' : ''}}>Steep Slope</option>
                          </select>
                          @error('space_assess2_slope')
                              <div class="error">{{ $message }}</div>
                          @enderror
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                             <h5 class="form-control-label">Aspects</h5>
                             <select name="space_assess2_aspects" class="form-control" id="">
                               <option value="east" {{ !is_null(old('space_assess2_aspects')) && old('space_assess2_aspects') == 'east' ? 'selected' : ''}}>East</option>
                               <option value="west" {{ !is_null(old('space_assess2_aspects')) && old('space_assess2_aspects') == 'west' ? 'selected' : ''}}>West</option>
                               <option value="north" {{ !is_null(old('space_assess2_aspects')) && old('space_assess2_aspects') == 'north' ? 'selected' : ''}}>North</option>
                               <option value="south" {{ !is_null(old('space_assess2_aspects')) && old('space_assess2_aspects') == 'south' ? 'selected' : ''}}>South</option>
                              
                               <option value="south_east" {{ !is_null(old('space_assess2_aspects')) && old('space_assess2_aspects') == 'south_east' ? 'selected' : ''}}>South East</option>
                               <option value="south_west" {{ !is_null(old('space_assess2_aspects')) && old('space_assess2_aspects') == 'south_west' ? 'selected' : ''}}>South West</option>
                               <option value="north_west" {{ !is_null(old('space_assess2_aspects')) && old('space_assess2_aspects') == 'north_west' ? 'selected' : ''}}>North East</option>
                             </select>
                              @error('space_assess2_aspects')
                                <div class="error">{{ $message }}</div>
                              @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                          <h5 class="form-control-label">Types of Barrier</h5>
                          @php
                            $barrier_err=array('space_assess2_rock','space_assess2_Pond','space_assess2_stream','space_assess2_road','space_assess2_meadow');
                          @endphp
                          @foreach ($barrier_err as $err)
                            @if($errors->has($err))
                              <div class="error">{{ $errors->first($err) }}</div>
                            @endif
                          @endforeach
                          <div class="row barier">
                            <div class="col-md-6"><h6>Rock</h6></div>
                            <div class="col-md-6 barier_field">
                              <input class="form-control" name="space_assess2_rock"  value="{{old('space_assess2_rock') ?? ''}}"/>
                            </div>
                          
                            <div class="col-md-6"><h6>Pond</h6></div>
                            <div class="col-md-6 barier_field">
                              <input class="form-control" name="space_assess2_Pond" value="{{old('space_assess2_Pond') ?? ''}}" />
                            </div>
                          
                            <div class="col-md-6"><h6>Stream</h6></div>
                            <div class="col-md-6 barier_field">
                              <input class="form-control" name="space_assess2_stream" value="{{old('space_assess2_stream') ?? ''}}" />
                            </div>
                          
                            <div class="col-md-6"><h6>Road</h6></div>
                            <div class="col-md-6 barier_field">
                              <input class="form-control" name="space_assess2_road" value="{{old('space_assess2_road') ?? ''}}" />
                            </div>
                          
                            <div class="col-md-6"><h6>Open Meadow</h6></div>
                            <div class="col-md-6 barier_field">
                              <input class="form-control" name="space_assess2_meadow" value="{{old('space_assess2_meadow') ?? ''}}" />
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <h5 class="form-control-label">SME observations Zone-2 </h5>
                        <textarea class="form-control" rows="2" name="space_assess2_sme_comments" required>{{old('space_assess2_sme_comments') ?? ''}}</textarea>
                        @error('space_assess2_sme_comments')
                            <div class="error">{{ $message }}</div>
                        @enderror
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

@section('scripts')
  <script>
    $(document).ready(function(){
      $('.check-cust-span').click(function(){
         var elem=$(this).siblings('.combustible_value');
        /* console.log(elem.prop('disabled')); */
        if (!elem.prop('disabled')) {
          elem.prop('disabled',true);
          elem.val('');
        }
        else{
          elem.prop('disabled',false);
        }
        
      })
    })
  </script>
@endsection