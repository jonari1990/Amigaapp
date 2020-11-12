@extends('layoutprint')
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
											<div class="card-body pt-4">

											<div class="card-header">
												<h3 class="card-title">Create New User</h3>												
											</div>

										@if ($errors->any())
           								  <div class="alert alert-danger">
            										<h6>Por Favor Corrige los errores de abajo</h6>
            									<ul>                
             								@foreach ($errors->all() as $errors)
                								<li>{{ $errors }}</li>
             							    @endforeach
            									</ul> 
           								  </div>
         								@endif
											
												<form class="form" method="POST" action="{{ url('saveuser') }}">

												{!! csrf_field() !!}
 <div class="card-body">
  <div class="form-group row">
   <div class="col-lg-6">
    <label>Name:</label>
    <input type="text" name="name" class="form-control" placeholder="Enter name" value="{{ session('name') }}" required/>
    <span class="form-text text-muted">Please enter your name</span>
   </div>

   <div class="col-lg-6">
    <label>last Name:</label>
    <input type="text" name="lastname" class="form-control" placeholder="Enter last name" required/>
    <span class="form-text text-muted">Please enter your last name</span>
   </div>  
   
  </div>
  <div class="form-group row">
   <div class="col-lg-6"> 
   	<label>Role User:</label>
          <select class="form-control" name="role_id" id="role_id" required>
             <option value="">Select Role:</option>
           @forelse($tipeuser as $tipeuser)
             <option value="{{ $tipeuser->id }}">{{  $tipeuser->title }}</option>;
           @endforeach
          </select> 
          <span class="form-text text-muted">Please Select Role User</span>      
    </div>
   <div class="col-lg-6">
    <label>Email:</label>
    <div class="input-group">
     <input type="email" name="email" class="form-control" placeholder="Enter your Email" required/>
     <div class="input-group-append"><span class="input-group-text"><i class="la la-bookmark-o"></i></span></div>
    </div>
    <span class="form-text text-muted">Please enter your Email</span>
   </div>
  </div>  
 </div>
 <input type="hidden"  name="state" value="1" >
 <div class="card-footer">
  <div class="row">
   <div class="col-lg-6">
    <button type="submit" class="btn btn-primary mr-2">Save</button>
    <a href="{{ route('admins.option') }}" class="btn btn-secondary">Cancel</a>
   </div>
  </div>
 </div>
</form>
																				<!--end::Body-->
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


