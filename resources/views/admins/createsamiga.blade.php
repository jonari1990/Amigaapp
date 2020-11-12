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
												<h3 class="card-title">Create New Super Amiga</h3>												
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
   </div>

   <div class="col-lg-6">
    <label>last Name:</label>
    <input type="text" name="lastname" class="form-control" placeholder="Enter last name" required/>
   </div>  
   
  </div>

  <div class="form-group row">
   <div class="col-lg-6">
    <label>Date of Birth:</label>
    <input type="text" name="name" class="form-control" placeholder="Enter name" value="{{ session('name') }}" required/>
   </div>

   <div class="col-lg-6">
    <label>Phone:</label>
    <input type="text" name="lastname" class="form-control" placeholder="Enter last name" required/>
   </div>  
   
  </div>

  <div class="form-group row">
   <div class="col-lg-6">
    <label>Email:</label>
    <input type="text" name="name" class="form-control" placeholder="Enter name" value="{{ session('name') }}" required/>
   </div>

   <div class="col-lg-6"> 
    <label>Gender:</label>
          <select class="form-control" name="role_id" id="role_id" required>
             <option value="">Select Gender:</option>
           @forelse($gender as $gender)
             <option value="{{ $gender->id }}">{{  $gender->title }}</option>;
           @endforeach
          </select>      
    </div>  
   
  </div>
  <div class="form-group row">
   <div class="col-lg-6"> 
   	<label>Select Category one:</label>
          <select class="form-control" name="role_id" id="role_id" required>
             <option value="">Select Category:</option>
           @forelse($tipeuser as $tipeuser)
             <option value="{{ $tipeuser->id }}">{{  $tipeuser->title }}</option>;
           @endforeach
          </select> 
          <span class="form-text text-muted">Please Select Category One</span>      
    </div>
   <div class="col-lg-6"> 
    <label>Select Category two:</label>
          <select class="form-control" name="role_id" id="role_id" required>
             <option value="">Select Category:</option>
           @forelse($tipeuser2 as $tipeuser)
             <option value="{{ $tipeuser->id }}">{{  $tipeuser->title }}</option>;
           @endforeach
          </select> 
          <span class="form-text text-muted">Please Select Category Two</span>      
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


