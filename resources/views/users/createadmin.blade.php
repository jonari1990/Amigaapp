@extends('layout')
@section('title' , "Crear usuario")
@section('content')

<div class="card shadow mb-4">
       <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
       <h3 class="m-0 font-weight-bold text-primary">Crear Usuario</h3>
       </a>
  <div class="collapse show" id="collapseCardExample">
     <div class="card-body">
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
		
	
	   <form method="POST" action="{{ url('saveadmin') }}">

		      {!! csrf_field() !!}

	     
        <div class="form-group"> 
          <select class="form-control" name="documento_id" id="documento_id">
             <option value="">Tipo Documento:</option>
           @forelse($tipo_documento as $tipo_documento)
             <option value="{{ $tipo_documento->id }}">{{  $tipo_documento->title }}</option>;
           @endforeach
          </select>       
       </div>

       <div class="form-group">        
        <input type="number" class="form-control" name="identificacion" placeholder="# Identificacion" value="{{ old('identificacion') }}"required>
       </div>

       <div class="form-group">        
        <input type="text" class="form-control" name="name" placeholder="Nombre Completo" value="{{ old('name') }}" required>  
       </div>

       <div class="form-group">        
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Email" value="{{ old('email') }}" required>
       </div>       

       <div class="form-group">        
        <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
       </div>

       <div class="form-group"> 
          <select class="form-control" name="estado" id="estado">
             <option value="">Estado:</option>
             <option value="1">Activo</option>
             <option value="0">Inactivo</option>         
          </select>       
       </div>
            
              <input type="hidden"  name="t_user" value="1" >
		          <button type="submit" class="btn btn-primary"> Crear usuario </button>
		          <a href="{{ route('users.listadmin') }}" class="btn btn-link"> Regresar al listado</a>

	   </form>

      </div>

   </div>

</div>

@endsection

