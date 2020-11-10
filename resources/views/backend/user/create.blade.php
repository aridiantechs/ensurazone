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
 My Strategy Ads Automated Rules
@endsection

@section('content')


  <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

      <div class="kt-container ">

          <div class="row align-items-center">
            <div class="col-12 col-md-3 col-lg-2 order-md-2">
              <div class="kt-sc__bg">
                
           </div>
            </div>
            <div class="col-12 col-md-7 col-lg-7 order-md-1 aos-init aos-animate" data-aos="fade-up">

              <!-- Heading -->
              <h1 class="font-bold text-center text-md-left" style="font-weight: 500">
              Create your perfect strategy
              </h1>

              <div class="mt-4 text-md-left">
                <h5>platform</h5>
                <div class="switch-field">
                  <input type="radio" id="radio-three" name="switch-two" value="yes" checked/>
                  <label for="radio-three">Facebook Ads</label>
                  <input type="radio" id="radio-four" name="switch-two" value="maybe" />
                  <label for="radio-four">Google Ads</label>
                  <input type="radio" id="radio-five" name="switch-two" value="no" />
                  <label for="radio-five">Snapchat Ads</label>
                </div>
              </div>
              

              <div class="mt-4 text-md-left">
                <h5>Description</h5>
                <div class="str-description">
                  <textarea name="description" placeholder="What does your strategy do" class="form-control" autocomplete="off" step="any" cols="5" rows="10"></textarea>
                </div>
              </div>
              
              <div class="mt-4 text-md-left">
                <h5>Youtube video</h5>
                <div class="str-video-link">
                  <input name="youtube_video" placeholder="https://www.youtube.com/watch?v=ZHnGrVZ8Jp4" class="form-control" autocomplete="off" step="any" type="text">
                </div>
              </div>

              <hr class="mt-4">


              <div class="mt-4 text-md-left">
                <h5>Youtube video</h5>
                <div class="str-video-link">
                  <input name="youtube_video" placeholder="https://www.youtube.com/watch?v=ZHnGrVZ8Jp4" class="form-control" autocomplete="off" step="any" type="text">
                </div>
              </div>
              
              <div class="mt-4 text-md-left">
                <h5>Rules</h5>
                <div class="str-btns">
                  <button class="btn btn-primary">+ From Rule List</button>
                  <a href="{{ route('rules.create') }}" class="btn btn-primary">+ From Scratch</a>
                </div>
              </div>
              
              <hr class="mt-4">

              <div class="mt-4 text-md-left str-constraints-box">
                <div style="display: -webkit-inline-box;">
                  <img src="https://revealbot.com/packs/media/controls/Icon/assets/alert--black-530f9b6b7685d94507eb00442d6c437b.svg">
                  <h5>&nbsp Not available in strategies</h5>
                </div>
                <div class="str-constraints">
                  <ul>
                    <li class="str-constraints-list" value="0">– Specific item selections.</li>
                    <li class="str-constraints-list" value="0">– Facebook custom conversions.</li>
                    <li class="str-constraints-list" value="0">– Custom metrics with Facebook custom conversions.</li>
                    <li class="str-constraints-list" value="0">– Custom metrics using the Google Sheets integrations.</li></ul>
                </div>
              </div>
              

            </div>
          </div>

         
  </div>


               
  </div>

@endsection