@extends('layouts.dlogin')

@section('content')

@if(auth()->check())
<script> <!--
window.location.replace('{{ url('/') }}');
</script>      
@endif
<div class="d-flex flex-column flex-root">
            <!--begin::Login-->
            <div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
                <!--begin::Aside-->
                <div class="login-aside d-flex flex-column flex-row-auto" style="background-color: #D2C2E5B5;">
                    <!--begin::Aside Top-->
                    <div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
                        <!--begin::Aside header-->
                        <a href="#" class="text-center mb-15">
                            <img src="vendor/assets/media/logos/final.png" alt="logo" class="h-70px" />
                        </a>
                        <!--end::Aside header-->
                        <!--begin::Aside title-->
                        <h3 class="font-weight-bolder text-center font-size-h4 font-size-h1-lg text-white">Discover Keen's Amazing
                        <br />Features &amp; Possibilites</h3>
                        <!--end::Aside title-->
                    </div>
                    <!--end::Aside Top-->
                    <!--begin::Aside Bottom-->
                    <div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url(vendor/assets/media/svg/illustrations/payment.svg)"></div>
                    <!--end::Aside Bottom-->
                </div>
                <!--begin::Aside-->
                <!--begin::Content-->
                <div class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
                    <!--begin::Content body-->
                    <div class="d-flex flex-column-fluid flex-center">
                        <!--begin::Signin-->
                        <div class="login-form login-signin">
                    <form class="form" novalidate="novalidate" id="kt_login_signup_form">
                                <!--begin::Title-->
                                <div class="pb-13 pt-lg-0 pt-5">
                                    <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Sign Up</h3>
                                    <p class="text-muted font-weight-bold font-size-h4">Enter your details to create your account</p>
                                </div>
                                <!--end::Title-->
                                <!--begin::Form group-->
                                <div class="form-group">
                                    <input class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" type="text" placeholder="Fullname" name="fullname" autocomplete="off" />
                                </div>
                                <!--end::Form group-->
                                <!--begin::Form group-->
                                <div class="form-group">
                                    <input class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" type="email" placeholder="Email" name="email" autocomplete="off" />
                                </div>
                                <!--end::Form group-->
                                <!--begin::Form group-->
                                <div class="form-group">
                                    <input class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" type="password" placeholder="Password" name="password" autocomplete="off" />
                                </div>
                                <!--end::Form group-->
                                <!--begin::Form group-->
                                <div class="form-group">
                                    <input class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" type="password" placeholder="Confirm password" name="cpassword" autocomplete="off" />
                                </div>
                                <!--end::Form group-->
                                <!--begin::Form group-->
                                <div class="form-group d-flex align-items-center">
                                    <label class="checkbox mb-0">
                                        <input type="checkbox" name="agree" />
                                        <span></span>
                                    </label>
                                    <div class="pl-2">I Agree the
                                    <a href="#" class="ml-1">terms and conditions</a></div>
                                </div>
                                <!--end::Form group-->
                                <!--begin::Form group-->
                                <div class="form-group d-flex flex-wrap pb-lg-0 pb-3">
                                    <button type="button" id="kt_login_signup_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">Submit</button>
                                     <a href="{{ route('login') }}" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Cancel</a>
                                </div>
                                <!--end::Form group-->
                            </form>
                 </div>
                        <!--end::Signin-->
                        <!--begin::Signup-->
                                              <!--end::Signup-->
                        <!--begin::Forgot-->
                        
                        <!--end::Forgot-->
                    </div>
                    <!--end::Content body-->
                    <!--begin::Content footer-->
                    <div class="d-flex justify-content-lg-start justify-content-center align-items-end py-7 py-lg-0">
                        <a href="#" class="text-primary font-weight-bolder font-size-h5">Terms</a>
                        <a href="#" class="text-primary ml-10 font-weight-bolder font-size-h5">Plans</a>
                        <a href="#" class="text-primary ml-10 font-weight-bolder font-size-h5">Contact Us</a>
                    </div>
                    <!--end::Content footer-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Login-->
        </div>
