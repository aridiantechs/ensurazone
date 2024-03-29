
    <footer class="footer-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget about-widget">
                        <img src="{{ url('/') }}/images/ensurazone-logo-white.png" alt="">
                        <p>Ensurazone 3D build process brings leading professionals in Fire Safety and Planning, Sales and Business Development, Computer Engineering, GIS and Remote Sense Mapping, Portal and Dashboard Development, together to produce solutions for a wide range of customers in multiple fields of All-Hazard risk management and reduction.</p>
                        <div class="footer-social">
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-dribbble"></i></a>
                            <a href=""><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-7">
                    <div class="footer-widget">
                        <h2 class="fw-title">Contact Us</h2>
                        <div class="footer-info-box">
                            <div class="fib-icon">
                                <img src="{{ url('/') }}/theme/img/icons/phone.png" alt="" class="">
                            </div>
                            <div class="fib-text">
                                <p>401 Ryland St, Suite 100<br>Reno, NV 89502, US</p>
                            </div>
                        </div>
                        <div class="footer-info-box">
                            <div class="fib-icon">
                                <img src="{{ url('/') }}/theme/img/icons/map-marker.png" alt="" class="">
                            </div>
                            <div class="fib-text">
                                <p>775-737-1355<br>contact@ensurazone.com</p>
                            </div>
                        </div>
                        <form class="footer-search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-widget">
                        <h2 class="fw-title">Our Solutions</h2>
                        {{-- <ul>
                            <li><a href="">Metal Industry</a></li>
                            <li><a href="">Agricultural Engineering</a></li>
                            <li><a href="">Green  Energy</a></li>
                            <li><a href="">Chemical Research</a></li>
                            <li><a href="">Oil Extractions</a></li>
                            <li><a href="">Manufactoring</a></li>
                        </ul> --}}
                        <a href="{{route('sample_report',['q'=>'complete_report'])}}" target="_blank" class="site-btn sb-white mr-4 mb-3">Download our Sample Report</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-buttom">
            <div class="container">
            <div class="row">
                <div class="col-lg-4 order-2 order-lg-1 p-0">
                    <div class="copyright">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved. <a href="ensurazone.com">Ensurazone</a></a>
</div>
                </div>
                <div class="col-lg-7 order-1 order-lg-2 p-0">
                    <ul class="footer-menu">
                        <li class="active"><a href="{{ route('/') }}">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="{{ route('services') }}">Solutions</a></li>
                        <li><a href="{{ route('blogs') }}">Blog</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </footer>
    <!-- Footer section end -->


    <!-- Search model -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end