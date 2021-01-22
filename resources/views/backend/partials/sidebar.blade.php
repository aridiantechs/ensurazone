<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">
    <!-- begin:: Aside -->
    <div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
        <div class="kt-aside__brand-logo">
            <a href="{{ route('dashboard') }}">
             <h4>{{ app_name() }}</h4>
            </a>
        </div>
        <div class="kt-aside__brand-tools">
            {{-- <button class="kt-aside__brand-aside-toggler" id="kt_aside_toggler">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon id="Shape" points="0 0 24 0 24 24 0 24"/>
                            <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" id="Path-94" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) "/>
                            <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" id="Path-94" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) "/>
                        </g>
                    </svg>
                </span>
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon id="Shape" points="0 0 24 0 24 24 0 24"/>
                            <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" id="Path-94" fill="#000000" fill-rule="nonzero"/>
                            <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" id="Path-94" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "/>
                        </g>
                    </svg>
                </span>
            </button> --}}
            
                <button class="kt-aside__brand-aside-toggler kt-aside__brand-aside-toggler--left" id="kt_aside_toggler"><span></span></button>
                
        </div>
    </div>
    <!-- end:: Aside -->    <!-- begin:: Aside Menu -->
    <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
        <div 
            id="kt_aside_menu"
            class="kt-aside-menu kt-scroll ps ps--active-y"
            data-ktmenu-vertical="1"
            data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500"
            style="height: 500px"
            >
            <ul class="kt-menu__nav ">
             
               
                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"  data-ktmenu-submenu-toggle="hover">
                    <a  href="{{ route('dashboard') }}" class="kt-menu__link kt-menu__toggle">
                        <span class="kt-menu__link-icon">
                        
                            <div class="kt-demo-icon__preview">
                                  <img src="{{ asset('backend\assets\media\icons\dashboard.png') }}" alt="icon">
                            </div>
                      
                
                        </span>
                        <span class="kt-menu__link-text">Dashboard</span>
                    </a>
                 
                </li>



                <li class="kt-menu__section ">
                    <h4 class="kt-menu__section-text">Remote Assessment</h4>
                    <i class="kt-menu__section-icon flaticon-more-v2"></i>
                </li>
                <li class="kt-menu__item  kt-menu__item--submenu {{Request::routeIs('backend.remote-assessment-inquiries*','backend.inquiry-details*')?'kt-menu__item--open' : ''}}" aria-haspopup="true"  data-ktmenu-submenu-toggle="hover">
                    <a  href="javascript:;" class="kt-menu__link kt-menu__toggle">
                        <span class="kt-menu__link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect id="bound" x="0" y="0" width="24" height="24"/>
                                    <path d="M5,6 L19,6 C19.5522847,6 20,6.44771525 20,7 L20,17 L4,17 L4,7 C4,6.44771525 4.44771525,6 5,6 Z" id="Combined-Shape" fill="#000000"/>
                                    <rect id="Rectangle" fill="#000000" opacity="0.3" x="1" y="18" width="22" height="1" rx="0.5"/>
                                </g>
                            </svg>
                        </span>
                        <span class="kt-menu__link-text">Inquiries</span><i class="kt-menu__ver-arrow la la-angle-right"></i>
                    </a>
                    <div class="kt-menu__submenu ">
                        <span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true" ><span class="kt-menu__link"><span class="kt-menu__link-text">Remote Assessment</span></span></li>
                            <li class="kt-menu__item " aria-haspopup="true" ><a  href="{{ route('backend.remote-assessment-inquiries.index') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">New Inquiries</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true" ><a  href="{{ route('backend.remote-assessment-inquiries.index') }}?q=in_process" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">In Process</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true" ><a  href="{{ route('backend.remote-assessment-inquiries.index') }}?q=completed" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Completed</span></a></li>

                            
                            
                        </ul>
                    </div>
                </li>


                {{-- <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"  data-ktmenu-submenu-toggle="hover">
                    <a  href="{{ route('remote-assessment-contracts') }}" class="kt-menu__link kt-menu__toggle">
                        <span class="kt-menu__link-icon">
                        
                            <div class="kt-menu__link-icon">
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect id="bound" x="0" y="0" width="24" height="24"/>
                                        <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" id="Combined-Shape" fill="#000000" opacity="0.3"/>
                                        <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" id="Combined-Shape" fill="#000000"/>
                                        <rect id="Rectangle-152" fill="#000000" opacity="0.3" x="10" y="9" width="7" height="2" rx="1"/>
                                        <rect id="Rectangle-152-Copy-2" fill="#000000" opacity="0.3" x="7" y="9" width="2" height="2" rx="1"/>
                                        <rect id="Rectangle-152-Copy-3" fill="#000000" opacity="0.3" x="7" y="13" width="2" height="2" rx="1"/>
                                        <rect id="Rectangle-152-Copy" fill="#000000" opacity="0.3" x="10" y="13" width="7" height="2" rx="1"/>
                                        <rect id="Rectangle-152-Copy-5" fill="#000000" opacity="0.3" x="7" y="17" width="2" height="2" rx="1"/>
                                        <rect id="Rectangle-152-Copy-4" fill="#000000" opacity="0.3" x="10" y="17" width="7" height="2" rx="1"/>
                                    </g>
                                </svg>
                            </div>
                        
                
                        </span>
                        <span class="kt-menu__link-text">Contracts</span>
                    </a>
                    
                </li> --}}

                                 
                                                

                <li class="kt-menu__section ">
                    <h4 class="kt-menu__section-text">GroundProof</h4>
                    <i class="kt-menu__section-icon flaticon-more-v2"></i>
                </li>
                <li class="kt-menu__item  kt-menu__item--submenu {{Request::routeIs('backend.groundproof-inquiries*')?'kt-menu__item--open' : ''}}" aria-haspopup="true"  data-ktmenu-submenu-toggle="hover">
                    <a  href="javascript:;" class="kt-menu__link kt-menu__toggle">
                        <span class="kt-menu__link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                    <path d="M13.6855025,18.7082217 C15.9113859,17.8189707 18.682885,17.2495635 22,17 C22,16.9325178 22,13.1012863 22,5.50630526 L21.9999762,5.50630526 C21.9999762,5.23017604 21.7761292,5.00632908 21.5,5.00632908 C21.4957817,5.00632908 21.4915635,5.00638247 21.4873465,5.00648922 C18.658231,5.07811173 15.8291155,5.74261533 13,7 C13,7.04449645 13,10.79246 13,18.2438906 L12.9999854,18.2438906 C12.9999854,18.520041 13.2238496,18.7439052 13.5,18.7439052 C13.5635398,18.7439052 13.6264972,18.7317946 13.6855025,18.7082217 Z" id="Combined-Shape" fill="#000000"></path>
                                    <path d="M10.3144829,18.7082217 C8.08859955,17.8189707 5.31710038,17.2495635 1.99998542,17 C1.99998542,16.9325178 1.99998542,13.1012863 1.99998542,5.50630526 L2.00000925,5.50630526 C2.00000925,5.23017604 2.22385621,5.00632908 2.49998542,5.00632908 C2.50420375,5.00632908 2.5084219,5.00638247 2.51263888,5.00648922 C5.34175439,5.07811173 8.17086991,5.74261533 10.9999854,7 C10.9999854,7.04449645 10.9999854,10.79246 10.9999854,18.2438906 L11,18.2438906 C11,18.520041 10.7761358,18.7439052 10.4999854,18.7439052 C10.4364457,18.7439052 10.3734882,18.7317946 10.3144829,18.7082217 Z" id="Path-41-Copy" fill="#000000" opacity="0.3"></path>
                                </g>
                            </svg>
                        </span>
                        <span class="kt-menu__link-text">Inquiries</span><i class="kt-menu__ver-arrow la la-angle-right"></i>
                    </a>
                    <div class="kt-menu__submenu ">
                        <span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true" ><span class="kt-menu__link"><span class="kt-menu__link-text">GroundProof</span></span></li>
                            <li class="kt-menu__item " aria-haspopup="true" ><a  href="{{ route('backend.groundproof-inquiries.index') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">New Inquiries</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true" ><a  href="{{ route('backend.groundproof-inquiries.index') }}?q=in_process" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">In Process</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true" ><a  href="{{ route('backend.groundproof-inquiries.index') }}?q=completed" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Completed</span></a></li>
                            
                        </ul>
                    </div>
                </li>

                <li class="kt-menu__section ">
                    <h4 class="kt-menu__section-text">Mitigation</h4>
                    <i class="kt-menu__section-icon flaticon-more-v2"></i>
                </li>
                <li class="kt-menu__item  kt-menu__item--submenu {{Request::routeIs('backend.mitigation-inquiries*')?'kt-menu__item--open' : ''}}" aria-haspopup="true"  data-ktmenu-submenu-toggle="hover">
                    <a  href="javascript:;" class="kt-menu__link kt-menu__toggle">
                        <span class="kt-menu__link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                    <path d="M13.6855025,18.7082217 C15.9113859,17.8189707 18.682885,17.2495635 22,17 C22,16.9325178 22,13.1012863 22,5.50630526 L21.9999762,5.50630526 C21.9999762,5.23017604 21.7761292,5.00632908 21.5,5.00632908 C21.4957817,5.00632908 21.4915635,5.00638247 21.4873465,5.00648922 C18.658231,5.07811173 15.8291155,5.74261533 13,7 C13,7.04449645 13,10.79246 13,18.2438906 L12.9999854,18.2438906 C12.9999854,18.520041 13.2238496,18.7439052 13.5,18.7439052 C13.5635398,18.7439052 13.6264972,18.7317946 13.6855025,18.7082217 Z" id="Combined-Shape" fill="#000000"></path>
                                    <path d="M10.3144829,18.7082217 C8.08859955,17.8189707 5.31710038,17.2495635 1.99998542,17 C1.99998542,16.9325178 1.99998542,13.1012863 1.99998542,5.50630526 L2.00000925,5.50630526 C2.00000925,5.23017604 2.22385621,5.00632908 2.49998542,5.00632908 C2.50420375,5.00632908 2.5084219,5.00638247 2.51263888,5.00648922 C5.34175439,5.07811173 8.17086991,5.74261533 10.9999854,7 C10.9999854,7.04449645 10.9999854,10.79246 10.9999854,18.2438906 L11,18.2438906 C11,18.520041 10.7761358,18.7439052 10.4999854,18.7439052 C10.4364457,18.7439052 10.3734882,18.7317946 10.3144829,18.7082217 Z" id="Path-41-Copy" fill="#000000" opacity="0.3"></path>
                                </g>
                            </svg>
                        </span>
                        <span class="kt-menu__link-text">Inquiries</span><i class="kt-menu__ver-arrow la la-angle-right"></i>
                    </a>
                    <div class="kt-menu__submenu ">
                        <span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true" ><span class="kt-menu__link"><span class="kt-menu__link-text">Mitigation</span></span></li>
                            <li class="kt-menu__item " aria-haspopup="true" ><a  href="{{ route('backend.mitigation-inquiries.index') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">New Inquiries</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true" ><a  href="{{ route('backend.mitigation-inquiries.index') }}?q=in_process" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">In Process</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true" ><a  href="{{ route('backend.mitigation-inquiries.index') }}?q=completed" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Completed</span></a></li>
                            
                        </ul>
                    </div>
                </li>

                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"  data-ktmenu-submenu-toggle="hover">
                    <a  href="{{ route('mitigation-plan-contracts') }}" class="kt-menu__link kt-menu__toggle">
                        <span class="kt-menu__link-icon">
                                                        
                            <div class="kt-menu__link-icon">
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect id="bound" x="0" y="0" width="24" height="24"/>
                                        <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" id="Combined-Shape" fill="#000000" opacity="0.3"/>
                                        <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" id="Combined-Shape" fill="#000000"/>
                                        <rect id="Rectangle-152" fill="#000000" opacity="0.3" x="10" y="9" width="7" height="2" rx="1"/>
                                        <rect id="Rectangle-152-Copy-2" fill="#000000" opacity="0.3" x="7" y="9" width="2" height="2" rx="1"/>
                                        <rect id="Rectangle-152-Copy-3" fill="#000000" opacity="0.3" x="7" y="13" width="2" height="2" rx="1"/>
                                        <rect id="Rectangle-152-Copy" fill="#000000" opacity="0.3" x="10" y="13" width="7" height="2" rx="1"/>
                                        <rect id="Rectangle-152-Copy-5" fill="#000000" opacity="0.3" x="7" y="17" width="2" height="2" rx="1"/>
                                        <rect id="Rectangle-152-Copy-4" fill="#000000" opacity="0.3" x="10" y="17" width="7" height="2" rx="1"/>
                                    </g>
                                </svg>
                            </div>
                      
                
                        </span>
                        <span class="kt-menu__link-text">Contracts</span>
                    </a>
                 
                </li>
                
                

                <li class="kt-menu__section ">
                    <h4 class="kt-menu__section-text">Reports</h4>
                    <i class="kt-menu__section-icon flaticon-more-v2"></i>
                </li>
                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"  data-ktmenu-submenu-toggle="hover">
                    <a  href="javascript:;" class="kt-menu__link kt-menu__toggle">
                        <span class="kt-menu__link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                    <rect id="Rectangle-62-Copy" fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5"></rect>
                                    <rect id="Rectangle-62-Copy-2" fill="#000000" x="8" y="9" width="3" height="11" rx="1.5"></rect>
                                    <rect id="Rectangle-62-Copy-4" fill="#000000" x="18" y="11" width="3" height="9" rx="1.5"></rect>
                                    <rect id="Rectangle-62-Copy-3" fill="#000000" x="3" y="13" width="3" height="7" rx="1.5"></rect>
                                </g>
                            </svg>
                        </span>
                        <span class="kt-menu__link-text">Reports</span><i class="kt-menu__ver-arrow la la-angle-right"></i>
                    </a>
                    <div class="kt-menu__submenu ">
                        <span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true" ><span class="kt-menu__link"><span class="kt-menu__link-text">Reports</span></span></li>
                            <li class="kt-menu__item " aria-haspopup="true" ><a  href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">R-A Reports</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true" ><a  href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">M-P Reports</span></a></li>
                            
                        </ul>
                    </div>
                </li>
                
                

                <li class="kt-menu__section ">
                    <h4 class="kt-menu__section-text">Contractors</h4>
                    <i class="kt-menu__section-icon flaticon-more-v2"></i>
                </li>
                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"  data-ktmenu-submenu-toggle="hover">
                    <a  href="{{ route('mitigation-plan-contracts') }}" class="kt-menu__link kt-menu__toggle">
                        <span class="kt-menu__link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect id="bound" x="0" y="0" width="24" height="24"/>
                                    <path d="M15.2426407,15.8284271 L21.6066017,9.46446609 L23.0208153,10.8786797 L16.6568542,17.2426407 L15.2426407,15.8284271 Z M1.80761184,16.5355339 L11.7071068,6.63603897 C12.0976311,6.24551468 12.7307961,6.24551468 13.1213203,6.63603897 L14.5355339,8.05025253 C14.9260582,8.44077682 14.9260582,9.0739418 14.5355339,9.46446609 L4.63603897,19.363961 C4.24551468,19.7544853 3.6123497,19.7544853 3.22182541,19.363961 L1.80761184,17.9497475 C1.41708755,17.5592232 1.41708755,16.9260582 1.80761184,16.5355339 Z M15.9497475,3.80761184 L17.363961,5.22182541 C17.7544853,5.6123497 17.7544853,6.24551468 17.363961,6.63603897 L16.6568542,7.34314575 C16.26633,7.73367004 15.633165,7.73367004 15.2426407,7.34314575 L13.8284271,5.92893219 C13.4379028,5.5384079 13.4379028,4.90524292 13.8284271,4.51471863 L14.5355339,3.80761184 C14.9260582,3.41708755 15.5592232,3.41708755 15.9497475,3.80761184 Z" id="Combined-Shape" fill="#000000" opacity="0.3"/>
                                    <path d="M19.3284271,3.55025253 C16.9950938,4.88358587 15.3284271,5.55025253 14.3284271,5.55025253 C13.3284271,5.55025253 11.3284271,5.55025253 8.32842712,5.55025253 L8.32842712,10.5502525 C10.9950938,10.5502525 12.9950938,10.5502525 14.3284271,10.5502525 C15.6617605,10.5502525 17.3284271,11.2169192 19.3284271,12.5502525 L19.3284271,3.55025253 Z" id="Path-44" fill="#000000" transform="translate(13.828427, 8.050253) rotate(-675.000000) translate(-13.828427, -8.050253) "/>
                                </g>
                            </svg>
                        </span>
                        <span class="kt-menu__link-text">Contractors</span><i class="kt-menu__ver-arrow la la-angle-right"></i>
                    </a>
                    <div class="kt-menu__submenu ">
                        <span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true" ><span class="kt-menu__link"><span class="kt-menu__link-text">Contractors</span></span></li>
                            <li class="kt-menu__item " aria-haspopup="true" ><a  href="{{ route('contractors') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Contractors List</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true" ><a  href="{{ route('contractors') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Add New</span></a></li>
                            
                        </ul>
                    </div>
                </li>
                
                
                @role('superadmin')
                    <li class="kt-menu__section ">
                        <h4 class="kt-menu__section-text">Users</h4>
                        <i class="kt-menu__section-icon flaticon-more-v2"></i>
                    </li>
                    <li class="kt-menu__item  kt-menu__item--submenu {{Request::routeIs('backend.user*')?'kt-menu__item--open' : ''}}" aria-haspopup="true"  data-ktmenu-submenu-toggle="hover">
                        <a  href="javascript:;" class="kt-menu__link kt-menu__toggle">
                            <span class="kt-menu__link-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon id="Shape" points="0 0 24 0 24 24 0 24"/>
                                        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" id="Mask" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" id="Mask-Copy" fill="#000000" fill-rule="nonzero"/>
                                    </g>
                                </svg>
                            </span>
                            <span class="kt-menu__link-text">Users</span><i class="kt-menu__ver-arrow la la-angle-right"></i>
                        </a>
                        <div class="kt-menu__submenu ">
                            <span class="kt-menu__arrow"></span>
                            <ul class="kt-menu__subnav">
                                <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true" ><span class="kt-menu__link"><span class="kt-menu__link-text">Users</span></span></li>
                                <li class="kt-menu__item " aria-haspopup="true" ><a  href="{{ route('backend.user.index') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Users List</span></a></li>
                                <li class="kt-menu__item " aria-haspopup="true" ><a  href="{{ route('backend.user.create') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dsot"><span></span></i><span class="kt-menu__link-text">Add New</span></a></li>
                                
                            </ul>
                        </div>
                    </li>
                @endrole
                
                
                
                
                <li class="kt-menu__section ">
                    <h4 class="kt-menu__section-text">Insurance Companies</h4>
                    <i class="kt-menu__section-icon flaticon-more-v2"></i>
                </li>
                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"  data-ktmenu-submenu-toggle="hover">
                    <a  href="javascript:;" class="kt-menu__link kt-menu__toggle">
                        <span class="kt-menu__link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect id="bound" x="0" y="0" width="24" height="24"/>
                                    <path d="M13.5,21 L13.5,18 C13.5,17.4477153 13.0522847,17 12.5,17 L11.5,17 C10.9477153,17 10.5,17.4477153 10.5,18 L10.5,21 L5,21 L5,4 C5,2.8954305 5.8954305,2 7,2 L17,2 C18.1045695,2 19,2.8954305 19,4 L19,21 L13.5,21 Z M9,4 C8.44771525,4 8,4.44771525 8,5 L8,6 C8,6.55228475 8.44771525,7 9,7 L10,7 C10.5522847,7 11,6.55228475 11,6 L11,5 C11,4.44771525 10.5522847,4 10,4 L9,4 Z M14,4 C13.4477153,4 13,4.44771525 13,5 L13,6 C13,6.55228475 13.4477153,7 14,7 L15,7 C15.5522847,7 16,6.55228475 16,6 L16,5 C16,4.44771525 15.5522847,4 15,4 L14,4 Z M9,8 C8.44771525,8 8,8.44771525 8,9 L8,10 C8,10.5522847 8.44771525,11 9,11 L10,11 C10.5522847,11 11,10.5522847 11,10 L11,9 C11,8.44771525 10.5522847,8 10,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 L8,14 C8,14.5522847 8.44771525,15 9,15 L10,15 C10.5522847,15 11,14.5522847 11,14 L11,13 C11,12.4477153 10.5522847,12 10,12 L9,12 Z M14,12 C13.4477153,12 13,12.4477153 13,13 L13,14 C13,14.5522847 13.4477153,15 14,15 L15,15 C15.5522847,15 16,14.5522847 16,14 L16,13 C16,12.4477153 15.5522847,12 15,12 L14,12 Z" id="Combined-Shape" fill="#000000"/>
                                    <rect id="Rectangle-Copy-2" fill="#FFFFFF" x="13" y="8" width="3" height="3" rx="1"/>
                                    <path d="M4,21 L20,21 C20.5522847,21 21,21.4477153 21,22 L21,22.4 C21,22.7313708 20.7313708,23 20.4,23 L3.6,23 C3.26862915,23 3,22.7313708 3,22.4 L3,22 C3,21.4477153 3.44771525,21 4,21 Z" id="Rectangle-2" fill="#000000" opacity="0.3"/>
                                </g>
                            </svg>
                        </span>
                        <span class="kt-menu__link-text">Companies</span><i class="kt-menu__ver-arrow la la-angle-right"></i>
                    </a>
                    <div class="kt-menu__submenu ">
                        <span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true" ><span class="kt-menu__link"><span class="kt-menu__link-text">Insurance Companies</span></span></li>
                            <li class="kt-menu__item " aria-haspopup="true" ><a  href="{{ route('companies') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Companies List</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true" ><a  href="{{ route('companies') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Add New</span></a></li>
                            
                        </ul>
                    </div>
                </li>
                
              
            </ul>
        </div>
    </div>
    <!-- end:: Aside Menu -->               
</div>