@extends('layout')
@section('title' , "Inicio")
@section('content')

@if(session('mensaje'))  
  <!-- <script> alert('Identificacion Ya Esta Registrada') </script> -->
    <div class="alert alert-danger" role="alert">
        {{session('mensaje')}}
    </div>  
@endif

      @switch (Auth::user()->role_id) 
       
       @case(1)  <div class="d-flex flex-column-fluid">
              <!--begin::Container-->
               <div class="container">
                
                <div class="d-flex flex-row">
                  <!--begin::Aside-->
                  <div class="flex-row-auto offcanvas-mobile w-300px w-xl-325px" id="kt_profile_aside">
                    <!--begin::Nav Panels Wizard 2-->
                    <div class="card card-custom gutter-b">
                      <!--begin::Body-->
                      <div class="card-body pt-4">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end">
                          <div class="dropdown dropdown-inline">
                            <a href="#" class="btn btn-icon-primary btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="svg-icon svg-icon-lg">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Text/Dots.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1">
                                    <rect x="14" y="9" width="6" height="6" rx="3" fill="black" />
                                    <rect x="3" y="9" width="6" height="6" rx="3" fill="black" fill-opacity="0.7" />
                                  </g>
                                </svg>
                                <!--end::Svg Icon-->
                              </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                              <!--begin::Navigation-->
                              <ul class="navi navi-hover py-5">
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <span class="svg-icon svg-icon-md svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                          </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                      </span>
                                    </span>
                                    <span class="navi-text">Member</span>
                                  </a>
                                </li>
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <span class="svg-icon svg-icon-md svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Clipboard-check.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3" />
                                            <path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000" />
                                            <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000" />
                                          </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                      </span>
                                    </span>
                                    <span class="navi-text">Contact</span>
                                  </a>
                                </li>
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <span class="svg-icon svg-icon-md svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Time-schedule.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M10.9630156,7.5 L11.0475062,7.5 C11.3043819,7.5 11.5194647,7.69464724 11.5450248,7.95024814 L12,12.5 L15.2480695,14.3560397 C15.403857,14.4450611 15.5,14.6107328 15.5,14.7901613 L15.5,15 C15.5,15.2109164 15.3290185,15.3818979 15.1181021,15.3818979 C15.0841582,15.3818979 15.0503659,15.3773725 15.0176181,15.3684413 L10.3986612,14.1087258 C10.1672824,14.0456225 10.0132986,13.8271186 10.0316926,13.5879956 L10.4644883,7.96165175 C10.4845267,7.70115317 10.7017474,7.5 10.9630156,7.5 Z" fill="#000000" />
                                            <path d="M7.38979581,2.8349582 C8.65216735,2.29743306 10.0413491,2 11.5,2 C17.2989899,2 22,6.70101013 22,12.5 C22,18.2989899 17.2989899,23 11.5,23 C5.70101013,23 1,18.2989899 1,12.5 C1,11.5151324 1.13559454,10.5619345 1.38913364,9.65805651 L3.31481075,10.1982117 C3.10672013,10.940064 3,11.7119264 3,12.5 C3,17.1944204 6.80557963,21 11.5,21 C16.1944204,21 20,17.1944204 20,12.5 C20,7.80557963 16.1944204,4 11.5,4 C10.54876,4 9.62236069,4.15592757 8.74872191,4.45446326 L9.93948308,5.87355717 C10.0088058,5.95617272 10.0495583,6.05898805 10.05566,6.16666224 C10.0712834,6.4423623 9.86044965,6.67852665 9.5847496,6.69415008 L4.71777931,6.96995273 C4.66931162,6.97269931 4.62070229,6.96837279 4.57348157,6.95710938 C4.30487471,6.89303938 4.13906482,6.62335149 4.20313482,6.35474463 L5.33163823,1.62361064 C5.35654118,1.51920756 5.41437908,1.4255891 5.49660017,1.35659741 C5.7081375,1.17909652 6.0235153,1.2066885 6.2010162,1.41822583 L7.38979581,2.8349582 Z" fill="#000000" opacity="0.3" />
                                          </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                      </span>
                                    </span>
                                    <span class="navi-text">Event</span>
                                    <span class="navi-link-badge">
                                      <span class="label label-light-primary label-inline font-weight-bold">new</span>
                                    </span>
                                  </a>
                                </li>
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <span class="svg-icon svg-icon-md svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Git3.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M7,11 L15,11 C16.1045695,11 17,10.1045695 17,9 L17,8 L19,8 L19,9 C19,11.209139 17.209139,13 15,13 L7,13 L7,15 C7,15.5522847 6.55228475,16 6,16 C5.44771525,16 5,15.5522847 5,15 L5,9 C5,8.44771525 5.44771525,8 6,8 C6.55228475,8 7,8.44771525 7,9 L7,11 Z" fill="#000000" opacity="0.3" />
                                            <path d="M6,21 C7.1045695,21 8,20.1045695 8,19 C8,17.8954305 7.1045695,17 6,17 C4.8954305,17 4,17.8954305 4,19 C4,20.1045695 4.8954305,21 6,21 Z M6,23 C3.790861,23 2,21.209139 2,19 C2,16.790861 3.790861,15 6,15 C8.209139,15 10,16.790861 10,19 C10,21.209139 8.209139,23 6,23 Z" fill="#000000" fill-rule="nonzero" />
                                            <path d="M18,7 C19.1045695,7 20,6.1045695 20,5 C20,3.8954305 19.1045695,3 18,3 C16.8954305,3 16,3.8954305 16,5 C16,6.1045695 16.8954305,7 18,7 Z M18,9 C15.790861,9 14,7.209139 14,5 C14,2.790861 15.790861,1 18,1 C20.209139,1 22,2.790861 22,5 C22,7.209139 20.209139,9 18,9 Z" fill="#000000" fill-rule="nonzero" />
                                            <path d="M6,7 C7.1045695,7 8,6.1045695 8,5 C8,3.8954305 7.1045695,3 6,3 C4.8954305,3 4,3.8954305 4,5 C4,6.1045695 4.8954305,7 6,7 Z M6,9 C3.790861,9 2,7.209139 2,5 C2,2.790861 3.790861,1 6,1 C8.209139,1 10,2.790861 10,5 C10,7.209139 8.209139,9 6,9 Z" fill="#000000" fill-rule="nonzero" />
                                          </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                      </span>
                                    </span>
                                    <span class="navi-text">Task</span>
                                  </a>
                                </li>
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <span class="svg-icon svg-icon-md svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Settings4.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M18.6225,9.75 L18.75,9.75 C19.9926407,9.75 21,10.7573593 21,12 C21,13.2426407 19.9926407,14.25 18.75,14.25 L18.6854912,14.249994 C18.4911876,14.250769 18.3158978,14.366855 18.2393549,14.5454486 C18.1556809,14.7351461 18.1942911,14.948087 18.3278301,15.0846699 L18.372535,15.129375 C18.7950334,15.5514036 19.03243,16.1240792 19.03243,16.72125 C19.03243,17.3184208 18.7950334,17.8910964 18.373125,18.312535 C17.9510964,18.7350334 17.3784208,18.97243 16.78125,18.97243 C16.1840792,18.97243 15.6114036,18.7350334 15.1896699,18.3128301 L15.1505513,18.2736469 C15.008087,18.1342911 14.7951461,18.0956809 14.6054486,18.1793549 C14.426855,18.2558978 14.310769,18.4311876 14.31,18.6225 L14.31,18.75 C14.31,19.9926407 13.3026407,21 12.06,21 C10.8173593,21 9.81,19.9926407 9.81,18.75 C9.80552409,18.4999185 9.67898539,18.3229986 9.44717599,18.2361469 C9.26485393,18.1556809 9.05191298,18.1942911 8.91533009,18.3278301 L8.870625,18.372535 C8.44859642,18.7950334 7.87592081,19.03243 7.27875,19.03243 C6.68157919,19.03243 6.10890358,18.7950334 5.68746499,18.373125 C5.26496665,17.9510964 5.02757002,17.3784208 5.02757002,16.78125 C5.02757002,16.1840792 5.26496665,15.6114036 5.68716991,15.1896699 L5.72635306,15.1505513 C5.86570889,15.008087 5.90431906,14.7951461 5.82064513,14.6054486 C5.74410223,14.426855 5.56881236,14.310769 5.3775,14.31 L5.25,14.31 C4.00735931,14.31 3,13.3026407 3,12.06 C3,10.8173593 4.00735931,9.81 5.25,9.81 C5.50008154,9.80552409 5.67700139,9.67898539 5.76385306,9.44717599 C5.84431906,9.26485393 5.80570889,9.05191298 5.67216991,8.91533009 L5.62746499,8.870625 C5.20496665,8.44859642 4.96757002,7.87592081 4.96757002,7.27875 C4.96757002,6.68157919 5.20496665,6.10890358 5.626875,5.68746499 C6.04890358,5.26496665 6.62157919,5.02757002 7.21875,5.02757002 C7.81592081,5.02757002 8.38859642,5.26496665 8.81033009,5.68716991 L8.84944872,5.72635306 C8.99191298,5.86570889 9.20485393,5.90431906 9.38717599,5.82385306 L9.49484664,5.80114977 C9.65041313,5.71688974 9.7492905,5.55401473 9.75,5.3775 L9.75,5.25 C9.75,4.00735931 10.7573593,3 12,3 C13.2426407,3 14.25,4.00735931 14.25,5.25 L14.249994,5.31450877 C14.250769,5.50881236 14.366855,5.68410223 14.552824,5.76385306 C14.7351461,5.84431906 14.948087,5.80570889 15.0846699,5.67216991 L15.129375,5.62746499 C15.5514036,5.20496665 16.1240792,4.96757002 16.72125,4.96757002 C17.3184208,4.96757002 17.8910964,5.20496665 18.312535,5.626875 C18.7350334,6.04890358 18.97243,6.62157919 18.97243,7.21875 C18.97243,7.81592081 18.7350334,8.38859642 18.3128301,8.81033009 L18.2736469,8.84944872 C18.1342911,8.99191298 18.0956809,9.20485393 18.1761469,9.38717599 L18.1988502,9.49484664 C18.2831103,9.65041313 18.4459853,9.7492905 18.6225,9.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path d="M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000" />
                                          </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                      </span>
                                    </span>
                                    <span class="navi-text">Settings</span>
                                  </a>
                                </li>
                                <li class="navi-separator my-3"></li>
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <span class="svg-icon svg-icon-md svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Info-circle.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                                            <rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
                                            <rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
                                          </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                      </span>
                                    </span>
                                    <span class="navi-text">Help</span>
                                  </a>
                                </li>
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <span class="svg-icon svg-icon-md svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Safe-chat.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M8,17 C8.55228475,17 9,17.4477153 9,18 L9,21 C9,21.5522847 8.55228475,22 8,22 L3,22 C2.44771525,22 2,21.5522847 2,21 L2,18 C2,17.4477153 2.44771525,17 3,17 L3,16.5 C3,15.1192881 4.11928813,14 5.5,14 C6.88071187,14 8,15.1192881 8,16.5 L8,17 Z M5.5,15 C4.67157288,15 4,15.6715729 4,16.5 L4,17 L7,17 L7,16.5 C7,15.6715729 6.32842712,15 5.5,15 Z" fill="#000000" opacity="0.3" />
                                            <path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000" />
                                          </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                      </span>
                                    </span>
                                    <span class="navi-text">Privacy</span>
                                    <span class="navi-link-badge">
                                      <span class="label label-light-danger label-rounded font-weight-bold">5</span>
                                    </span>
                                  </a>
                                </li>
                              </ul>
                              <!--end::Navigation-->
                            </div>
                          </div>
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::User-->
                        <div class="d-flex align-items-center">
                          <div class="symbol symbol-60 symbol-xxl-90 mr-5 align-self-start align-self-xxl-center">
                            <div class="symbol-label" style="background-image:url('vendor/assets/media/users/150-3.jpg')"></div>
                            <i class="symbol-badge bg-success"></i>
                          </div>
                          <div>
                            <a href="#" class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary">{{ $user->profile1(auth()->user()->id)->name.' '.$user->profile1(auth()->user()->id)->lastname }}</a>
                            
                          </div>
                        </div>
                        <!--end::User-->
                        <!--begin::Contacts-->
                        <div class="py-8">
                          <div class="d-flex align-items-center mb-2">
                            <span class="flex-shrink-0 mr-2">
                              <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Active-call.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M13.0799676,14.7839934 L15.2839934,12.5799676 C15.8927139,11.9712471 16.0436229,11.0413042 15.6586342,10.2713269 L15.5337539,10.0215663 C15.1487653,9.25158901 15.2996742,8.3216461 15.9083948,7.71292558 L18.6411989,4.98012149 C18.836461,4.78485934 19.1530435,4.78485934 19.3483056,4.98012149 C19.3863063,5.01812215 19.4179321,5.06200062 19.4419658,5.11006808 L20.5459415,7.31801948 C21.3904962,9.0071287 21.0594452,11.0471565 19.7240871,12.3825146 L13.7252616,18.3813401 C12.2717221,19.8348796 10.1217008,20.3424308 8.17157288,19.6923882 L5.75709327,18.8875616 C5.49512161,18.8002377 5.35354162,18.5170777 5.4408655,18.2551061 C5.46541191,18.1814669 5.50676633,18.114554 5.56165376,18.0596666 L8.21292558,15.4083948 C8.8216461,14.7996742 9.75158901,14.6487653 10.5215663,15.0337539 L10.7713269,15.1586342 C11.5413042,15.5436229 12.4712471,15.3927139 13.0799676,14.7839934 Z" fill="#000000" />
                                    <path d="M14.1480759,6.00715131 L13.9566988,7.99797396 C12.4781389,7.8558405 11.0097207,8.36895892 9.93933983,9.43933983 C8.8724631,10.5062166 8.35911588,11.9685602 8.49664195,13.4426352 L6.50528978,13.6284215 C6.31304559,11.5678496 7.03283934,9.51741319 8.52512627,8.02512627 C10.0223249,6.52792766 12.0812426,5.80846733 14.1480759,6.00715131 Z M14.4980938,2.02230302 L14.313049,4.01372424 C11.6618299,3.76737046 9.03000738,4.69181803 7.1109127,6.6109127 C5.19447112,8.52735429 4.26985715,11.1545872 4.51274152,13.802405 L2.52110319,13.985098 C2.22450978,10.7517681 3.35562581,7.53777247 5.69669914,5.19669914 C8.04101739,2.85238089 11.2606138,1.72147333 14.4980938,2.02230302 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                  </g>
                                </svg>
                                <!--end::Svg Icon-->
                              </span>
                            </span>
                            <span class="text-muted font-weight-bold">+4567800090</span>
                          </div>
                          <div class="d-flex align-items-center mb-2">
                            <span class="flex-shrink-0 mr-2">
                              <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
                                  </g>
                                </svg>
                                <!--end::Svg Icon-->
                              </span>
                            </span>
                            <a href="#" class="text-muted text-hover-primary font-weight-bold">{{ auth()->user()->email }}</a>
                          </div>
                          <div class="d-flex align-items-center mb-2">
                            <span class="flex-shrink-0 mr-2">
                              <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Map/Marker1.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z" fill="#000000" fill-rule="nonzero" />
                                  </g>
                                </svg>
                                <!--end::Svg Icon-->
                              </span>
                            </span>
                            <a href="#" class="text-muted text-hover-primary font-weight-bold">Barcelona, Spain</a>
                          </div>
                        </div>
                        <!--end::Contacts-->
                        <!--begin::Nav-->
                        <div class="navi navi-bold navi-hover navi-active navi-link-rounded">
                          <div class="navi-item mb-2">
                            <a href="custom/apps/profile/profile-1/overview.html" class="navi-link py-4 active">
                              <span class="navi-icon mr-2">
                                <span class="svg-icon">
                                  <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <polygon points="0 0 24 0 24 24 0 24" />
                                      <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
                                      <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
                                    </g>
                                  </svg>
                                  <!--end::Svg Icon-->
                                </span>
                              </span>
                              <span class="navi-text font-size-lg">Profile Overview</span>
                            </a>
                          </div>
                          <div class="navi-item mb-2">
                            <a href="custom/apps/profile/profile-1/personal-information.html" class="navi-link py-4">
                              <span class="navi-icon mr-2">
                                <span class="svg-icon">
                                  <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <polygon points="0 0 24 0 24 24 0 24" />
                                      <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                      <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                    </g>
                                  </svg>
                                  <!--end::Svg Icon-->
                                </span>
                              </span>
                              <span class="navi-text font-size-lg">Personal Information</span>
                            </a>
                          </div>
                          <div class="navi-item mb-2">
                            <a href="custom/apps/profile/profile-1/account-information.html" class="navi-link py-4">
                              <span class="navi-icon mr-2">
                                <span class="svg-icon">
                                  <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <rect x="0" y="0" width="24" height="24" />
                                      <path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3" />
                                      <path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000" />
                                    </g>
                                  </svg>
                                  <!--end::Svg Icon-->
                                </span>
                              </span>
                              <span class="navi-text font-size-lg">Account Information</span>
                            </a>
                          </div>
                          
                          <div class="navi-item mb-2">
                            <a href="#" class="navi-link py-4" data-toggle="tooltip" title="Coming soon..." data-placement="right">
                              <span class="navi-icon mr-2">
                                <span class="svg-icon">
                                  <!--begin::Svg Icon | path:assets/media/svg/icons/Text/Article.svg-->
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <rect x="0" y="0" width="24" height="24" />
                                      <rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5" />
                                      <path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L12.5,10 C13.3284271,10 14,10.6715729 14,11.5 C14,12.3284271 13.3284271,13 12.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3" />
                                    </g>
                                  </svg>
                                  <!--end::Svg Icon-->
                                </span>
                              </span>
                              <span class="navi-text">Statements</span>
                            </a>
                          </div>
                        </div>
                        <!--end::Nav-->
                      </div>

                                        <!--end::Body-->
                    </div>
                    <!--end::Nav Panels Wizard 2-->
                  </div>

                  <div class="flex-row-fluid ml-lg-8">
                    <!--begin::Card-->
                    <div class="card card-custom card-stretch">
                      <!--begin::Header-->
                      <div class="card-header py-3">
                        <div class="card-title align-items-start flex-column">
                          <h3 class="card-label font-weight-bolder text-dark">Personal Information</h3>
                          <span class="text-muted font-weight-bold font-size-sm mt-1">Update your personal informaiton</span>
                        </div>
                        <div class="card-toolbar">
                          <button type="reset" class="btn btn-primary font-weight-bolder mr-2">Save Changes</button>
                          <button type="reset" class="btn btn-light-primary font-weight-bolder">Cancel</button>
                        </div>
                      </div>
                      <!--end::Header-->
                      <!--begin::Form-->
                      <form class="form">
                        <!--begin::Body-->
                        <div class="card-body">
                          <div class="row">
                            <label class="col-xl-3"></label>
                            <div class="col-lg-9 col-xl-6">
                              <h5 class="font-weight-bold mb-6">Customer Info</h5>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Photo</label>
                            <div class="col-lg-9 col-xl-6">
                              <div class="image-input image-input-empty image-input-outline" id="kt_image_5" style="background-image: url(vendor/assets/media/users/blank.png)">
 <div class="image-input-wrapper"></div>

 <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
  <i class="fa fa-pen icon-sm text-muted"></i>
  <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg"/>
  <input type="hidden" name="profile_avatar_remove"/>
 </label>

 <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
  <i class="ki ki-bold-close icon-xs text-muted"></i>
 </span>

 <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
  <i class="ki ki-bold-close icon-xs text-muted"></i>
 </span>
