@extends('layouts.reset')

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
                            <img src="../../vendor/assets/media/logos/final.png" alt="logo" class="h-70px" />
                        </a>
                        <!--end::Aside header-->
                        <!--begin::Aside title-->
                        <h3 class="font-weight-bolder text-center font-size-h4 font-size-h1-lg text-white">Discover Keen's Amazing
                        <br />Features &amp; Possibilites</h3>
                        <!--end::Aside title-->
                    </div>
                    <!--end::Aside Top-->
                    <!--begin::Aside Bottom-->
                    <div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url(../../vendor/assets/media/svg/illustrations/payment.svg)"></div>
                    <!--end::Aside Bottom-->
                </div>
                <!--begin::Aside-->
                <!--begin::Content-->
                <div class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
                    <!--begin::Content body-->
                    <div class="d-flex flex-column-fluid flex-center">
                        <!--begin::Signin-->
                        <div class="login-form login-signin">
          
                    <form class="form" novalidate="novalidate" method="POST" action="{{ route('password.request') }}">

                    <div class="pb-13 pt-lg-0 pt-5">
                                    <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Reset Password</h3>
                                    <p class="text-muted font-weight-bold font-size-h4">Enter your details to reset your account</p>
                                </div>
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="wrap-input100 validate-input m-b-26{{ $errors->has('email') ? ' has-error' : '' }}">
                           

                             <div class="form-group">
                                    <input id="email" class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" type="email" placeholder="E-Mail Address" name="email" value="{{ $email or old('email') }}" required autofocus/>
                            
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="wrap-input100 validate-input m-b-26{{ $errors->has('password') ? ' has-error' : '' }}">
                           
                            <div class="form-group">
                                    <input id="password" class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" type="password" placeholder="Password" name="password" autocomplete="off" required/>
                                
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="wrap-input100 validate-input m-b-26{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                           
                           <div class="form-group">
                                    <input id="password-confirm" class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" type="password" placeholder="Password confirmation" name="password_confirmation" autocomplete="off" required/>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group d-flex flex-wrap pb-lg-0">
                            
                                <button type="submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">
                                    Reset Password
                                </button>
                            
                                    <a href="{{ route('login') }}" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Cancel</a>
                               
                            
                        </div>
                    </form>
                <</form>
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
@endsection
