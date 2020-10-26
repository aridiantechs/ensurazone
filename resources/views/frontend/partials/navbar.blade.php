
    <header class="header-section clearfix">
        
        <div class="site-navbar">
            <!-- Logo -->
            <a href="{{ route('/') }}" class="site-logo" style="font-size: 20px;font-weight: 700;">
                {{-- <img src="{{ url('/') }}/theme/img/logo.png" alt=""> --}}
                <span style="font-size: 23px">E</span>NSURAZONE
            </a>
            <div class="header-right">
                <div class="header-info-box">
                    <div class="hib-icon">
                        <img src="{{ url('/') }}/theme/img/icons/phone.png" alt="" class="">
                    </div>
                    <div class="hib-text">
                        <h6>+546 990221 123</h6>
                        <p>contact@ensurazone.com</p>
                    </div>
                </div>
                <div class="header-info-box">
                    <div class="hib-icon">
                        <img src="{{ url('/') }}/theme/img/icons/map-marker.png" alt="" class="">
                    </div>
                    <div class="hib-text">
                        <h6>Main Str, no 23</h6>
                        <p>NY, New York PK 23589</p>
                    </div>
                </div>
                <button class="search-switch"><i class="fa fa-search"></i></button>
            </div>
            <!-- Menu -->
            <nav class="site-nav-menu">
                <ul>
                    <li class="@if(\Request::route()->getName() == '/') active @endif"><a href="{{ route('/') }}">Home</a></li>
                    {{-- <li><a href="about.html">About us</a></li> --}}
                    <li class="@if(\Request::route()->getName() == 'services') active @endif"><a href="{{ route('services') }}">Services</a>
                        {{-- <ul class="sub-menu">
                            <li><a href="elements.html">Elements</a></li>
                        </ul> --}}
                    </li>
                     
                    {{-- <li><a href="contact.html">Contact</a></li> --}}
                </ul>
            </nav>

        </div>
    </header>
    