</div>
                              <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Name</label>
                            <div class="col-lg-9 col-xl-6">
                              <input class="form-control form-control-lg form-control-solid" type="text" value="{{ $user->profile1(auth()->user()->id)->name }}" />
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Last Name</label>
                            <div class="col-lg-9 col-xl-6">
                              <input class="form-control form-control-lg form-control-solid" type="text" value="{{ $user->profile1(auth()->user()->id)->lastname }}" />
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Birthday</label>
                            <div class="col-lg-9 col-xl-6">
                              <input class="form-control form-control-lg form-control-solid" type="date" value="{{ $user->profile1(auth()->user()->id)->birthday }}" />
                              
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-xl-3"></label>
                            <div class="col-lg-9 col-xl-6">
                              <h5 class="font-weight-bold mt-10 mb-6">Contact Info</h5>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Contact Phone</label>
                            <div class="col-lg-9 col-xl-6">
                              <div class="input-group input-group-lg input-group-solid">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <i class="la la-phone"></i>
                                  </span>
                                </div>
                                <input type="text" class="form-control form-control-lg form-control-solid" value="{{ $user->profile1(auth()->user()->id)->phone }}" placeholder="Phone" />
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Email Address</label>
                            <div class="col-lg-9 col-xl-6">
                              <div class="input-group input-group-lg input-group-solid">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <i class="la la-at"></i>
                                  </span>
                                </div>
                                <input type="text" class="form-control form-control-lg form-control-solid" value="{{ auth()->user()->email }}" placeholder="Email" />
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Display Name</label>
                            <div class="col-lg-9 col-xl-6">
                              <div class="input-group input-group-lg input-group-solid">
                                <input type="text" class="form-control form-control-lg form-control-solid" placeholder="Username" value="{{ $user->profile1(auth()->user()->id)->displayname }}" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--end::Body-->
                      </form>
                      <!--end::Form-->
                    </div>
                  </div>
              <!--end::Container-->
            </div>
            <!--end::Entry-->
          </div>    
    @break

    @case(3): <div class="d-flex flex-column-fluid">
              <!--begin::Container-->
               <div class="container">
                
                <div class="d-flex flex-row">
                  <!--begin::Aside-->
                  <div class="flex-row-auto offcanvas-mobile w-300px w-xl-325px" id="kt_profile_aside">
                    <!--begin::Nav Panels Wizard 2-->
                    <div class="card card-custom gutter-b">
                      <!--begin::Body-->
                      <div class="card-body pt-4">
                        <!--begin::Toolbar-->
                        
                        <!--end::Toolbar-->
                        <!--begin::User-->
                        <div class="d-flex align-items-center">
                          <div class="symbol symbol-60 symbol-xxl-90 mr-5 align-self-start align-self-xxl-center">
                            <div class="symbol-label" style="background-image:url('vendor/assets/media/users/150-3.jpg')"></div>
                            <i class="symbol-badge bg-success"></i>
                          </div>
                          <div>
                            <a href="#" class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary">{{ $user->profile1(auth()->user()->id)->name.' '.$user->profile1(auth()->user()->id)->lastname }}</a>
                            
                          </div>
                        </div>
                        <!--end::User-->
                        <!--begin::Contacts-->
                        <div class="py-8">
                          <div class="d-flex align-items-center mb-2">
                            <span class="flex-shrink-0 mr-2">
                              <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Active-call.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M13.0799676,14.7839934 L15.2839934,12.5799676 C15.8927139,11.9712471 16.0436229,11.0413042 15.6586342,10.2713269 L15.5337539,10.0215663 C15.1487653,9.25158901 15.2996742,8.3216461 15.9083948,7.71292558 L18.6411989,4.98012149 C18.836461,4.78485934 19.1530435,4.78485934 19.3483056,4.98012149 C19.3863063,5.01812215 19.4179321,5.06200062 19.4419658,5.11006808 L20.5459415,7.31801948 C21.3904962,9.0071287 21.0594452,11.0471565 19.7240871,12.3825146 L13.7252616,18.3813401 C12.2717221,19.8348796 10.1217008,20.3424308 8.17157288,19.6923882 L5.75709327,18.8875616 C5.49512161,18.8002377 5.35354162,18.5170777 5.4408655,18.2551061 C5.46541191,18.1814669 5.50676633,18.114554 5.56165376,18.0596666 L8.21292558,15.4083948 C8.8216461,14.7996742 9.75158901,14.6487653 10.5215663,15.0337539 L10.7713269,15.1586342 C11.5413042,15.5436229 12.4712471,15.3927139 13.0799676,14.7839934 Z" fill="#000000" />
                                    <path d="M14.1480759,6.00715131 L13.9566988,7.99797396 C12.4781389,7.8558405 11.0097207,8.36895892 9.93933983,9.43933983 C8.8724631,10.5062166 8.35911588,11.9685602 8.49664195,13.4426352 L6.50528978,13.6284215 C6.31304559,11.5678496 7.03283934,9.51741319 8.52512627,8.02512627 C10.0223249,6.52792766 12.0812426,5.80846733 14.1480759,6.00715131 Z M14.4980938,2.02230302 L14.313049,4.01372424 C11.6618299,3.76737046 9.03000738,4.69181803 7.1109127,6.6109127 C5.19447112,8.52735429 4.26985715,11.1545872 4.51274152,13.802405 L2.52110319,13.985098 C2.22450978,10.7517681 3.35562581,7.53777247 5.69669914,5.19669914 C8.04101739,2.85238089 11.2606138,1.72147333 14.4980938,2.02230302 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                  </g>
                                </svg>
                                <!--end::Svg Icon-->
                              </span>
                            </span>
                            <span class="text-muted font-weight-bold">{{ $user->profile1(auth()->user()->id)->phone }}</span>
                          </div>
                          <div class="d-flex align-items-center mb-2">
                            <span class="flex-shrink-0 mr-2">
                              <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
                                  </g>
                                </svg>
                                <!--end::Svg Icon-->
                              </span>
                            </span>
                            <a href="#" class="text-muted text-hover-primary font-weight-bold">{{ auth()->user()->email }}</a>
                          </div>
                          <div class="d-flex align-items-center mb-2">
                            <span class="flex-shrink-0 mr-2">
                              <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Map/Marker1.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z" fill="#000000" fill-rule="nonzero" />
                                  </g>
                                </svg>
                                <!--end::Svg Icon-->
                              </span>
                            </span>
                            <a href="#" class="text-muted text-hover-primary font-weight-bold">Barcelona, Spain</a>
                          </div>
                        </div>
                        <!--end::Contacts-->
                        <!--begin::Nav-->
                        <div class="navi navi-bold navi-hover navi-active navi-link-rounded">
                          <div class="navi-item mb-2">
                            <a href="custom/apps/profile/profile-1/overview.html" class="navi-link py-4 active">
                              <span class="navi-icon mr-2">
                                <span class="svg-icon">
                                  <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <polygon points="0 0 24 0 24 24 0 24" />
                                      <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                      <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                    </g>
                                  </svg>
                                  <!--end::Svg Icon-->
                                </span>
                              </span>
                              <span class="navi-text font-size-lg">My profile</span>
                            </a>
                          </div>
                          <div class="navi-item mb-2">
                            <a href="custom/apps/profile/profile-1/personal-information.html" class="navi-link py-4">
                              <span class="navi-icon mr-2">
                                <span class="svg-icon">
                                  <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <polygon points="0 0 24 0 24 24 0 24" />
                                      <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
                                      <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
                                    </g>
                                  </svg>
                                  <!--end::Svg Icon-->
                                </span>
                              </span>                              
                              <span class="navi-text font-size-lg">Schedule</span>
                            </a>
                          </div>
                          <div class="navi-item mb-2">
                            <a href="custom/apps/profile/profile-1/account-information.html" class="navi-link py-4">
                              <span class="navi-icon mr-2">
                                <span class="svg-icon">
                                  <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <rect x="0" y="0" width="24" height="24" />
                                      <path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3" />
                                      <path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000" />
                                    </g>
                                  </svg>
                                  <!--end::Svg Icon-->
                                </span>
                              </span>
                              <span class="navi-text font-size-lg">Fav super amigas</span>
                            </a>
                          </div>
                          
                          <div class="navi-item mb-2">
                            <a href="#" class="navi-link py-4" data-toggle="tooltip" title="Coming soon..." data-placement="right">
                              <span class="navi-icon mr-2">
                                <span class="svg-icon">
                                  <!--begin::Svg Icon | path:assets/media/svg/icons/Text/Article.svg-->
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <rect x="0" y="0" width="24" height="24" />
                                      <rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5" />
                                      <path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L12.5,10 C13.3284271,10 14,10.6715729 14,11.5 C14,12.3284271 13.3284271,13 12.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3" />
                                    </g>
                                  </svg>
                                  <!--end::Svg Icon-->
                                </span>
                              </span>
                              <span class="navi-text">profile settings</span>
                            </a>
                          </div>
                        </div>
                        <!--end::Nav-->
                      </div>

                                        <!--end::Body-->
                    </div>
                    <!--end::Nav Panels Wizard 2-->
                  </div>

                  <div class="flex-row-fluid ml-lg-8">
                    <!--begin::Card-->
                    <div class="row">
    <div class="col-lg-6">
        <!--begin::Card-->
        <div class="card card-custom card-stretch">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Next service <small>same height cards</small></h3>
                </div>
            </div>
            <div class="card-body">
                ...
            </div>
        </div>
        <!--end::Card-->
    </div>
    <div class="col-lg-6">
        <!--begin::Card-->
        <div class="card card-custom card-stretch">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">News <small>same height cards</small></h3>
                </div>
            </div>
            <div class="card-body">
                ...
            </div>
        </div>
        <!--end::Card-->
    </div>
   
</div>
<BR>
<div class="row">
    <div class="col-lg-6">
        <!--begin::Card-->
        <div class="card card-custom card-stretch">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Connect Whith <small>other Super Amigas</small></h3>
                </div>
            </div>
            <div class="card-body">
                ...
            </div>
        </div>
        <!--end::Card-->
    </div>
    <div class="col-lg-6">
        <!--begin::Card-->
        <div class="card card-custom card-stretch">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Ranking <small>same height cards</small></h3>
                </div>
            </div>
           
                      
                      <div class="card-body">
                        <!--begin::Example-->
                        <div class="example">
                          <p>Toggle a working modal demo by clicking the button below. It will slide down and fade in from the top of the page.</p>
                          <div class="example-preview">
                            <!-- Button trigger modal-->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Launch demo modal</button>
                            <!-- Modal-->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <i aria-hidden="true" class="ki ki-close"></i>
                                    </button>
                                  </div>
                                  <div class="modal-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
       
        <!--end::Card-->
    </div>
   
</div>


                  </div>
              <!--end::Container-->
            </div>

            <!--end::Entry-->
          </div>   

    @break

    @case(2): <div class="d-flex flex-column-fluid">
              <!--begin::Container-->
              <div class="container">
                <!--begin::Nav Panels Wizard 4-->
                <div class="card card-custom gutter-b">
                  <div class="card-body">
                    <!--begin::Top-->
                    <div class="d-flex">
                      <!--begin::Pic-->
                      <div class="flex-shrink-0 mr-7">
                        <div class="symbol symbol-50 symbol-lg-120">
                          <img alt="Pic" src="vendor/assets/media//users/150-11.jpg" />
                        </div>
                      </div>
                      <!--end::Pic-->
                      <!--begin: Info-->
                      <div class="flex-grow-1">
                        <!--begin::Title-->
                        <div class="d-flex align-items-center justify-content-between flex-wrap mt-2">
                          <!--begin::User-->
                          <div class="mr-3">
                            <!--begin::Name-->
                            <a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">{{ $user->profile1(auth()->user()->id)->name.' '.$user->profile1(auth()->user()->id)->lastname }}</a>
                            <!--end::Name-->
                            <!--begin::Contacts-->
                            <div class="d-flex flex-wrap my-2">
                              <a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                              <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
                                    <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                                  </g>
                                </svg>
                                <!--end::Svg Icon-->
                              </span>nick@wow.com</a>
                              <a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                              <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Lock.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <mask fill="white">
                                      <use xlink:href="#path-1" />
                                    </mask>
                                    <g />
                                    <path d="M7,10 L7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 L17,10 L18,10 C19.1045695,10 20,10.8954305 20,12 L20,18 C20,19.1045695 19.1045695,20 18,20 L6,20 C4.8954305,20 4,19.1045695 4,18 L4,12 C4,10.8954305 4.8954305,10 6,10 L7,10 Z M12,5 C10.3431458,5 9,6.34314575 9,8 L9,10 L15,10 L15,8 C15,6.34314575 13.6568542,5 12,5 Z" fill="#000000" />
                                  </g>
                                </svg>
                                <!--end::Svg Icon-->
                              </span>Manager</a>
                              <a href="#" class="text-muted text-hover-primary font-weight-bold">
                              <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Map/Marker2.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M9.82829464,16.6565893 C7.02541569,15.7427556 5,13.1079084 5,10 C5,6.13400675 8.13400675,3 12,3 C15.8659932,3 19,6.13400675 19,10 C19,13.1079084 16.9745843,15.7427556 14.1717054,16.6565893 L12,21 L9.82829464,16.6565893 Z M12,12 C13.1045695,12 14,11.1045695 14,10 C14,8.8954305 13.1045695,8 12,8 C10.8954305,8 10,8.8954305 10,10 C10,11.1045695 10.8954305,12 12,12 Z" fill="#000000" />
                                  </g>
                                </svg>
                                <!--end::Svg Icon-->
                              </span>London</a>
                            </div>
                            <!--end::Contacts-->
                          </div>
                          <!--begin::User-->
                          <!--begin::Actions-->
                          <div class="my-lg-0 my-1">
                            <a href="#" class="btn btn-sm btn-light-primary font-weight-bolder mr-2">Contact</a>
                            <a href="#" class="btn btn-sm btn-primary font-weight-bolder">Hire me</a>
                          </div>
                          <!--end::Actions-->
                        </div>
                        <!--end::Title-->
                        <!--begin::Content-->
                        <div class="d-flex align-items-center flex-wrap justify-content-between">
                          <!--begin::Description-->
                          <div class="flex-grow-1 font-weight-bold text-dark-50 py-2 py-lg-2 mr-5">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.
                          <br />Quis autem vel eum iure reprehenderit qui in.</div>
                          <!--end::Description-->
                          <!--begin::Progress-->
                          <div class="d-flex mt-4 mt-sm-0">
                            <span class="font-weight-bold mr-4">Progress</span>
                            <div class="progress progress-xs mt-2 mb-2 flex-shrink-0 w-150px w-xl-250px">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 63%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="font-weight-bolder text-dark ml-4">78%</span>
                          </div>
                          <!--end::Progress-->
                        </div>
                        <!--end::Content-->
                      </div>
                      <!--end::Info-->
                    </div>
                    <!--end::Top-->
                    <!--begin::Separator-->
                    <div class="separator separator-solid my-7"></div>
                    <!--end::Separator-->
                    <!--begin::Bottom-->
                    <div class="d-flex align-items-center flex-wrap">
                      <!--begin: Item-->
                      <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                        <span class="mr-4">
                          <span class="svg-icon svg-icon-2x">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Dollar.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <rect fill="#000000" opacity="0.3" x="11.5" y="2" width="2" height="4" rx="1" />
                                <rect fill="#000000" opacity="0.3" x="11.5" y="16" width="2" height="5" rx="1" />
                                <path d="M15.493,8.044 C15.2143319,7.68933156 14.8501689,7.40750104 14.4005,7.1985 C13.9508311,6.98949895 13.5170021,6.885 13.099,6.885 C12.8836656,6.885 12.6651678,6.90399981 12.4435,6.942 C12.2218322,6.98000019 12.0223342,7.05283279 11.845,7.1605 C11.6676658,7.2681672 11.5188339,7.40749914 11.3985,7.5785 C11.2781661,7.74950085 11.218,7.96799867 11.218,8.234 C11.218,8.46200114 11.2654995,8.65199924 11.3605,8.804 C11.4555005,8.95600076 11.5948324,9.08899943 11.7785,9.203 C11.9621676,9.31700057 12.1806654,9.42149952 12.434,9.5165 C12.6873346,9.61150047 12.9723317,9.70966616 13.289,9.811 C13.7450023,9.96300076 14.2199975,10.1308324 14.714,10.3145 C15.2080025,10.4981676 15.6576646,10.7419985 16.063,11.046 C16.4683354,11.3500015 16.8039987,11.7268311 17.07,12.1765 C17.3360013,12.6261689 17.469,13.1866633 17.469,13.858 C17.469,14.6306705 17.3265014,15.2988305 17.0415,15.8625 C16.7564986,16.4261695 16.3733357,16.8916648 15.892,17.259 C15.4106643,17.6263352 14.8596698,17.8986658 14.239,18.076 C13.6183302,18.2533342 12.97867,18.342 12.32,18.342 C11.3573285,18.342 10.4263378,18.1741683 9.527,17.8385 C8.62766217,17.5028317 7.88033631,17.0246698 7.285,16.404 L9.413,14.238 C9.74233498,14.6433354 10.176164,14.9821653 10.7145,15.2545 C11.252836,15.5268347 11.7879973,15.663 12.32,15.663 C12.5606679,15.663 12.7949989,15.6376669 13.023,15.587 C13.2510011,15.5363331 13.4504991,15.4540006 13.6215,15.34 C13.7925009,15.2259994 13.9286662,15.0740009 14.03,14.884 C14.1313338,14.693999 14.182,14.4660013 14.182,14.2 C14.182,13.9466654 14.1186673,13.7313342 13.992,13.554 C13.8653327,13.3766658 13.6848345,13.2151674 13.4505,13.0695 C13.2161655,12.9238326 12.9248351,12.7908339 12.5765,12.6705 C12.2281649,12.5501661 11.8323355,12.420334 11.389,12.281 C10.9583312,12.141666 10.5371687,11.9770009 10.1255,11.787 C9.71383127,11.596999 9.34650161,11.3531682 9.0235,11.0555 C8.70049838,10.7578318 8.44083431,10.3968355 8.2445,9.9725 C8.04816568,9.54816454 7.95,9.03200304 7.95,8.424 C7.95,7.67666293 8.10199848,7.03700266 8.406,6.505 C8.71000152,5.97299734 9.10899753,5.53600171 9.603,5.194 C10.0970025,4.85199829 10.6543302,4.60183412 11.275,4.4435 C11.8956698,4.28516587 12.5226635,4.206 13.156,4.206 C13.9160038,4.206 14.6918294,4.34533194 15.4835,4.624 C16.2751706,4.90266806 16.9686637,5.31433061 17.564,5.859 L15.493,8.044 Z" fill="#000000" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </span>
                        <div class="d-flex flex-column text-dark-75">
                          <span class="font-weight-bolder font-size-sm">Sales</span>
                          <span class="font-weight-bolder font-size-h5">
                          <span class="text-dark-50 font-weight-bold">$</span>249,500</span>
                        </div>
                      </div>
                      <!--end: Item-->
                      <!--begin: Item-->
                      <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                        <span class="mr-4">
                          <span class="svg-icon svg-icon-2x">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Sale2.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <polygon fill="#000000" opacity="0.3" points="12 20.0218549 8.47346039 21.7286168 6.86905972 18.1543453 3.07048824 17.1949849 4.13894342 13.4256452 1.84573388 10.2490577 5.08710286 8.04836581 5.3722735 4.14091196 9.2698837 4.53859595 12 1.72861679 14.7301163 4.53859595 18.6277265 4.14091196 18.9128971 8.04836581 22.1542661 10.2490577 19.8610566 13.4256452 20.9295118 17.1949849 17.1309403 18.1543453 15.5265396 21.7286168" />
                                <polygon fill="#000000" points="14.0890818 8.60255815 8.36079737 14.7014391 9.70868621 16.049328 15.4369707 9.950447" />
                                <path d="M10.8543431,9.1753866 C10.8543431,10.1252593 10.085524,10.8938719 9.13585777,10.8938719 C8.18793881,10.8938719 7.41737243,10.1252593 7.41737243,9.1753866 C7.41737243,8.22551387 8.18793881,7.45690126 9.13585777,7.45690126 C10.085524,7.45690126 10.8543431,8.22551387 10.8543431,9.1753866" fill="#000000" opacity="0.3" />
                                <path d="M14.8641422,16.6221564 C13.9162233,16.6221564 13.1456569,15.8535438 13.1456569,14.9036711 C13.1456569,13.9520555 13.9162233,13.1851857 14.8641422,13.1851857 C15.8138085,13.1851857 16.5826276,13.9520555 16.5826276,14.9036711 C16.5826276,15.8535438 15.8138085,16.6221564 14.8641422,16.6221564 Z" fill="#000000" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </span>
                        <div class="d-flex flex-column text-dark-75">
                          <span class="font-weight-bolder font-size-sm">Expenses</span>
                          <span class="font-weight-bolder font-size-h5">
                          <span class="text-dark-50 font-weight-bold">$</span>164,700</span>
                        </div>
                      </div>
                      <!--end: Item-->
                      <!--begin: Item-->
                      <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                        <span class="mr-4">
                          <span class="svg-icon svg-icon-2x">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Chart-bar1.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <rect fill="#000000" opacity="0.3" x="12" y="4" width="3" height="13" rx="1.5" />
                                <rect fill="#000000" opacity="0.3" x="7" y="9" width="3" height="8" rx="1.5" />
                                <path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" fill="#000000" fill-rule="nonzero" />
                                <rect fill="#000000" opacity="0.3" x="17" y="11" width="3" height="6" rx="1.5" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </span>
                        <div class="d-flex flex-column text-dark-75">
                          <span class="font-weight-bolder font-size-sm">Net</span>
                          <span class="font-weight-bolder font-size-h5">
                          <span class="text-dark-50 font-weight-bold">$</span>782,300</span>
                        </div>
                      </div>
                      <!--end: Item-->
                      <!--begin: Item-->
                      <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                        <span class="mr-4">
                          <span class="svg-icon svg-icon-2x">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Hummer.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M18.4246212,12.6464466 L21.2530483,9.81801948 C21.4483105,9.62275734 21.764893,9.62275734 21.9601551,9.81801948 L22.6672619,10.5251263 C22.862524,10.7203884 22.862524,11.0369709 22.6672619,11.232233 L19.8388348,14.0606602 C19.6435726,14.2559223 19.3269901,14.2559223 19.131728,14.0606602 L18.4246212,13.3535534 C18.2293591,13.1582912 18.2293591,12.8417088 18.4246212,12.6464466 Z M3.22182541,17.9497475 L13.1213203,8.05025253 C13.5118446,7.65972824 14.1450096,7.65972824 14.5355339,8.05025253 L15.9497475,9.46446609 C16.3402718,9.85499039 16.3402718,10.4881554 15.9497475,10.8786797 L6.05025253,20.7781746 C5.65972824,21.1686989 5.02656326,21.1686989 4.63603897,20.7781746 L3.22182541,19.363961 C2.83130112,18.9734367 2.83130112,18.3402718 3.22182541,17.9497475 Z" fill="#000000" opacity="0.3" />
                                <path d="M12.3890873,1.28248558 L12.3890873,1.28248558 C15.150511,1.28248558 17.3890873,3.52106183 17.3890873,6.28248558 L17.3890873,10.7824856 C17.3890873,11.058628 17.1652297,11.2824856 16.8890873,11.2824856 L12.8890873,11.2824856 C12.6129449,11.2824856 12.3890873,11.058628 12.3890873,10.7824856 L12.3890873,1.28248558 Z" fill="#000000" transform="translate(14.889087, 6.282486) rotate(-45.000000) translate(-14.889087, -6.282486)" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </span>
                        <div class="d-flex flex-column flex-lg-fill">
                          <span class="text-dark-75 font-weight-bolder font-size-sm">73 Projects</span>
                          <a href="#" class="text-primary font-weight-bolder">View</a>
                        </div>
                      </div>
                      <!--end: Item-->
                      <!--begin: Item-->
                      <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                        <span class="mr-4">
                          <span class="svg-icon svg-icon-2x">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Chat2.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <polygon fill="#000000" opacity="0.3" points="5 15 3 21.5 9.5 19.5" />
                                <path d="M13.5,21 C8.25329488,21 4,16.7467051 4,11.5 C4,6.25329488 8.25329488,2 13.5,2 C18.7467051,2 23,6.25329488 23,11.5 C23,16.7467051 18.7467051,21 13.5,21 Z M9,8 C8.44771525,8 8,8.44771525 8,9 C8,9.55228475 8.44771525,10 9,10 L18,10 C18.5522847,10 19,9.55228475 19,9 C19,8.44771525 18.5522847,8 18,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 C8,13.5522847 8.44771525,14 9,14 L14,14 C14.5522847,14 15,13.5522847 15,13 C15,12.4477153 14.5522847,12 14,12 L9,12 Z" fill="#000000" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </span>
                        <div class="d-flex flex-column">
                          <span class="text-dark-75 font-weight-bolder font-size-sm">648 Comments</span>
                          <a href="#" class="text-primary font-weight-bolder">View</a>
                        </div>
                      </div>
                      <!--end: Item-->
                      <!--begin: Item-->
                      <div class="d-flex align-items-center flex-lg-fill my-1">
                        <span class="mr-4">
                          <span class="svg-icon svg-icon-2x">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </span>
                        <div class="symbol-group symbol-hover">
                          <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Mark Stone">
                            <img alt="Pic" src="assets/media/users/150-3.jpg" />
                          </div>
                          <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Charlie Stone">
                            <img alt="Pic" src="assets/media/users/150-11.jpg" />
                          </div>
                          <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Luca Doncic">
                            <img alt="Pic" src="assets/media/users/150-4.jpg" />
                          </div>
                          <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Nick Mana">
                            <img alt="Pic" src="assets/media/users/150-5.jpg" />
                          </div>
                          <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Teresa Fox">
                            <img alt="Pic" src="assets/media/users/150-9.jpg" />
                          </div>
                          <div class="symbol symbol-30 symbol-circle symbol-light-primary" data-toggle="tooltip" title="More users">
                            <span class="symbol-label font-weight-bold">5+</span>
                          </div>
                        </div>
                      </div>
                      <!--end: Item-->
                    </div>
                    <!--end::Bottom-->
                  </div>
                </div>
                <!--end::Nav Panels Wizard 4-->
                <!--begin::Row-->
                <div class="row">
                  <div class="col-lg-8"></div>
                  <div class="col-lg-4"></div>
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row">
                  <div class="col-lg-6">
                    <!--begin::Charts Widget 4-->
                    <div class="card card-custom card-stretch gutter-b">
                      <!--begin::Header-->
                      <div class="card-header h-auto border-0">
                        <div class="card-title py-5">
                          <h3 class="card-label">
                            <span class="d-block text-dark font-weight-bolder">Recent Orders</span>
                            <span class="d-block text-muted mt-2 font-size-sm">More than 500+ new orders</span>
                          </h3>
                        </div>
                        <div class="card-toolbar">
                          <ul class="nav nav-pills nav-pills-sm nav-dark-75" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_charts_widget_2_chart_tab_1">
                                <span class="nav-text font-size-sm">Month</span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_charts_widget_2_chart_tab_2">
                                <span class="nav-text font-size-sm">Week</span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link py-2 px-4 active" data-toggle="tab" href="#kt_charts_widget_2_chart_tab_3">
                                <span class="nav-text font-size-sm">Day</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <!--end::Header-->
                      <!--begin::Body-->
                      <div class="card-body">
                        <div id="kt_charts_widget_4_chart"></div>
                      </div>
                      <!--end::Body-->
                    </div>
                    <!--end::Charts Widget 4-->
                  </div>
                  <div class="col-lg-6">
                    <!--begin::List Widget 11-->
                    <div class="card card-custom card-stretch gutter-b">
                      <!--begin::Header-->
                      <div class="card-header border-0">
                        <h3 class="card-title font-weight-bolder text-dark">Trends</h3>
                        <div class="card-toolbar">
                          <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
                            <a href="#" class="btn btn-icon-primary btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="svg-icon svg-icon-lg">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Text/Dots.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1">
                                    <rect x="14" y="9" width="6" height="6" rx="3" fill="black" />
                                    <rect x="3" y="9" width="6" height="6" rx="3" fill="black" fill-opacity="0.7" />
                                  </g>
                                </svg>
                                <!--end::Svg Icon-->
                              </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                              <!--begin::Navigation-->
                              <ul class="navi navi-hover py-5">
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <span class="svg-icon svg-icon-md svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                          </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                      </span>
                                    </span>
                                    <span class="navi-text">Member</span>
                                  </a>
                                </li>
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <span class="svg-icon svg-icon-md svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Clipboard-check.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3" />
                                            <path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000" />
                                            <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000" />
                                          </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                      </span>
                                    </span>
                                    <span class="navi-text">Contact</span>
                                  </a>
                                </li>
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <span class="svg-icon svg-icon-md svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Time-schedule.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M10.9630156,7.5 L11.0475062,7.5 C11.3043819,7.5 11.5194647,7.69464724 11.5450248,7.95024814 L12,12.5 L15.2480695,14.3560397 C15.403857,14.4450611 15.5,14.6107328 15.5,14.7901613 L15.5,15 C15.5,15.2109164 15.3290185,15.3818979 15.1181021,15.3818979 C15.0841582,15.3818979 15.0503659,15.3773725 15.0176181,15.3684413 L10.3986612,14.1087258 C10.1672824,14.0456225 10.0132986,13.8271186 10.0316926,13.5879956 L10.4644883,7.96165175 C10.4845267,7.70115317 10.7017474,7.5 10.9630156,7.5 Z" fill="#000000" />
                                            <path d="M7.38979581,2.8349582 C8.65216735,2.29743306 10.0413491,2 11.5,2 C17.2989899,2 22,6.70101013 22,12.5 C22,18.2989899 17.2989899,23 11.5,23 C5.70101013,23 1,18.2989899 1,12.5 C1,11.5151324 1.13559454,10.5619345 1.38913364,9.65805651 L3.31481075,10.1982117 C3.10672013,10.940064 3,11.7119264 3,12.5 C3,17.1944204 6.80557963,21 11.5,21 C16.1944204,21 20,17.1944204 20,12.5 C20,7.80557963 16.1944204,4 11.5,4 C10.54876,4 9.62236069,4.15592757 8.74872191,4.45446326 L9.93948308,5.87355717 C10.0088058,5.95617272 10.0495583,6.05898805 10.05566,6.16666224 C10.0712834,6.4423623 9.86044965,6.67852665 9.5847496,6.69415008 L4.71777931,6.96995273 C4.66931162,6.97269931 4.62070229,6.96837279 4.57348157,6.95710938 C4.30487471,6.89303938 4.13906482,6.62335149 4.20313482,6.35474463 L5.33163823,1.62361064 C5.35654118,1.51920756 5.41437908,1.4255891 5.49660017,1.35659741 C5.7081375,1.17909652 6.0235153,1.2066885 6.2010162,1.41822583 L7.38979581,2.8349582 Z" fill="#000000" opacity="0.3" />
                                          </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                      </span>
                                    </span>
                                    <span class="navi-text">Event</span>
                                    <span class="navi-link-badge">
                                      <span class="label label-light-primary label-inline font-weight-bold">new</span>
                                    </span>
                                  </a>
                                </li>
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <span class="svg-icon svg-icon-md svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Git3.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M7,11 L15,11 C16.1045695,11 17,10.1045695 17,9 L17,8 L19,8 L19,9 C19,11.209139 17.209139,13 15,13 L7,13 L7,15 C7,15.5522847 6.55228475,16 6,16 C5.44771525,16 5,15.5522847 5,15 L5,9 C5,8.44771525 5.44771525,8 6,8 C6.55228475,8 7,8.44771525 7,9 L7,11 Z" fill="#000000" opacity="0.3" />
                                            <path d="M6,21 C7.1045695,21 8,20.1045695 8,19 C8,17.8954305 7.1045695,17 6,17 C4.8954305,17 4,17.8954305 4,19 C4,20.1045695 4.8954305,21 6,21 Z M6,23 C3.790861,23 2,21.209139 2,19 C2,16.790861 3.790861,15 6,15 C8.209139,15 10,16.790861 10,19 C10,21.209139 8.209139,23 6,23 Z" fill="#000000" fill-rule="nonzero" />
                                            <path d="M18,7 C19.1045695,7 20,6.1045695 20,5 C20,3.8954305 19.1045695,3 18,3 C16.8954305,3 16,3.8954305 16,5 C16,6.1045695 16.8954305,7 18,7 Z M18,9 C15.790861,9 14,7.209139 14,5 C14,2.790861 15.790861,1 18,1 C20.209139,1 22,2.790861 22,5 C22,7.209139 20.209139,9 18,9 Z" fill="#000000" fill-rule="nonzero" />
                                            <path d="M6,7 C7.1045695,7 8,6.1045695 8,5 C8,3.8954305 7.1045695,3 6,3 C4.8954305,3 4,3.8954305 4,5 C4,6.1045695 4.8954305,7 6,7 Z M6,9 C3.790861,9 2,7.209139 2,5 C2,2.790861 3.790861,1 6,1 C8.209139,1 10,2.790861 10,5 C10,7.209139 8.209139,9 6,9 Z" fill="#000000" fill-rule="nonzero" />
                                          </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                      </span>
                                    </span>
                                    <span class="navi-text">Task</span>
                                  </a>
                                </li>
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <span class="svg-icon svg-icon-md svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Settings4.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M18.6225,9.75 L18.75,9.75 C19.9926407,9.75 21,10.7573593 21,12 C21,13.2426407 19.9926407,14.25 18.75,14.25 L18.6854912,14.249994 C18.4911876,14.250769 18.3158978,14.366855 18.2393549,14.5454486 C18.1556809,14.7351461 18.1942911,14.948087 18.3278301,15.0846699 L18.372535,15.129375 C18.7950334,15.5514036 19.03243,16.1240792 19.03243,16.72125 C19.03243,17.3184208 18.7950334,17.8910964 18.373125,18.312535 C17.9510964,18.7350334 17.3784208,18.97243 16.78125,18.97243 C16.1840792,18.97243 15.6114036,18.7350334 15.1896699,18.3128301 L15.1505513,18.2736469 C15.008087,18.1342911 14.7951461,18.0956809 14.6054486,18.1793549 C14.426855,18.2558978 14.310769,18.4311876 14.31,18.6225 L14.31,18.75 C14.31,19.9926407 13.3026407,21 12.06,21 C10.8173593,21 9.81,19.9926407 9.81,18.75 C9.80552409,18.4999185 9.67898539,18.3229986 9.44717599,18.2361469 C9.26485393,18.1556809 9.05191298,18.1942911 8.91533009,18.3278301 L8.870625,18.372535 C8.44859642,18.7950334 7.87592081,19.03243 7.27875,19.03243 C6.68157919,19.03243 6.10890358,18.7950334 5.68746499,18.373125 C5.26496665,17.9510964 5.02757002,17.3784208 5.02757002,16.78125 C5.02757002,16.1840792 5.26496665,15.6114036 5.68716991,15.1896699 L5.72635306,15.1505513 C5.86570889,15.008087 5.90431906,14.7951461 5.82064513,14.6054486 C5.74410223,14.426855 5.56881236,14.310769 5.3775,14.31 L5.25,14.31 C4.00735931,14.31 3,13.3026407 3,12.06 C3,10.8173593 4.00735931,9.81 5.25,9.81 C5.50008154,9.80552409 5.67700139,9.67898539 5.76385306,9.44717599 C5.84431906,9.26485393 5.80570889,9.05191298 5.67216991,8.91533009 L5.62746499,8.870625 C5.20496665,8.44859642 4.96757002,7.87592081 4.96757002,7.27875 C4.96757002,6.68157919 5.20496665,6.10890358 5.626875,5.68746499 C6.04890358,5.26496665 6.62157919,5.02757002 7.21875,5.02757002 C7.81592081,5.02757002 8.38859642,5.26496665 8.81033009,5.68716991 L8.84944872,5.72635306 C8.99191298,5.86570889 9.20485393,5.90431906 9.38717599,5.82385306 L9.49484664,5.80114977 C9.65041313,5.71688974 9.7492905,5.55401473 9.75,5.3775 L9.75,5.25 C9.75,4.00735931 10.7573593,3 12,3 C13.2426407,3 14.25,4.00735931 14.25,5.25 L14.249994,5.31450877 C14.250769,5.50881236 14.366855,5.68410223 14.552824,5.76385306 C14.7351461,5.84431906 14.948087,5.80570889 15.0846699,5.67216991 L15.129375,5.62746499 C15.5514036,5.20496665 16.1240792,4.96757002 16.72125,4.96757002 C17.3184208,4.96757002 17.8910964,5.20496665 18.312535,5.626875 C18.7350334,6.04890358 18.97243,6.62157919 18.97243,7.21875 C18.97243,7.81592081 18.7350334,8.38859642 18.3128301,8.81033009 L18.2736469,8.84944872 C18.1342911,8.99191298 18.0956809,9.20485393 18.1761469,9.38717599 L18.1988502,9.49484664 C18.2831103,9.65041313 18.4459853,9.7492905 18.6225,9.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path d="M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000" />
                                          </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                      </span>
                                    </span>
                                    <span class="navi-text">Settings</span>
                                  </a>
                                </li>
                                <li class="navi-separator my-3"></li>
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <span class="svg-icon svg-icon-md svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Info-circle.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                                            <rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
                                            <rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
                                          </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                      </span>
                                    </span>
                                    <span class="navi-text">Help</span>
                                  </a>
                                </li>
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <span class="svg-icon svg-icon-md svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Safe-chat.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M8,17 C8.55228475,17 9,17.4477153 9,18 L9,21 C9,21.5522847 8.55228475,22 8,22 L3,22 C2.44771525,22 2,21.5522847 2,21 L2,18 C2,17.4477153 2.44771525,17 3,17 L3,16.5 C3,15.1192881 4.11928813,14 5.5,14 C6.88071187,14 8,15.1192881 8,16.5 L8,17 Z M5.5,15 C4.67157288,15 4,15.6715729 4,16.5 L4,17 L7,17 L7,16.5 C7,15.6715729 6.32842712,15 5.5,15 Z" fill="#000000" opacity="0.3" />
                                            <path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000" />
                                          </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                      </span>
                                    </span>
                                    <span class="navi-text">Privacy</span>
                                    <span class="navi-link-badge">
                                      <span class="label label-light-danger label-rounded font-weight-bold">5</span>
                                    </span>
                                  </a>
                                </li>
                              </ul>
                              <!--end::Navigation-->
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--end::Header-->
                      <!--begin::Body-->
                      <div class="card-body pt-0">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-9 bg-light-danger rounded p-5">
                          <!--begin::Icon-->
                          <span class="svg-icon svg-icon-danger mr-5">
                            <span class="svg-icon svg-icon-lg">
                              <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                  <rect x="0" y="0" width="24" height="24" />
                                  <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />
                                  <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />
                                </g>
                              </svg>
                              <!--end::Svg Icon-->
                            </span>
                          </span>
                          <!--end::Icon-->
                          <!--begin::Title-->
                          <div class="d-flex flex-column flex-grow-1 mr-2">
                            <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Group lunch celebration</a>
                            <span class="text-muted font-weight-bold">Due in 2 Days</span>
                          </div>
                          <!--end::Title-->
                          <!--begin::Lable-->
                          <span class="font-weight-bolder text-danger py-1 font-size-lg">+32%</span>
                          <!--end::Lable-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center bg-light-success rounded p-5 mb-9">
                          <!--begin::Icon-->
                          <span class="svg-icon svg-icon-success mr-5">
                            <span class="svg-icon svg-icon-lg">
                              <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                  <rect x="0" y="0" width="24" height="24" />
                                  <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                  <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                </g>
                              </svg>
                              <!--end::Svg Icon-->
                            </span>
                          </span>
                          <!--end::Icon-->
                          <!--begin::Title-->
                          <div class="d-flex flex-column flex-grow-1 mr-2">
                            <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Home navigation optimization</a>
                            <span class="text-muted font-weight-bold">Due in 2 Days</span>
                          </div>
                          <!--end::Title-->
                          <!--begin::Lable-->
                          <span class="font-weight-bolder text-success py-1 font-size-lg">+50%</span>
                          <!--end::Lable-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center bg-light-info rounded p-5 mb-9">
                          <!--begin::Icon-->
                          <span class="svg-icon svg-icon-info mr-5">
                            <span class="svg-icon svg-icon-lg">
                              <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                  <polygon points="0 0 24 0 24 24 0 24" />
                                  <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                  <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                </g>
                              </svg>
                              <!--end::Svg Icon-->
                            </span>
                          </span>
                          <!--end::Icon-->
                          <!--begin::Title-->
                          <div class="d-flex flex-column flex-grow-1 mr-2">
                            <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Rebrand strategy planning</a>
                            <span class="text-muted font-weight-bold">Due in 2 Days</span>
                          </div>
                          <!--end::Title-->
                          <!--begin::Lable-->
                          <span class="font-weight-bolder text-info py-1 font-size-lg">-37%</span>
                          <!--end::Lable-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center bg-light-warning rounded p-5">
                          <!--begin::Icon-->
                          <span class="svg-icon svg-icon-warning mr-5">
                            <span class="svg-icon svg-icon-lg">
                              <!--begin::Svg Icon | path:assets/media/svg/icons/General/Attachment2.svg-->
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                  <rect x="0" y="0" width="24" height="24" />
                                  <path d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z" fill="#000000" opacity="0.3" transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)" />
                                  <path d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z" fill="#000000" transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)" />
                                  <path d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z" fill="#000000" opacity="0.3" transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)" />
                                  <path d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z" fill="#000000" opacity="0.3" transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)" />
                                </g>
                              </svg>
                              <!--end::Svg Icon-->
                            </span>
                          </span>
                          <!--end::Icon-->
                          <!--begin::Title-->
                          <div class="d-flex flex-column flex-grow-1 mr-2">
                            <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Product goals strategy meet-up</a>
                            <span class="text-muted font-weight-bold">Due in 2 Days</span>
                          </div>
                          <!--end::Title-->
                          <!--begin::Lable-->
                          <span class="font-weight-bolder text-warning py-1 font-size-lg">+44%</span>
                          <!--end::Lable-->
                        </div>
                        <!--end::Item-->
                      </div>
                      <!--end::Body-->
                    </div>
                    <!--end::List Widget 11-->
                  </div>
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row">
                  <div class="col-lg-4">
                    <!--begin::Mixed Widget 3-->
                    <div class="card card-custom card-stretch gutter-b">
                      <!--begin::Header-->
                      <div class="card-header border-0 pt-6">
                        <h3 class="card-title align-items-start flex-column">
                          <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Top categories</span>
                          <span class="text-muted mt-3 font-weight-bold font-size-lg">28 Categories, 1400 Items</span>
                        </h3>
                        <div class="card-toolbar">
                          <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
                            <a href="#" class="btn btn-icon-primary btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="svg-icon svg-icon-lg">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Text/Dots.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1">
                                    <rect x="14" y="9" width="6" height="6" rx="3" fill="black" />
                                    <rect x="3" y="9" width="6" height="6" rx="3" fill="black" fill-opacity="0.7" />
                                  </g>
                                </svg>
                                <!--end::Svg Icon-->
                              </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                              <!--begin::Navigation-->
                              <ul class="navi navi-hover py-5">
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <span class="svg-icon svg-icon-md svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                          </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                      </span>
                                    </span>
                                    <span class="navi-text">Member</span>
                                  </a>
                                </li>
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <span class="svg-icon svg-icon-md svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Clipboard-check.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3" />
                                            <path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000" />
                                            <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000" />
                                          </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                      </span>
                                    </span>
                                    <span class="navi-text">Contact</span>
                                  </a>
                                </li>
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <span class="svg-icon svg-icon-md svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Time-schedule.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M10.9630156,7.5 L11.0475062,7.5 C11.3043819,7.5 11.5194647,7.69464724 11.5450248,7.95024814 L12,12.5 L15.2480695,14.3560397 C15.403857,14.4450611 15.5,14.6107328 15.5,14.7901613 L15.5,15 C15.5,15.2109164 15.3290185,15.3818979 15.1181021,15.3818979 C15.0841582,15.3818979 15.0503659,15.3773725 15.0176181,15.3684413 L10.3986612,14.1087258 C10.1672824,14.0456225 10.0132986,13.8271186 10.0316926,13.5879956 L10.4644883,7.96165175 C10.4845267,7.70115317 10.7017474,7.5 10.9630156,7.5 Z" fill="#000000" />
                                            <path d="M7.38979581,2.8349582 C8.65216735,2.29743306 10.0413491,2 11.5,2 C17.2989899,2 22,6.70101013 22,12.5 C22,18.2989899 17.2989899,23 11.5,23 C5.70101013,23 1,18.2989899 1,12.5 C1,11.5151324 1.13559454,10.5619345 1.38913364,9.65805651 L3.31481075,10.1982117 C3.10672013,10.940064 3,11.7119264 3,12.5 C3,17.1944204 6.80557963,21 11.5,21 C16.1944204,21 20,17.1944204 20,12.5 C20,7.80557963 16.1944204,4 11.5,4 C10.54876,4 9.62236069,4.15592757 8.74872191,4.45446326 L9.93948308,5.87355717 C10.0088058,5.95617272 10.0495583,6.05898805 10.05566,6.16666224 C10.0712834,6.4423623 9.86044965,6.67852665 9.5847496,6.69415008 L4.71777931,6.96995273 C4.66931162,6.97269931 4.62070229,6.96837279 4.57348157,6.95710938 C4.30487471,6.89303938 4.13906482,6.62335149 4.20313482,6.35474463 L5.33163823,1.62361064 C5.35654118,1.51920756 5.41437908,1.4255891 5.49660017,1.35659741 C5.7081375,1.17909652 6.0235153,1.2066885 6.2010162,1.41822583 L7.38979581,2.8349582 Z" fill="#000000" opacity="0.3" />
                                          </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                      </span>
                                    </span>
                                    <span class="navi-text">Event</span>
                                    <span class="navi-link-badge">
                                      <span class="label label-light-primary label-inline font-weight-bold">new</span>
                                    </span>
                                  </a>
                                </li>
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <span class="svg-icon svg-icon-md svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Git3.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M7,11 L15,11 C16.1045695,11 17,10.1045695 17,9 L17,8 L19,8 L19,9 C19,11.209139 17.209139,13 15,13 L7,13 L7,15 C7,15.5522847 6.55228475,16 6,16 C5.44771525,16 5,15.5522847 5,15 L5,9 C5,8.44771525 5.44771525,8 6,8 C6.55228475,8 7,8.44771525 7,9 L7,11 Z" fill="#000000" opacity="0.3" />
                                            <path d="M6,21 C7.1045695,21 8,20.1045695 8,19 C8,17.8954305 7.1045695,17 6,17 C4.8954305,17 4,17.8954305 4,19 C4,20.1045695 4.8954305,21 6,21 Z M6,23 C3.790861,23 2,21.209139 2,19 C2,16.790861 3.790861,15 6,15 C8.209139,15 10,16.790861 10,19 C10,21.209139 8.209139,23 6,23 Z" fill="#000000" fill-rule="nonzero" />
                                            <path d="M18,7 C19.1045695,7 20,6.1045695 20,5 C20,3.8954305 19.1045695,3 18,3 C16.8954305,3 16,3.8954305 16,5 C16,6.1045695 16.8954305,7 18,7 Z M18,9 C15.790861,9 14,7.209139 14,5 C14,2.790861 15.790861,1 18,1 C20.209139,1 22,2.790861 22,5 C22,7.209139 20.209139,9 18,9 Z" fill="#000000" fill-rule="nonzero" />
                                            <path d="M6,7 C7.1045695,7 8,6.1045695 8,5 C8,3.8954305 7.1045695,3 6,3 C4.8954305,3 4,3.8954305 4,5 C4,6.1045695 4.8954305,7 6,7 Z M6,9 C3.790861,9 2,7.209139 2,5 C2,2.790861 3.790861,1 6,1 C8.209139,1 10,2.790861 10,5 C10,7.209139 8.209139,9 6,9 Z" fill="#000000" fill-rule="nonzero" />
                                          </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                      </span>
                                    </span>
                                    <span class="navi-text">Task</span>
                                  </a>
                                </li>
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <span class="svg-icon svg-icon-md svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Settings4.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M18.6225,9.75 L18.75,9.75 C19.9926407,9.75 21,10.7573593 21,12 C21,13.2426407 19.9926407,14.25 18.75,14.25 L18.6854912,14.249994 C18.4911876,14.250769 18.3158978,14.366855 18.2393549,14.5454486 C18.1556809,14.7351461 18.1942911,14.948087 18.3278301,15.0846699 L18.372535,15.129375 C18.7950334,15.5514036 19.03243,16.1240792 19.03243,16.72125 C19.03243,17.3184208 18.7950334,17.8910964 18.373125,18.312535 C17.9510964,18.7350334 17.3784208,18.97243 16.78125,18.97243 C16.1840792,18.97243 15.6114036,18.7350334 15.1896699,18.3128301 L15.1505513,18.2736469 C15.008087,18.1342911 14.7951461,18.0956809 14.6054486,18.1793549 C14.426855,18.2558978 14.310769,18.4311876 14.31,18.6225 L14.31,18.75 C14.31,19.9926407 13.3026407,21 12.06,21 C10.8173593,21 9.81,19.9926407 9.81,18.75 C9.80552409,18.4999185 9.67898539,18.3229986 9.44717599,18.2361469 C9.26485393,18.1556809 9.05191298,18.1942911 8.91533009,18.3278301 L8.870625,18.372535 C8.44859642,18.7950334 7.87592081,19.03243 7.27875,19.03243 C6.68157919,19.03243 6.10890358,18.7950334 5.68746499,18.373125 C5.26496665,17.9510964 5.02757002,17.3784208 5.02757002,16.78125 C5.02757002,16.1840792 5.26496665,15.6114036 5.68716991,15.1896699 L5.72635306,15.1505513 C5.86570889,15.008087 5.90431906,14.7951461 5.82064513,14.6054486 C5.74410223,14.426855 5.56881236,14.310769 5.3775,14.31 L5.25,14.31 C4.00735931,14.31 3,13.3026407 3,12.06 C3,10.8173593 4.00735931,9.81 5.25,9.81 C5.50008154,9.80552409 5.67700139,9.67898539 5.76385306,9.44717599 C5.84431906,9.26485393 5.80570889,9.05191298 5.67216991,8.91533009 L5.62746499,8.870625 C5.20496665,8.44859642 4.96757002,7.87592081 4.96757002,7.27875 C4.96757002,6.68157919 5.20496665,6.10890358 5.626875,5.68746499 C6.04890358,5.26496665 6.62157919,5.02757002 7.21875,5.02757002 C7.81592081,5.02757002 8.38859642,5.26496665 8.81033009,5.68716991 L8.84944872,5.72635306 C8.99191298,5.86570889 9.20485393,5.90431906 9.38717599,5.82385306 L9.49484664,5.80114977 C9.65041313,5.71688974 9.7492905,5.55401473 9.75,5.3775 L9.75,5.25 C9.75,4.00735931 10.7573593,3 12,3 C13.2426407,3 14.25,4.00735931 14.25,5.25 L14.249994,5.31450877 C14.250769,5.50881236 14.366855,5.68410223 14.552824,5.76385306 C14.7351461,5.84431906 14.948087,5.80570889 15.0846699,5.67216991 L15.129375,5.62746499 C15.5514036,5.20496665 16.1240792,4.96757002 16.72125,4.96757002 C17.3184208,4.96757002 17.8910964,5.20496665 18.312535,5.626875 C18.7350334,6.04890358 18.97243,6.62157919 18.97243,7.21875 C18.97243,7.81592081 18.7350334,8.38859642 18.3128301,8.81033009 L18.2736469,8.84944872 C18.1342911,8.99191298 18.0956809,9.20485393 18.1761469,9.38717599 L18.1988502,9.49484664 C18.2831103,9.65041313 18.4459853,9.7492905 18.6225,9.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path d="M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000" />
                                          </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                      </span>
                                    </span>
                                    <span class="navi-text">Settings</span>
                                  </a>
                                </li>
                                <li class="navi-separator my-3"></li>
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <span class="svg-icon svg-icon-md svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Info-circle.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                                            <rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
                                            <rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
                                          </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                      </span>
                                    </span>
                                    <span class="navi-text">Help</span>
                                  </a>
                                </li>
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <span class="svg-icon svg-icon-md svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Safe-chat.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M8,17 C8.55228475,17 9,17.4477153 9,18 L9,21 C9,21.5522847 8.55228475,22 8,22 L3,22 C2.44771525,22 2,21.5522847 2,21 L2,18 C2,17.4477153 2.44771525,17 3,17 L3,16.5 C3,15.1192881 4.11928813,14 5.5,14 C6.88071187,14 8,15.1192881 8,16.5 L8,17 Z M5.5,15 C4.67157288,15 4,15.6715729 4,16.5 L4,17 L7,17 L7,16.5 C7,15.6715729 6.32842712,15 5.5,15 Z" fill="#000000" opacity="0.3" />
                                            <path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000" />
                                          </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                      </span>
                                    </span>
                                    <span class="navi-text">Privacy</span>
                                    <span class="navi-link-badge">
                                      <span class="label label-light-danger label-rounded font-weight-bold">5</span>
                                    </span>
                                  </a>
                                </li>
                              </ul>
                              <!--end::Navigation-->
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--end::Header-->
                      <!--begin::Body-->
                      <div class="card-body">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                          <!--begin::Text-->
                          <div class="d-flex flex-column flex-grow-1 pr-3">
                            <a href="#" class="text-dark-75 text-hover-primary mb-1 font-weight-bolder font-size-lg">Templates</a>
                            <span class="text-muted font-weight-bold">Front-end, Admin</span>
                          </div>
                          <!--end::Text-->
                          <!--begin::Sparkline-->
                          <div id="kt_mixed_widget_3_sparkline_1" class="mr-7"></div>
                          <!--end::Sparkline-->
                          <!--begin::label-->
                          <div class="ml-1">
                            <span class="text-dark-75 font-size-lg font-weight-bolder d-block text-right">5.7k</span>
                            <span class="label label-lg label-light-danger label-inline font-size-sm font-weight-bold">+780</span>
                          </div>
                          <!--end::label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                          <!--begin::Text-->
                          <div class="d-flex flex-column flex-grow-1 pr-3">
                            <a href="#" class="text-dark-75 text-hover-primary mb-1 font-weight-bolder font-size-lg">Wordpress</a>
                            <span class="text-muted font-weight-bold">eCommerce, Website</span>
                          </div>
                          <!--end::Text-->
                          <!--begin::Sparkline-->
                          <div id="kt_mixed_widget_3_sparkline_2" class="mr-7"></div>
                          <!--end::Sparkline-->
                          <!--begin::label-->
                          <div class="">
                            <span class="text-dark-75 font-size-lg font-weight-bolder d-block text-right">2.8k</span>
                            <span class="label label-lg label-light-success label-inline font-size-sm font-weight-bold">+350</span>
                          </div>
                          <!--end::label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                          <!--begin::Text-->
                          <div class="d-flex flex-column flex-grow-1 pr-3">
                            <a href="#" class="text-dark-75 text-hover-primary mb-1 font-weight-bolder font-size-lg">UI/UX Design</a>
                            <span class="text-muted font-weight-bold">Dashbards</span>
                          </div>
                          <!--end::Text-->
                          <!--begin::Sparkline-->
                          <div id="kt_mixed_widget_3_sparkline_3" class="mr-7"></div>
                          <!--end::Sparkline-->
                          <!--begin::label-->
                          <div class="">
                            <span class="text-dark-75 font-size-lg font-weight-bolder d-block text-right">9.3k</span>
                            <span class="label label-lg label-light-info label-inline font-size-sm font-weight-bold">+2.1k</span>
                          </div>
                          <!--end::label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                          <!--begin::Text-->
                          <div class="d-flex flex-column flex-grow-1 pr-3">
                            <a href="#" class="text-dark-75 text-hover-primary mb-1 font-weight-bolder font-size-lg">SAAS Soluton</a>
                            <span class="text-muted font-weight-bold">Python, Django</span>
                          </div>
                          <!--end::Text-->
                          <!--begin::Sparkline-->
                          <div id="kt_mixed_widget_3_sparkline_4" class="mr-7"></div>
                          <!--end::Sparkline-->
                          <!--begin::label-->
                          <div class="">
                            <span class="text-dark-75 font-size-lg font-weight-bolder d-block text-right">4k</span>
                            <span class="label label-lg label-light-danger label-inline font-size-sm font-weight-bold">+1.6k</span>
                          </div>
                          <!--end::label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                          <!--begin::Text-->
                          <div class="d-flex flex-column flex-grow-1 pr-3">
                            <a href="#" class="text-dark-75 text-hover-primary mb-1 font-weight-bolder font-size-lg">Laravel Starter</a>
                            <span class="text-muted font-weight-bold">PHP, MySQL</span>
                          </div>
                          <!--end::Text-->
                          <!--begin::Sparkline-->
                          <div id="kt_mixed_widget_3_sparkline_5" class="mr-11"></div>
                          <!--end::Sparkline-->
                          <!--begin::label-->
                          <div class="">
                            <span class="text-dark-75 font-size-lg font-weight-bolder d-block text-right">800</span>
                            <span class="label label-lg label-light-primary label-inline font-size-sm font-weight-bold">96</span>
                          </div>
                          <!--end::label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center">
                          <!--begin::Text-->
                          <div class="d-flex flex-column flex-grow-1 pr-3">
                            <a href="#" class="text-dark-75 text-hover-primary mb-1 font-weight-bolder font-size-lg">Visual Banners</a>
                            <span class="text-muted font-weight-bold">PSD, Illustrator</span>
                          </div>
                          <!--end::Text-->
                          <!--begin::Sparkline-->
                          <div id="kt_mixed_widget_3_sparkline_6" class="mr-7"></div>
                          <!--end::Sparkline-->
                          <!--begin::label-->
                          <div class="">
                            <span class="text-dark-75 font-size-lg font-weight-bolder d-block text-right">3.9k</span>
                            <span class="label label-lg label-light-warning label-inline font-size-sm font-weight-bold">+500</span>
                          </div>
                          <!--end::label-->
                        </div>
                        <!--end::Item-->
                      </div>
                      <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 3-->
                  </div>
                  <div class="col-lg-4">
                    <!--begin::Mixed Widget 4-->
                    <div class="card card-custom card-stretch gutter-b">
                      <!--begin::Header-->
                      <div class="card-header border-0 pt-6">
                        <h3 class="card-title align-items-start flex-column">
                          <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Top Materials</span>
                          <span class="text-muted mt-3 font-weight-bold font-size-lg">240,000 Total Sales</span>
                        </h3>
                        <div class="card-toolbar">
                          <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
                            <a href="#" class="btn btn-icon-primary btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="svg-icon svg-icon-lg">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Text/Dots.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1">
                                    <rect x="14" y="9" width="6" height="6" rx="3" fill="black" />
                                    <rect x="3" y="9" width="6" height="6" rx="3" fill="black" fill-opacity="0.7" />
                                  </g>
                                </svg>
                                <!--end::Svg Icon-->
                              </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                              <!--begin::Navigation-->
                              <ul class="navi navi-hover py-5">
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <span class="svg-icon svg-icon-md svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                          </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                      </span>
                                    </span>
                                    <span class="navi-text">Member</span>
                                  </a>
                                </li>
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <span class="svg-icon svg-icon-md svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Clipboard-check.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3" />
                                            <path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000" />
                                            <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000" />
                                          </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                      </span>
                                    </span>
                                    <span class="navi-text">Contact</span>
                                  </a>
                                </li>
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <span class="svg-icon svg-icon-md svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Time-schedule.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M10.9630156,7.5 L11.0475062,7.5 C11.3043819,7.5 11.5194647,7.69464724 11.5450248,7.95024814 L12,12.5 L15.2480695,14.3560397 C15.403857,14.4450611 15.5,14.6107328 15.5,14.7901613 L15.5,15 C15.5,15.2109164 15.3290185,15.3818979 15.1181021,15.3818979 C15.0841582,15.3818979 15.0503659,15.3773725 15.0176181,15.3684413 L10.3986612,14.1087258 C10.1672824,14.0456225 10.0132986,13.8271186 10.0316926,13.5879956 L10.4644883,7.96165175 C10.4845267,7.70115317 10.7017474,7.5 10.9630156,7.5 Z" fill="#000000" />
                                            <path d="M7.38979581,2.8349582 C8.65216735,2.29743306 10.0413491,2 11.5,2 C17.2989899,2 22,6.70101013 22,12.5 C22,18.2989899 17.2989899,23 11.5,23 C5.70101013,23 1,18.2989899 1,12.5 C1,11.5151324 1.13559454,10.5619345 1.38913364,9.65805651 L3.31481075,10.1982117 C3.10672013,10.940064 3,11.7119264 3,12.5 C3,17.1944204 6.80557963,21 11.5,21 C16.1944204,21 20,17.1944204 20,12.5 C20,7.80557963 16.1944204,4 11.5,4 C10.54876,4 9.62236069,4.15592757 8.74872191,4.45446326 L9.93948308,5.87355717 C10.0088058,5.95617272 10.0495583,6.05898805 10.05566,6.16666224 C10.0712834,6.4423623 9.86044965,6.67852665 9.5847496,6.69415008 L4.71777931,6.96995273 C4.66931162,6.97269931 4.62070229,6.96837279 4.57348157,6.95710938 C4.30487471,6.89303938 4.13906482,6.62335149 4.20313482,6.35474463 L5.33163823,1.62361064 C5.35654118,1.51920756 5.41437908,1.4255891 5.49660017,1.35659741 C5.7081375,1.17909652 6.0235153,1.2066885 6.2010162,1.41822583 L7.38979581,2.8349582 Z" fill="#000000" opacity="0.3" />
                                          </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                      </span>
                                    </span>
                                    <span class="navi-text">Event</span>
                                    <span class="navi-link-badge">
                                      <span class="label label-light-primary label-inline font-weight-bold">new</span>
                                    </span>
                                  </a>
                                </li>
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <span class="svg-icon svg-icon-md svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Git3.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M7,11 L15,11 C16.1045695,11 17,10.1045695 17,9 L17,8 L19,8 L19,9 C19,11.209139 17.209139,13 15,13 L7,13 L7,15 C7,15.5522847 6.55228475,16 6,16 C5.44771525,16 5,15.5522847 5,15 L5,9 C5,8.44771525 5.44771525,8 6,8 C6.55228475,8 7,8.44771525 7,9 L7,11 Z" fill="#000000" opacity="0.3" />
                                            <path d="M6,21 C7.1045695,21 8,20.1045695 8,19 C8,17.8954305 7.1045695,17 6,17 C4.8954305,17 4,17.8954305 4,19 C4,20.1045695 4.8954305,21 6,21 Z M6,23 C3.790861,23 2,21.209139 2,19 C2,16.790861 3.790861,15 6,15 C8.209139,15 10,16.790861 10,19 C10,21.209139 8.209139,23 6,23 Z" fill="#000000" fill-rule="nonzero" />
                                            <path d="M18,7 C19.1045695,7 20,6.1045695 20,5 C20,3.8954305 19.1045695,3 18,3 C16.8954305,3 16,3.8954305 16,5 C16,6.1045695 16.8954305,7 18,7 Z M18,9 C15.790861,9 14,7.209139 14,5 C14,2.790861 15.790861,1 18,1 C20.209139,1 22,2.790861 22,5 C22,7.209139 20.209139,9 18,9 Z" fill="#000000" fill-rule="nonzero" />
                                            <path d="M6,7 C7.1045695,7 8,6.1045695 8,5 C8,3.8954305 7.1045695,3 6,3 C4.8954305,3 4,3.8954305 4,5 C4,6.1045695 4.8954305,7 6,7 Z M6,9 C3.790861,9 2,7.209139 2,5 C2,2.790861 3.790861,1 6,1 C8.209139,1 10,2.790861 10,5 C10,7.209139 8.209139,9 6,9 Z" fill="#000000" fill-rule="nonzero" />
                                          </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                      </span>
                                    </span>
                                    <span class="navi-text">Task</span>
                                  </a>
                                </li>
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <span class="svg-icon svg-icon-md svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Settings4.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M18.6225,9.75 L18.75,9.75 C19.9926407,9.75 21,10.7573593 21,12 C21,13.2426407 19.9926407,14.25 18.75,14.25 L18.6854912,14.249994 C18.4911876,14.250769 18.3158978,14.366855 18.2393549,14.5454486 C18.1556809,14.7351461 18.1942911,14.948087 18.3278301,15.0846699 L18.372535,15.129375 C18.7950334,15.5514036 19.03243,16.1240792 19.03243,16.72125 C19.03243,17.3184208 18.7950334,17.8910964 18.373125,18.312535 C17.9510964,18.7350334 17.3784208,18.97243 16.78125,18.97243 C16.1840792,18.97243 15.6114036,18.7350334 15.1896699,18.3128301 L15.1505513,18.2736469 C15.008087,18.1342911 14.7951461,18.0956809 14.6054486,18.1793549 C14.426855,18.2558978 14.310769,18.4311876 14.31,18.6225 L14.31,18.75 C14.31,19.9926407 13.3026407,21 12.06,21 C10.8173593,21 9.81,19.9926407 9.81,18.75 C9.80552409,18.4999185 9.67898539,18.3229986 9.44717599,18.2361469 C9.26485393,18.1556809 9.05191298,18.1942911 8.91533009,18.3278301 L8.870625,18.372535 C8.44859642,18.7950334 7.87592081,19.03243 7.27875,19.03243 C6.68157919,19.03243 6.10890358,18.7950334 5.68746499,18.373125 C5.26496665,17.9510964 5.02757002,17.3784208 5.02757002,16.78125 C5.02757002,16.1840792 5.26496665,15.6114036 5.68716991,15.1896699 L5.72635306,15.1505513 C5.86570889,15.008087 5.90431906,14.7951461 5.82064513,14.6054486 C5.74410223,14.426855 5.56881236,14.310769 5.3775,14.31 L5.25,14.31 C4.00735931,14.31 3,13.3026407 3,12.06 C3,10.8173593 4.00735931,9.81 5.25,9.81 C5.50008154,9.80552409 5.67700139,9.67898539 5.76385306,9.44717599 C5.84431906,9.26485393 5.80570889,9.05191298 5.67216991,8.91533009 L5.62746499,8.870625 C5.20496665,8.44859642 4.96757002,7.87592081 4.96757002,7.27875 C4.96757002,6.68157919 5.20496665,6.10890358 5.626875,5.68746499 C6.04890358,5.26496665 6.62157919,5.02757002 7.21875,5.02757002 C7.81592081,5.02757002 8.38859642,5.26496665 8.81033009,5.68716991 L8.84944872,5.72635306 C8.99191298,5.86570889 9.20485393,5.90431906 9.38717599,5.82385306 L9.49484664,5.80114977 C9.65041313,5.71688974 9.7492905,5.55401473 9.75,5.3775 L9.75,5.25 C9.75,4.00735931 10.7573593,3 12,3 C13.2426407,3 14.25,4.00735931 14.25,5.25 L14.249994,5.31450877 C14.250769,5.50881236 14.366855,5.68410223 14.552824,5.76385306 C14.7351461,5.84431906 14.948087,5.80570889 15.0846699,5.67216991 L15.129375,5.62746499 C15.5514036,5.20496665 16.1240792,4.96757002 16.72125,4.96757002 C17.3184208,4.96757002 17.8910964,5.20496665 18.312535,5.626875 C18.7350334,6.04890358 18.97243,6.62157919 18.97243,7.21875 C18.97243,7.81592081 18.7350334,8.38859642 18.3128301,8.81033009 L18.2736469,8.84944872 C18.1342911,8.99191298 18.0956809,9.20485393 18.1761469,9.38717599 L18.1988502,9.49484664 C18.2831103,9.65041313 18.4459853,9.7492905 18.6225,9.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path d="M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000" />
                                          </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                      </span>
                                    </span>
                                    <span class="navi-text">Settings</span>
                                  </a>
                                </li>
                                <li class="navi-separator my-3"></li>
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <span class="svg-icon svg-icon-md svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Info-circle.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                                            <rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
                                            <rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
                                          </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                      </span>
                                    </span>
                                    <span class="navi-text">Help</span>
                                  </a>
                                </li>
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <span class="svg-icon svg-icon-md svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Safe-chat.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M8,17 C8.55228475,17 9,17.4477153 9,18 L9,21 C9,21.5522847 8.55228475,22 8,22 L3,22 C2.44771525,22 2,21.5522847 2,21 L2,18 C2,17.4477153 2.44771525,17 3,17 L3,16.5 C3,15.1192881 4.11928813,14 5.5,14 C6.88071187,14 8,15.1192881 8,16.5 L8,17 Z M5.5,15 C4.67157288,15 4,15.6715729 4,16.5 L4,17 L7,17 L7,16.5 C7,15.6715729 6.32842712,15 5.5,15 Z" fill="#000000" opacity="0.3" />
                                            <path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000" />
                                          </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                      </span>
                                    </span>
                                    <span class="navi-text">Privacy</span>
                                    <span class="navi-link-badge">
                                      <span class="label label-light-danger label-rounded font-weight-bold">5</span>
                                    </span>
                                  </a>
                                </li>
                              </ul>
                              <!--end::Navigation-->
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--end::Header-->
                      <!--begin::Body-->
                      <div class="card-body">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-9">
                          <!--begin::Symbol-->
                          <div class="symbol symbol-45 symbol-white">
                            <span class="symbol-label d-flex justify-content-start w-35px">
                              <img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />
                            </span>
                          </div>
                          <!--end::Symbol-->
                          <!--begin::Text-->
                          <div class="d-flex flex-column flex-grow-1">
                            <a href="#" class="text-dark-75 text-hover-primary mb-1 font-weight-bolder font-size-lg">Templates</a>
                            <span class="text-muted font-weight-bold">Front-end, Admin</span>
                          </div>
                          <!--end::Text-->
                          <!--begin::label-->
                          <div class="d-flex flex-column">
                            <span class="text-dark-75 font-size-lg font-weight-bolder text-right">5.7k</span>
                            <span class="label label-lg label-light-danger label-inline font-size-sm font-weight-bold">+780</span>
                          </div>
                          <!--end::label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-9">
                          <!--begin::Symbol-->
                          <div class="symbol symbol-45 symbol-white">
                            <span class="symbol-label d-flex justify-content-start w-35px">
                              <img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="" />
                            </span>
                          </div>
                          <!--end::Symbol-->
                          <!--begin::Text-->
                          <div class="d-flex flex-column flex-grow-1">
                            <a href="#" class="text-dark-75 text-hover-primary mb-1 font-weight-bolder font-size-lg">Wordpress</a>
                            <span class="text-muted font-weight-bold">eCommerce, Website</span>
                          </div>
                          <!--end::Text-->
                          <!--begin::label-->
                          <div class="d-flex flex-column">
                            <span class="text-dark-75 font-size-lg font-weight-bolder text-right">2.8k</span>
                            <span class="label label-lg label-light-success label-inline font-size-sm font-weight-bold">+350</span>
                          </div>
                          <!--end::label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-9">
                          <!--begin::Symbol-->
                          <div class="symbol symbol-45 symbol-white">
                            <span class="symbol-label d-flex justify-content-start w-35px">
                              <img src="assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="" />
                            </span>
                          </div>
                          <!--end::Symbol-->
                          <!--begin::Text-->
                          <div class="d-flex flex-column flex-grow-1">
                            <a href="#" class="text-dark-75 text-hover-primary mb-1 font-weight-bolder font-size-lg">UI/UX Design</a>
                            <span class="text-muted font-weight-bold">Dashbards</span>
                          </div>
                          <!--end::Text-->
                          <!--begin::label-->
                          <div class="d-flex flex-column">
                            <span class="text-dark-75 font-size-lg font-weight-bolder text-right">9.3k</span>
                            <span class="label label-lg label-light-info label-inline font-size-sm font-weight-bold">+2.1k</span>
                          </div>
                          <!--end::label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center">
                          <!--begin::Symbol-->
                          <div class="symbol symbol-45 symbol-white">
                            <span class="symbol-label d-flex justify-content-start w-35px">
                              <img src="assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="" />
                            </span>
                          </div>
                          <!--end::Symbol-->
                          <!--begin::Text-->
                          <div class="d-flex flex-column flex-grow-1">
                            <a href="#" class="text-dark-75 text-hover-primary mb-1 font-weight-bolder font-size-lg">SaaS Soluton</a>
                            <span class="text-muted font-weight-bold">Python, Django</span>
                          </div>
                          <!--end::Text-->
                          <!--begin::label-->
                          <div class="d-flex flex-column">
                            <span class="text-dark-75 font-size-lg font-weight-bolder text-right">4k</span>
                            <span class="label label-lg label-light-danger label-inline font-size-sm font-weight-bold">+1.6k</span>
                          </div>
                          <!--end::label-->
                        </div>
                        <!--end::Item-->
                      </div>
                      <!--end::Body-->
                      <!--begin::Footer-->
                      <div class="card-footer border-0 p-0 mt-n15">
                        <!--begin::Chart-->
                        <div id="kt_mixed_widget_5_chart" class="card-rounded-bottom h-150px"></div>
                        <!--end::Chart-->
                      </div>
                      <!--end::Footer-->
                    </div>
                    <!--end::Mixed Widget 4-->
                  </div>
                  <div class="col-lg-4">
                    <!--begin::Mixed Widget 7-->
                    <div class="card card-custom card-stretch gutter-b">
                      <!--begin::Body-->
                      <div class="card-body">
                        <div id="mixed-widget-slider-1" class="carousel slide" data-ride="carousel" data-interval="8000">
                          <!--begin::Top-->
                          <div class="d-flex align-items-center justify-content-between">
                            <!--begin::Label-->
                            <span class="label label-lg label-light-primary label-inline font-size-sm font-weight-bolder py-5">03 SEP, 20</span>
                            <!--end::Label-->
                            <!--begin::Action-->
                            <div class="">
                              <a href="#mixed-widget-slider-1" class="btn btn-icon btn-light btn-sm mr-1" role="button" data-slide="prev">
                                <span class="svg-icon svg-icon-md">
                                  <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-left.svg-->
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <polygon points="0 0 24 0 24 24 0 24" />
                                      <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-12.000003, -11.999999)" />
                                    </g>
                                  </svg>
                                  <!--end::Svg Icon-->
                                </span>
                              </a>
                              <a href="#mixed-widget-slider-1" class="btn btn-icon btn-light btn-sm" role="button" data-slide="next">
                                <span class="svg-icon svg-icon-md">
                                  <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <polygon points="0 0 24 0 24 24 0 24" />
                                      <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
                                    </g>
                                  </svg>
                                  <!--end::Svg Icon-->
                                </span>
                              </a>
                            </div>
                            <!--end::Action-->
                          </div>
                          <!--end::Top-->
                          <!--begin::Carousel-->
                          <div class="carousel-inner pt-9">
                            <div class="carousel-item">
                              <!--begin::Section-->
                              <div class="flex-grow-1">
                                <!--begin::Title-->
                                <h3 class="font-size-h4 text-dark-75 text-hover-primary font-weight-bold">AirGreat Presentation</h3>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <p class="text-dark-75 font-size-lg font-weight-normal pt-2">To start a blog, think of a topic about and first brainstorm ways to write details</p>
                                <!--end::Text-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Section-->
                              <div class="flex-grow-1">
                                <!--begin::Subtitle-->
                                <span class="font-size-h6 text-muted text-hover-primary font-weight-bold pt-3 pb-5 d-block text-uppercase">Teams</span>
                                <!--end::Subtitle-->
                                <!--begin::Labels-->
                                <div class="d-inline">
                                  <span class="label label-lg label-light-warning label-inline font-size-sm font-weight-bolder py-5 mr-4">VueJS</span>
                                  <span class="label label-lg label-light-danger label-inline font-size-sm font-weight-bolder py-5">Django</span>
                                </div>
                                <!--end::Labels-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Section-->
                              <div class="pt-7">
                                <!--begin::Subtitle-->
                                <span class="font-size-h6 text-muted text-hover-primary font-weight-bold pb-4 text-uppercase d-block">Memebrers</span>
                                <!--end::Subtitle-->
                                <!--begin::Symbols-->
                                <div class="d-flex align-items-center">
                                  <!--begin::Symbol-->
                                  <div class="symbol symbol-35 symbol-light-danger flex-shrink-0 mr-3">
                                    <span class="symbol-label font-weight-bolder font-size-lg">LO</span>
                                  </div>
                                  <!--end::Symbol-->
                                  <!--begin::Symbol-->
                                  <div class="symbol symbol-35 flex-shrink-0 mr-3">
                                    <img alt="Pic" src="assets/media/users/150-1.jpg" />
                                  </div>
                                  <!--end::Symbol-->
                                  <!--begin::Symbol-->
                                  <div class="symbol symbol-35 symbol-light-info flex-shrink-0 mr-3">
                                    <span class="symbol-label font-weight-bolder font-size-lg">TR</span>
                                  </div>
                                  <!--end::Symbol-->
                                  <!--begin::Symbol-->
                                  <div class="symbol symbol-35 symbol-light-success flex-shrink-0 mr-3">
                                    <span class="symbol-label font-weight-bolder font-size-lg">ER</span>
                                  </div>
                                  <!--end::Symbol-->
                                  <!--begin::Symbol-->
                                  <div class="symbol symbol-35 flex-shrink-0">
                                    <img alt="Pic" src="assets/media/users/150-2.jpg" />
                                  </div>
                                  <!--end::Symbol-->
                                </div>
                                <!--end::Symbols-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Section-->
                              <div class="d-flex pt-9">
                                <!--begin::Info-->
                                <div class="bg-light rounded w-90px h-60px d-flex flex-center flex-column mr-3">
                                  <span class="font-size-sm font-weight-bold text-muted pb-1">Due Date</span>
                                  <span class="font-size-sm font-weight-bolder text-dark-75">Apr 11, 20</span>
                                </div>
                                <!--end::Info-->
                                <!--begin::Info-->
                                <div class="bg-light rounded w-90px h-60px d-flex flex-center flex-column mr-3">
                                  <span class="font-size-sm font-weight-bold text-muted pb-1">Budget</span>
                                  <span class="font-size-sm font-weight-bolder text-dark-75">$65,000</span>
                                </div>
                                <!--end::Info-->
                                <!--begin::Info-->
                                <div class="bg-light rounded w-90px h-60px d-flex flex-center flex-column">
                                  <span class="font-size-sm font-weight-bold text-muted pb-1">Cost</span>
                                  <span class="font-size-sm font-weight-bolder text-dark-75">$54,500</span>
                                </div>
                                <!--end::Info-->
                              </div>
                              <!--end::Section-->
                            </div>
                            <div class="carousel-item">
                              <!--begin::Section-->
                              <div class="flex-grow-1">
                                <!--begin::Title-->
                                <h3 class="font-size-h4 text-dark-75 text-hover-primary font-weight-bold">AirGreat Presentation</h3>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <p class="text-dark-75 font-size-lg font-weight-normal pt-2">To start a blog, think of a topic about and first brainstorm ways to write details</p>
                                <!--end::Text-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Section-->
                              <div class="flex-grow-1">
                                <!--begin::Subtitle-->
                                <span class="font-size-h6 text-muted text-hover-primary font-weight-bold pt-3 pb-5 d-block text-uppercase">Teams</span>
                                <!--end::Subtitle-->
                                <!--begin::Labels-->
                                <div class="d-inline">
                                  <span class="label label-lg label-light-warning label-inline font-size-sm font-weight-bolder py-5 mr-4">VueJS</span>
                                  <span class="label label-lg label-light-danger label-inline font-size-sm font-weight-bolder py-5">Django</span>
                                </div>
                                <!--end::Labels-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Section-->
                              <div class="pt-7">
                                <!--begin::Subtitle-->
                                <span class="font-size-h6 text-muted text-hover-primary font-weight-bold pb-4 text-uppercase d-block">Memebrers</span>
                                <!--end::Subtitle-->
                                <!--begin::Symbols-->
                                <div class="d-flex align-items-center">
                                  <!--begin::Symbol-->
                                  <div class="symbol symbol-35 flex-shrink-0 mr-3">
                                    <img alt="Pic" src="assets/media/users/150-3.jpg" />
                                  </div>
                                  <!--end::Symbol-->
                                  <!--begin::Symbol-->
                                  <div class="symbol symbol-35 symbol-light-primary flex-shrink-0 mr-3">
                                    <span class="symbol-label font-weight-bolder font-size-lg">KP</span>
                                  </div>
                                  <!--end::Symbol-->
                                  <!--begin::Symbol-->
                                  <div class="symbol symbol-35 symbol-light-info flex-shrink-0 mr-3">
                                    <span class="symbol-label font-weight-bolder font-size-lg">KU</span>
                                  </div>
                                  <!--end::Symbol-->
                                  <!--begin::Symbol-->
                                  <div class="symbol symbol-35 flex-shrink-0 mr-3">
                                    <img alt="Pic" src="assets/media/users/150-4.jpg" />
                                  </div>
                                  <!--end::Symbol-->
                                  <!--begin::Symbol-->
                                  <div class="symbol symbol-35 symbol-light-danger flex-shrink-0">
                                    <span class="symbol-label font-weight-bolder font-size-lg">GR</span>
                                  </div>
                                  <!--end::Symbol-->
                                </div>
                                <!--end::Symbols-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Section-->
                              <div class="d-flex pt-9">
                                <!--begin::Info-->
                                <div class="bg-light rounded w-90px h-60px d-flex flex-center flex-column mr-3">
                                  <span class="font-size-sm font-weight-bold text-muted pb-1">Due Date</span>
                                  <span class="font-size-sm font-weight-bolder text-dark-75">Apr 22, 10</span>
                                </div>
                                <!--end::Info-->
                                <!--begin::Info-->
                                <div class="bg-light rounded w-90px h-60px d-flex flex-center flex-column mr-3">
                                  <span class="font-size-sm font-weight-bold text-muted pb-1">Budget</span>
                                  <span class="font-size-sm font-weight-bolder text-dark-75">$43,000</span>
                                </div>
                                <!--end::Info-->
                                <!--begin::Info-->
                                <div class="bg-light rounded w-90px h-60px d-flex flex-center flex-column">
                                  <span class="font-size-sm font-weight-bold text-muted pb-1">Cost</span>
                                  <span class="font-size-sm font-weight-bolder text-dark-75">$32,500</span>
                                </div>
                                <!--end::Info-->
                              </div>
                              <!--end::Section-->
                            </div>
                            <div class="carousel-item active">
                              <!--begin::Section-->
                              <div class="flex-grow-1">
                                <!--begin::Title-->
                                <h3 class="font-size-h4 text-dark-75 text-hover-primary font-weight-bold">AirGreat Presentation</h3>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <p class="text-dark-75 font-size-lg font-weight-normal pt-2">To start a blog, think of a topic about and first brainstorm ways to write details</p>
                                <!--end::Text-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Section-->
                              <div class="">
                                <!--begin::Subtitle-->
                                <span class="font-size-h6 text-muted text-hover-primary font-weight-bold pt-3 pb-5 d-block text-uppercase">Teams</span>
                                <!--end::Subtitle-->
                                <!--begin::Labels-->
                                <div class="d-inline">
                                  <span class="label label-lg label-light-warning label-inline font-size-sm font-weight-bolder py-5 mr-4">VueJS</span>
                                  <span class="label label-lg label-light-danger label-inline font-size-sm font-weight-bolder py-5">Django</span>
                                </div>
                                <!--end::Labels-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Section-->
                              <div class="pt-7">
                                <!--begin::Subtitle-->
                                <span class="font-size-h6 text-muted text-hover-primary font-weight-bold pb-4 text-uppercase d-block">Memebrers</span>
                                <!--end::Subtitle-->
                                <!--begin::Symbols-->
                                <div class="d-flex align-items-center">
                                  <!--begin::Symbol-->
                                  <div class="symbol symbol-35 symbol-light-success flex-shrink-0 mr-3">
                                    <span class="symbol-label font-weight-bolder font-size-lg">SC</span>
                                  </div>
                                  <!--end::Symbol-->
                                  <!--begin::Symbol-->
                                  <div class="symbol symbol-35 flex-shrink-0 mr-3">
                                    <img alt="Pic" src="assets/media/users/150-5.jpg" />
                                  </div>
                                  <!--end::Symbol-->
                                  <!--begin::Symbol-->
                                  <div class="symbol symbol-35 symbol-light-danger flex-shrink-0 mr-3">
                                    <span class="symbol-label font-weight-bolder font-size-lg">FW</span>
                                  </div>
                                  <!--end::Symbol-->
                                  <!--begin::Symbol-->
                                  <div class="symbol symbol-35 symbol-light-info flex-shrink-0 mr-3">
                                    <span class="symbol-label font-weight-bolder font-size-lg">AH</span>
                                  </div>
                                  <!--end::Symbol-->
                                  <!--begin::Symbol-->
                                  <div class="symbol symbol-35 flex-shrink-0">
                                    <img alt="Pic" src="assets/media/users/150-7.jpg" />
                                  </div>
                                  <!--end::Symbol-->
                                </div>
                                <!--end::Symbols-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Section-->
                              <div class="d-flex pt-9">
                                <!--begin::Info-->
                                <div class="bg-light rounded w-90px h-60px d-flex flex-center flex-column mr-3">
                                  <span class="font-size-sm font-weight-bold text-muted pb-1">Due Date</span>
                                  <span class="font-size-sm font-weight-bolder text-dark-75">Apr 27, 20</span>
                                </div>
                                <!--end::Info-->
                                <!--begin::Info-->
                                <div class="bg-light rounded w-90px h-60px d-flex flex-center flex-column mr-3">
                                  <span class="font-size-sm font-weight-bold text-muted pb-1">Budget</span>
                                  <span class="font-size-sm font-weight-bolder text-dark-75">$32,000</span>
                                </div>
                                <!--end::Info-->
                                <!--begin::Info-->
                                <div class="bg-light rounded w-90px h-60px d-flex flex-center flex-column">
                                  <span class="font-size-sm font-weight-bold text-muted pb-1">Cost</span>
                                  <span class="font-size-sm font-weight-bolder text-dark-75">$27,500</span>
                                </div>
                                <!--end::Info-->
                              </div>
                              <!--end::Section-->
                            </div>
                          </div>
                          <!--end::Carousel-->
                        </div>
                      </div>
                      <!--end::Body-->
                      <!--begin::Footer-->
                      <div class="card-footer d-flex align-items-center justify-content-between py-5">
                        <span class="text-muted font-weight-bold m-0">39 Members, 240 Tasks</span>
                        <a href="#" class="btn btn-sm btn-primary font-weight-bolder">Join</a>
                      </div>
                      <!--end::Footer-->
                    </div>
                    <!--end::Mixed Widget 7-->
                  </div>
                </div>
                <!--end::Row-->
              </div>
              <!--end::Container-->
            </div>
            <!--end::Entry-->
        @break

       
    @endswitch


@endsection


