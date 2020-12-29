@extends('frontend.layout.app')

@section('styles')
<style type="text/css">
.thanks-d {
    background: #ffefe9;
    padding: 50px 50px;
    border-left: 5px solid #e25822;
    margin-bottom: 15px;
}
</style>
@endsection

@section('content')
<!-- Hero section  -->
    <section class="page-top-section set-bg" data-setbg="{{ url('/') }}/images/bg1.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<h2>Survey Form</h2>
					<p>Ensurazone 3D build process brings leading professionals in Fire Safety and Planning, Sales and Business Development, Computer Engineering, GIS and Remote Sense Mapping.</p>
					<a href="" class="site-btn">Survey</a>
				</div>
			</div>
		</div>
	</section>
    <!-- Hero section end  -->

    <section class="blog-section spad">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="thanks-d">
						<h5>We have recieved your inquiry details. Thank you for submitting application. We will contact you in 24 hours via email !. Or what ever message you want, will appear here.</h5>
					</div>
					<p>Go to : <a href="{{ route('my_account.index') }}">your account</a></p>
				</div>
			</div>
		</div>
	</section>

@endsection

@section('scripts')
<script type="text/javascript">
</script>
@endsection
