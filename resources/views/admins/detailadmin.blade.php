@extends('layout')

@section('title' , "Usuario {$user->id}")

@section('content')
<h1>Administrador # {{$user->id}}</h1>
<div class="table-responsive"> 
<table class="table table-striped">  
    <thead class="table-primary" >
    <tr>
     <th scope="col" style="text-align:center" colspan="4"><font size=3 face="arial" color="navy">Usuario Administrador: {{$user->name}} </th> 
    <th scope="col" style="text-align:center;" colspan="1"><font size=3 face="arial" color="navy">Acciones </th>      
    </tr>
  </thead> 
 <tbody>    
    <tr>
  @if(empty($user->documento_id))
      <tr><th scope="col">Tipo Documento</th><td><font size=3 face="arial" color="Blue"></td>
  @else
      <tr><th scope="col">Tipo Documento</th><td><font size=3 face="arial" color="Blue">{{$user->documento->title}}</td>
  @endif
          <th scope="col">Numero Documento</th><td><font size=3 face="arial" color="Blue">{{$user->identificacion}}</td></tr>  
  @if($user->estado == 0)
    <tr><th scope="col">Estado</th><td><font size=3 face="arial" color="RED"> Inactivo</td>
  @else
    <tr><th scope="col">Estado</th><td><font size=3 face="arial" color="Blue"> Activo</td>
  @endif
        <th scope="col">Correo Electronico</th><td><font size=3 face="arial" color="Blue">{{$user->email}}</td></tr>
    <tr><th scope="col">Creado</th><td><font size=3 face="arial" color="Blue">{{$user->created_at}}</td>
        <th scope="col">Actualizado</th> <td><font size=3 face="arial" color="Blue">{{$user->updated_at}}</td>
        <td  style="text-align:center"><font  size=3 face="arial">        
         <form action=" {{ route('users.deleteadmin',$user) }}" method="POST">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
        <a href="{{ route('users.editadmin',$user) /*  simplifica y pasa solo modelo el identifica el id */ }}"><i class="fas fa-edit"></i> </a>
        <button type="submit" class="btn btn-link"><i class="fas fa-trash"></i></button>
        </form>
      </td>  
    </tr> 

 </tbody> 
</table>  
		</div>
	<p>
		<a href="{{ route('users.listadmin') }}" class="btn btn-primary"> Regresar al listado</a>
	</p>


@endsection

