@extends('frontend.layout.app')

@section('styles')
{!! htmlScriptTagJsApi([
    'action' => 'homepage',
]) !!}
@endsection

@section('content')

<!-- Page top section  -->
	<section class="page-top-section set-bg" data-setbg="{{ url('/') }}/images/bg1.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<h2>Contact</h2>
					{{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. </p> --}}
					<a href="#" class="site-btn">Say hello</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Page top section end  -->

	

	<!-- Contact section   -->
	<section class="contact-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="contact-text">
						<h2>Get in Touch</h2>
						<p>Ensurazone 3D build process brings leading professionals in Fire Safety and Planning, Sales and Business Development, Computer Engineering, GIS and Remote Sense Mapping, Portal and Dashboard Development, together to produce solutions for a wide range of customers in multiple fields of All-Hazard risk management and reduction.</p>
						<div class="header-info-box">
							<div class="hib-icon">
								<img src="img/icons/phone.png" alt="" class="">
							</div>
							<div class="hib-text">
								<h6>+546 990221 123</h6>
								<p>contact@ensurazone.com</p>
							</div>
						</div>
						<div class="header-info-box">
							<div class="hib-icon">
								<img src="img/icons/map-marker.png" alt="" class="">
							</div>
							<div class="hib-text">
								<h6>Main Str, no 23</h6>
								<p>NY, New York PK 23589</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<form class="contact-form" action="{{route('contact.store')}}" method="POST">
						@csrf
						<div class="row">
							<div class="col-lg-6">
								<input type="text" placeholder="Your Name" name="name">
							</div>
							<div class="col-lg-6">
								<input type="email" placeholder="Your Email"  name="email">
							</div>
							<div class="col-lg-4">
							</div>
							<div class="col-lg-12">
								<input type="text" placeholder="Subject" name="subject">
								<textarea class="text-msg" placeholder="Message" name="message"></textarea>
								<button class="site-btn" type="submit">send message</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact section end  -->

	<!-- Map section  -->
	<div class="map-section">
		<div class="container">
			<div class="map-info">
				<img src="img/logo-contact.png" alt="">
				<p>Ensurazone can help you organize your hazard mitigation plan and find fire protection contractors who can complete the recommended repairs and/or improvements quickly and efficiently.</p>
			</div>
		</div>
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14376.077865872314!2d-73.879277264103!3d40.757667781624285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1546528920522" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
	<!-- Map section end  -->
	

	<!-- Call to action section  -->
	<section class="cta-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 d-flex align-items-center">
					<h2>We produce or supply Goods, Services, or Sources</h2>
				</div>
				<div class="col-lg-3 text-lg-right" >
					<a href="#" class="site-btn sb-dark">contact us</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Call to action section end  -->


@endsection

@section('scripts')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection