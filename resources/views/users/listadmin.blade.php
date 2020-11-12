@extends('layout')
@section('title' , "Usuarios")
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
    </div>  
@endif

 @if($usersa->isNotEmpty())  
   @yield($aux=1)
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text-primary">{{$title}} <a href="{{ route('users.createadmin') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Nuevo Administrador</a> </h3>
    </div>
  <div class="card-body">
    <div class="table-responsive">
       <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
      <th scope="col">#</th>
      <th scope="col">T-Documento</th>
      <th scope="col"># Documento</th>
      <th scope="col">Usuario</th>
      <th scope="col">Correo Electronico</th> 
      <th scope="col">Estado</th>
      <th scope="col">Acciones</th>
  </thead>
  <tfoot>
      <th scope="col">#</th>
      <th scope="col">T-Documento</th>
      <th scope="col"># Documento</th>
      <th scope="col">Usuario</th>
      <th scope="col">Correo Electronico</th> 
      <th scope="col">Estado</th>
      <th scope="col">Acciones</th>
   </tfoot>
  <tbody>
			
	
@forelse($users as $usera)
    <tr>
      <th scope="row">{{$aux}}</th>
  @if(empty($usera->documento_id))
      <td><font size=3 face="arial" color="Blue">{{ $usera->documento->title }}</font></td>
  @else
      <td><font size=3 face="arial" color="Blue">--</font></td>
  @endif
      <th>{{$usera->identificacion}}</th>
      <th>{{$usera->name}}</th>
      <td><font size=3 face="arial" color="Blue">{{$usera->email}}</font></td>
  @if($usera->estado == 1)
      <td style="text-align:center"><font size=3 face="arial" color="Blue">Activo</font></td>
  @else
      <td style="text-align:center"><font size=3 face="arial" color="Blue">Inactivo</font></td>
  @endif         
      <td> 
        <form action=" {{ route('users.deleteadmin',$usera) }}" method="POST">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
        <a href="{{ route('users.detailadmin',$usera) }}"><i class="fas fa-eye"></i> </a>
        <a href="{{ route('users.editadmin',$usera) /*  simplifica y pasa solo modelo el identifica el id */ }}"><i class="fas fa-edit"></i> </a>
        <button type="submit" class="btn btn-link"><i class="fas fa-trash"></i></button>
        </form>     
      </td> 
    </tr>   
    @yield($aux++)
@endforeach

                  </tbody>
                </table>
              </div>
            </div>

 				
			@else
				<p>No Hay Usuarios Registrados</p>

 @endif		
@endsection
