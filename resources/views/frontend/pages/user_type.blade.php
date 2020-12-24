@extends('frontend.layout.app')

@section('styles')
	<style>
		@keyframes firelight {
			0% {
				opacity: 1;
			}
			50% {
				opacity: 0.8;
			}
			100% {
				opacity: 1;
			}
		}
		.content {
			position: absolute;
			top: -60%;
			left: 50%;
			bottom: 0;
			margin: 0 0 -30px -100px;
			width: 200px;
			height: 200px;
			overflow: hidden;
			border-radius: 100%;
		}
		.content .fire {
			filter: url(#goo);
			position: absolute;
			width: 100%;
			height: 100%;
		}
		.content div.bottom {
			position: absolute;
			left: 50px;
			bottom: 0;
			width: 100px;
			height: 30px;
			background: #ff9800;
			border-radius: 30px;
		}
		.content figure {
			position: absolute;
			margin: 0 0 -15px;
			left: calc(50% - 70px);
			bottom: 0;
			width: 70px;
			height: 70px;
			background: #ff9800;
			border-radius: 100%;
		}
		.content figure:nth-child(1) {
			animation: firecircle 1.2s 0.14s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
			margin-left: 4px;
			margin-bottom: -27px;
		}
		.content figure:nth-child(2) {
			animation: firecircle 1.2s 0.28s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
			margin-left: 50px;
			margin-bottom: -21px;
		}
		.content figure:nth-child(3) {
			animation: firecircle 1.2s 0.42s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
			margin-left: 32px;
			margin-bottom: -17px;
		}
		.content figure:nth-child(4) {
			animation: firecircle 1.2s 0.56s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
			margin-left: 17px;
			margin-bottom: -23px;
		}
		.content figure:nth-child(5) {
			animation: firecircle 1.2s 0.7s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
			margin-left: 48px;
			margin-bottom: -22px;
		}
		.content figure:nth-child(6) {
			animation: firecircle 1.2s 0.84s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
			margin-left: 61px;
			margin-bottom: -35px;
		}
		.content figure:nth-child(7) {
			animation: firecircle 1.2s 0.98s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
			margin-left: 6px;
			margin-bottom: -33px;
		}
		.content figure:nth-child(8) {
			animation: firecircle 1.2s 1.12s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
			margin-left: 67px;
			margin-bottom: -16px;
		}
		.content figure:nth-child(9) {
			animation: firecircle 1.2s 1.26s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
			margin-left: 43px;
			margin-bottom: -37px;
		}
		.content figure:nth-child(10) {
			animation: firecircle 1.2s 1.4s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
			margin-left: 39px;
			margin-bottom: -40px;
		}
		.content figure:nth-child(11) {
			animation: firecircle 1.2s 1.54s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
			margin-left: 42px;
			margin-bottom: -20px;
		}
		.content figure:nth-child(12) {
			animation: firecircle 1.2s 1.68s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
			margin-left: 14px;
			margin-bottom: -22px;
		}
		.content figure:nth-child(13) {
			animation: firecircle 1.2s 1.82s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
			margin-left: 63px;
			margin-bottom: -37px;
		}
		.content figure:nth-child(14) {
			animation: firecircle 1.2s 1.96s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
			margin-left: 12px;
			margin-bottom: -32px;
		}
		.content figure:nth-child(15) {
			animation: firecircle 1.2s 2.1s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
			margin-left: 56px;
			margin-bottom: -16px;
		}
		.content figure:nth-child(16) {
			animation: firecircle 1.2s 2.24s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
			margin-left: 43px;
			margin-bottom: -25px;
		}
		.content .reverse div {
			position: absolute;
			margin: 0 0 -15px;
			left: 0;
			bottom: 0;
			width: 70px;
			height: 70px;
			background: #141e30;
			border-radius: 100%;
		}
		.content .reverse div:nth-child(1) {
			animation: firereverseleft 1.2s 0.5s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
			margin-left: 6px;
			margin-bottom: -24px;
		}
		.content .reverse div:nth-child(2) {
			animation: firereverseleft 1.2s 1s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
			margin-left: 14px;
			margin-bottom: -35px;
		}
		.content .reverse div:nth-child(3) {
			animation: firereverseleft 1.2s 1.5s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
			margin-left: 2px;
			margin-bottom: -26px;
		}
		.content .reverse div:nth-child(4) {
			animation: firereverseleft 1.2s 2s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
			margin-left: 7px;
			margin-bottom: -39px;
		}
		.content .reverse div:nth-child(5) {
			left: 120px;
			animation: firereverseright 1.2s 0.5s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
			margin-left: 12px;
			margin-bottom: -30px;
		}
		.content .reverse div:nth-child(6) {
			left: 120px;
			animation: firereverseright 1.2s 1s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
			margin-left: 16px;
			margin-bottom: -24px;
		}
		.content .reverse div:nth-child(7) {
			left: 120px;
			animation: firereverseright 1.2s 1.5s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
			margin-left: 13px;
			margin-bottom: -16px;
		}
		.content .reverse div:nth-child(8) {
			left: 120px;
			animation: firereverseright 1.2s 2s cubic-bezier(0.5, 0.07, 0.64, 1) infinite;
			margin-left: 5px;
			margin-bottom: -22px;
		}
		@keyframes firecircle {
			0% {
				transform: translateY(0) scale(1);
				background: #ff9800;
			}
			100% {
				transform: translateY(-175px) scale(0);
				background: #ffc107;
			}
		}
		@keyframes firereverseleft {
			0% {
				transform: translateY(0) translateX(0) scale(0.3);
			}
			100% {
				transform: translateY(-175px) translateX(50px) scale(1);
			}
		}
		@keyframes firereverseright {
			0% {
				transform: translateY(0) translateX(0) scale(0.3);
			}
			100% {
				transform: translateY(-175px) translateX(-50px) scale(1);
			}
		}

		.user_btn{
			position: relative;
			/* display:block; */
			height: 45px;
			width: 150px;
			margin: 10px 7px;
			padding: 5px 5px;
			font-weight: 700;
			font-size: 15px;
			letter-spacing: 2px;
			color: #383736;
			border: 2px #383736 solid;
			border-radius: 4px;
			text-transform: uppercase;
			outline: 0;
			overflow:hidden;
			background: none;
			z-index: 1;
			cursor: pointer;
			transition:         0.08s ease-in;
			-o-transition:      0.08s ease-in;
			-ms-transition:     0.08s ease-in;
			-moz-transition:    0.08s ease-in;
			-webkit-transition: 0.08s ease-in;
		}

		.svg{
			-webkit-transition: all 150ms cubic-bezier(0.445, 0.050, 0.550, 0.950); 
		}

		.svg:before{
			position:absolute;  
			content:"";
			background: url(https://f.cl.ly/items/3H3A0D1N281a2T280F3o/heist.svg) no-repeat center center;
			width:100%;
			height:100%;
			top:0;
			left:0;
			z-index:-1;
			opacity:0;
			-webkit-transition: all 250ms cubic-bezier(0.230, 1.000, 0.320, 1.000);
		}

		.svg:after {
			content: "";
			position: absolute;
			background: #4767ae;
			bottom: 0;
			left: 0;
			right: 0;
			top: 100%;
			z-index: -2;
			-webkit-transition: all 250ms cubic-bezier(0.230, 1.000, 0.320, 1.000); 
		}
		.svg:hover{
			color:white;
			border: 0px #4767ae solid;
		}
		.svg:hover:before {
			opacity: .8;
		}
		.svg:hover:after {
			top: 0;
		}

		.user_type_group{
			position: absolute;
    		left: 18%;
		}
		
	</style>
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
				<div class="col-lg-8 mx-auto">
					
					<div class="content">
						<div class="fire">
						<div class="bottom"></div>
						<figure></figure>
						<figure></figure>
						<figure></figure>
						<figure></figure>
						<figure></figure>
						<figure></figure>
						<figure></figure>
						<figure></figure>
						<figure></figure>
						<figure></figure>
						<figure></figure>
						<figure></figure>
						<figure></figure>
						<figure></figure>
						<figure></figure>
						</div>
						
					</div>
					<svg xmlns="http://www.w3.org/2000/svg" version="1.1">
						<defs>
						<filter id="goo">
							<feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
							<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
							<feBlend in="SourceGraphic" in2="goo" />
							</filter>
						</defs>
					</svg>

					<form class="user_type_group mb-5" method="POST" id="authenticate-form" action="{{ route('authenticate',$user) }}">
						@csrf
						<input type="hidden" name="user_type">
						<button class="user_btn svg" data-usertype="sme-1">SME-1</button>
						<button class="user_btn svg" data-usertype="sme-2">SME-2</button>
						<button class="user_btn svg" data-usertype="endUser">USER</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact section end  -->
	

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
	<script>
		$(document).on('click','user_btn',function(){
			var data=$(this).data('usertype');
			$('[name="user_type"]').val(data);

			if ($('[name="user_type"]').val() !== '') {
				$('#authenticate-form').submit();
			}
		})
	</script>
@endsection