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

                                <div class="pb-13 pt-lg-0 pt-5">
                                    <h1 class="font-weight-bolder text-center font-size-h4 font-size-h1-lg">Welcome to Amiga app</h1>
                                    <span class="font-weight-bolder text-center font-size-h4 font-size-h1-lg">What do?
                                    <a href="{{ route('auth.select') }}" class="text-primary font-weight-bolder">you want to do</a>
                                    here?
                                    </span>
                                </div>

                                <div align="center">
                                    <div>
                                    <a href="{{ route('auth.create') }}" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">Buy Services</a>
                                                                       
                                    <button type="button" id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Offer Services</button>

                                    </div> 
                                </div>
                                <!--end::Form group-->
                           
                            <!--end::Form-->
                        </div>
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
@endsection

