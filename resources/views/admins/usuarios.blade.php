@extends('layout')
@section('title' , "Profesiones")
@section('content')

 @if($users->isNotEmpty())  
   @yield($aux=1)
 
  <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text-primary">{{$title}}</h3>
    </div>
  <div class="card-body">
    <div class="table-responsive">
       <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
	<tr>
      <th scope="col">Conteo</th>
      <th scope="col">T-documento</th>
      <th scope="col">#-documento</th>
      <th scope="col" style="text-align:center">nombre</th>
      <th scope="col" style="text-align:center">Administrador</th>
      <th scope="col" style="text-align:center">Email</th>
      

 </tr>
  </thead>
  <tfoot>
  <th scope="col">Conteo</th>
      <th scope="col">T-documento</th>
      <th scope="col">#-documento</th>
      <th scope="col" style="text-align:center">nombre</th>
      <th scope="col" style="text-align:center">Administrador</th>
      <th scope="col" style="text-align:center">Email</th>
   </tfoot>
  <tbody>
			
	
@forelse($users as $user)
    <tr>
      <th scope="row">{{$aux}}</th>
  @if(empty($user->documento_id))
      <td><font size=3 face="arial" color="Blue"> </td>
  @else
      <td><font size=3 face="arial" color="Blue">{{$user->documento->title}}</td>
  @endif 
      <td style="text-align:center"><font  size=3 face="arial">{{$user->identificacion}}</td>   
      <td style="text-align:center"><font  size=3 face="arial">{{$user->name}}</td>      
 @if($user->t_user == 0)
      <td style="text-align:center"><font size=3 face="arial" color="Red"> NO</td>
  @else
      <td style="text-align:center"><font size=3 face="arial" color="Blue">SI</td>
  @endif
      <td style="text-align:center"><font  size=3 face="arial">{{$user->email}} </a></td>  
    </tr>   
    @yield($aux++)
@endforeach 
                  </tbody>
                </table>
              </div>
            </div>
			@else
				<p>No Hay Profesiones Registradas</p>

 @endif		
         
                 
        <!-- /.container-fluid -->
      </div>

      
@endsection
