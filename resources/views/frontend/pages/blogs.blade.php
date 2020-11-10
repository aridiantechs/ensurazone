@extends('frontend.layout.app')

@section('styles')
@endsection

@section('content')	
	<!-- Page top section  -->
	<section class="page-top-section set-bg" data-setbg="{{ url('/') }}/images/bg1.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<h2>Our Solutions</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. </p>
					<a href="{{ route('contact') }}" class="site-btn">Contact us</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Page top section end  -->

	<!-- Blog section  -->
	<section class="blog-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 sidebar order-2 order-lg-1">
					<div class="sb-widget">
						<form class="sb-search">
							<input type="text" placeholder="Search">
							<button><i class="fa fa-search"></i></button>
						</form>
					</div>
					<div class="sb-widget">
						<h2 class="sb-title">Categories</h2>
						<ul>
							<li><a href="">GIS Industry Process</a></li>
							<li><a href="">Agricultural Engineering</a></li>
							<li><a href="">Green  Energy </a></li>
							<li><a href="">GIS Research</a></li>
							<li><a href="">Ground Proofing Process</a></li>
						</ul>
					</div>
					<div class="sb-widget">
						<h2 class="sb-title">Categories</h2>
						<div class="recent-post">
							<div class="rp-item">
								<img src="{{ asset('theme/img/blog/recent-post/1.jpg') }}" alt="">
								<div class="rp-text">
									<p>All you need to know the risk</p>
									<div class="rp-date">08 Feb, 2019</div>
								</div>
							</div>
							<div class="rp-item">
								<img src="{{ asset('theme/img/blog/recent-post/2.jpg') }}" alt="">
								<div class="rp-text">
									<p>All you need to know about Ground Assessment</p>
									<div class="rp-date">08 Feb, 2019</div>
								</div>
							</div>
							<div class="rp-item">
								<img src="{{ asset('theme/img/blog/recent-post/3.jpg') }}" alt="">
								<div class="rp-text">
									<p>How Ensurazone works</p>
									<div class="rp-date">08 Feb, 2019</div>
								</div>
							</div>
						</div>
					</div>
					<div class="sb-widget">
						<div class="info-box">
							<h3>Contact Us for Help</h3>
							<p>Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu et commodo interdum. </p>
							<div class="footer-info-box">
								<div class="fib-icon">
									<img src="img/icons/phone.png" alt="" class="">
								</div>
								<div class="fib-text">
									<p>+546 990221 123<br>contact@ensurazone.com</p>
								</div>
							</div>
							<a href="#">Send us a message</a>
						</div>
						<a href="" class="site-btn w-100">Download Brochure</a>
					</div>
				</div>
				<div class="col-lg-8 order-1 order-lg-2">
					<div class="blog-post">
						<div class="blog-thumb set-bg" data-setbg="{{ asset('theme/img/blog/1.jpg') }}">
							<div class="blog-date">08 Feb, 2019</div>
						</div>
						<div class="blog-metas">
							<div class="blog-meta meta-author">by <a href="">James Smith</a></div>
							<div class="blog-meta meta-cata">in <a href="">Industry</a></div>
							<div class="blog-meta meta-comment"><a href="">3 Comments</a></div>
						</div>
						<h2>All you need to know the risk</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin estst quis, blandit sollicitudi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin estst quis, blandit sollicitudi</p>
						<a href="#" class="site-btn read-more">read more</a>
					</div>
					<div class="blog-post">
						<div class="blog-thumb set-bg" data-setbg="{{ asset('theme/img/blog/2.jpg') }}">
							<div class="blog-date">08 Feb, 2019</div>
						</div>
						<div class="blog-metas">
							<div class="blog-meta meta-author">by <a href="">James Smith</a></div>
							<div class="blog-meta meta-cata">in <a href="">Industry</a></div>
							<div class="blog-meta meta-comment"><a href="">3 Comments</a></div>
						</div>
						<h2>All you need to know about Ground Assessment</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin estst quis, blandit sollicitudi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin estst quis, blandit sollicitudi</p>
						<a href="#" class="site-btn read-more">read more</a>
					</div>
					<div class="blog-post">
						<div class="blog-thumb set-bg" data-setbg="{{ asset('theme/img/blog/3.jpg') }}">
							<div class="blog-date">08 Feb, 2019</div>
						</div>
						<div class="blog-metas">
							<div class="blog-meta meta-author">by <a href="">James Smith</a></div>
							<div class="blog-meta meta-cata">in <a href="">Industry</a></div>
							<div class="blog-meta meta-comment"><a href="">3 Comments</a></div>
						</div>
						<h2>How Ensurazone works</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin estst quis, blandit sollicitudi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin estst quis, blandit sollicitudi</p>
						<a href="#" class="site-btn read-more">read more</a>
					</div>
					<div class="site-pagination">
						<a href="" class="current">01.</a>
						<a href="">02.</a>
						<a href="">03.</a>
						<a class="next" href="">Next</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end  -->

	<!-- Call to action section  -->
	<section class="cta-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 d-flex align-items-center">
					<h2>We produce or supply Goods, Services, or Sources</h2>
				</div>
				<div class="col-lg-3 text-lg-right" >
					<a href="{{ route('contact') }}" class="site-btn sb-dark">contact us</a>
				</div>
			</div>
		</div>
	</section>



@endsection	