@extends('layout')
@section('title' , "Inicio")
@section('content')

@if(session('mensaje'))  
  <!-- <script> alert('Identificacion Ya Esta Registrada') </script> -->
    <div class="alert alert-danger" role="alert">
        {{session('mensaje')}}
    </div>  
@endif

@if(session('exito'))  
  <!-- <script> alert('Identificacion Ya Esta Registrada') </script> -->
    <div class="alert alert-success" role="alert">
        {{session('exito')}}
        {{session('name')}}
        {{session('lastname')}}
        {{session('email')}}
    </div>  
@endif
			<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
						  <div class="container">
								<div class="row">
									<div class="col-lg-12">
										<!--begin::Nav Panels Wizard 2-->
										<div class="card card-custom gutter-b">
											<!--begin::Body-->
											<div class="card card-custom">
 <div class="card-header">
  <div class="card-title">
            <span class="card-icon">
                <i class="flaticon2-chat-1 text-primary"></i>
            </span>
   <h3 class="card-label">
    Select Option register
    <small>read before making a registration</small>
   </h3>
  </div>
 </div>
 <div class="card-body">
  
<div><h5>Select a registration option, take into account the profiles that are managed on the platform, then a brief explanation of each profile will be given for you to register:</h5></div>
<br>
<div><h6>Administrator:</h6>  </div>
<div><h6>Super-Amiga:</h6>  </div>
<div><h6>Amiga:</h6>  </div>


 </div>
    <div class="card-footer d-flex justify-content-between">
        <a href="{{ route('admins.createsamiga')  }}" class="btn btn-light-primary font-weight-bold">Super-Amiga</a>
        <a href="{{ route('admins.create')  }}" class="btn btn-outline-secondary font-weight-bold">Other Profiles</a>
 </div>
</div>
										<!--end::Nav Panels Wizard 2-->
									</div>

							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					</div>
					</div>


	

@endsection


