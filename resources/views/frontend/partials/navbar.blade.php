
    <header class="header-section clearfix">
        
        <div class="site-navbar">
            <!-- Logo -->
            <a href="{{ route('/') }}" class="site-logo" style="font-size: 20px;font-weight: 700;">
                <img src="{{ asset('images/ensurazone.png') }}" alt="">
                {{-- <span style="font-size: 23px">E</span>NSURAZONE --}}
            </a>
            <div class="header-right">
                <div class="header-info-box">
                    <div class="hib-icon">
                        <img src="{{ url('/') }}/theme/img/icons/phone.png" alt="" class="">
                    </div>
                    <div class="hib-text">
                        <h6>775-737-1355</h6>
                        <p>contact@ensurazone.com</p>
                    </div>
                </div>
                <div class="header-info-box">
                    <div class="hib-icon">
                        <img src="{{ url('/') }}/theme/img/icons/map-marker.png" alt="" class="">
                    </div>
                    <div class="hib-text">
                        <h6>401 Ryland St, Suite 100</h6>
                        <p>Reno, NV 89502, US</p>
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
                        <ul class="sub-menu">
                            <li><a href="elements.html">Elements</a></li>
                        </ul>
                    </li>
                     
                    <li><a href="{{ route('blogs') }}">Blogs</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    @if(Auth::guest())
                        <li><a href="{{ route('register') }}">Join Now</a></li>
                    @else
                        <li>
                            <a href="{{ route('/') }}">Dashboard</a>
                            <ul class="sub-menu">
                                <li class="m-menu__sub-item"><a href="@hasanyrole('superadmin|sme-1|sme-2') {{route('backend.dashboard')}} @else {{route('my_account.index')}} @endhasanyrole">Account</a></li>
                                <li class="m-menu__sub-item">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                        
                    @endif
                </ul>
            </nav>

        </div>
    </header>
    