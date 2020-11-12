<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Role;
use App\Gender;
use App\UserProfile;
use App\Documento;
use App\Useradmin;
use Mail;

class AdminController extends Controller
{
    
   public function option(User $user)    {
       
      return view('admins.option', compact('user'));
    }

   public function createuser(User $user)
    {
        $tipeuser= Role::all()->where('id', '!=' , '2');
    	return view('admins.create', compact('user','tipeuser'));
    }

    public function createsamiga(User $user)
    {
      $tipeuser= Role::all()->where('id', '!=' , '2');
      $tipeuser2= Role::all()->where('id', '!=' , '2');
      $gender= Gender::all();
      return view('admins.createsamiga', compact('user','tipeuser','tipeuser2','gender'));
    }

    public function saveuser(Request $request)
    {

        $data = request()->validate([
                'name'=>'required',
                'lastname'=>'required',
                'role_id'=>'required',
                'email'=>'required|email|unique:users,email',
                'state'=>'required',                                             

        ], [

            'name.required'           =>'Falta Nombre de la persona',
            'lastname.required'       =>'Falta lastname',            
            'email.required'          =>'El email es necesario',
            'email.email'             =>'Email no valido',
            'email.unique'            =>'Email Ya existe',
            'role_id.required'        =>'Es necesario Elegir un Rol',

        ]);


          $data['password']=str_random(8);
          $pass=bcrypt($data['password']);
        User::create([
            'email'=>$data['email'],
            'email_confirmed'=>$data['email'],
            'password'=>$pass,
            'role_id'=>$data['role_id'],
            'state'=>$data['state'],
            'remember_token' => str_random(10),
        ]);

         $userid = User::where('email' , $data['email'])->value('id');      

        UserProfile::create([
            'user_id'=> $userid,
            'name'=>$data['name'],
            'lastname'=>$data['lastname'],
        ]); 


       $subject = "Tu Registro Fue exitoso: ";
        $for = $data['email'];
        Mail::send('email', $data,function($msj) use($subject,$for){
            $msj->from("tucorreo@gmail.com","Gracias por registrarse");
            $msj->subject($subject);
            $msj->to($for);
        }); 

        $exito = 'Usuario '.$data['name'].' '.$data['lastname'].' Creado con exito';
        $user= user::all();

       return redirect()->route('admins.create')->with('user',$user)->with('exito',$exito);    

        
    }

     public function editadmin($user)    {
        	
    	$user= User::find($user);
    	//dd($user);
        $tipo_documento= Documento::all();
        return view('users.editadmin', ['user'=>$user],compact('tipo_documento'));
        
    }

       public function usuarios()
    {
      $users= User::all() ;       
       //->where('t_user' , '0');
      $title='Listado de usuarios';
      return view('users.usuarios',compact('title','users')); 
    }

    public function listadmin(User $user)
    {
        $usersa= User::all() ; 
        $title='Listado de usuarios';
        return view('admins.listadmin',compact('title','user','usersa')); 
    }  

    public function updateadmin(Useradmin $user)
    {
        
        $data = request()->validate([                            
                'name'=>'required',
                'email'=>'required|email|unique:useradmins,email,'.$user->id,              
                'password'=>'', 
                'estado'=>'required',                                 

        ], [            
            'email.required'          =>'El email es necesario',
            'email.email'             =>'Email no valido',
            'email.unique'            =>'Email Ya existe',
            'estado.required'         =>'Debe selecionar un estado',
        ]);
       
       if($data['password'] != null){
            $data['password']=bcrypt($data['password']);
       }else{
            unset($data['password']) ;
       }

       $user->update($data);
      // $userp = User::where('identificacion' , $data['identificacion'] )->first();
       $userp->update($data);

       return redirect()->route('users.detailadmin', ['user'=>$user]);      
    }      

  public function deleteadmin(Useradmin $user)
    {

    	$userp = User::where('identificacion' , $user->identificacion )->first();
    	$mensaje = 'Usuario '.$user->identificacion.' Eliminado con exito';
    	//dd($mensaje);
        $userp->delete();
        $user->delete();

        return redirect()->route('users.listadmin')->with('mensaje',$mensaje);

    }

    public function detailadmin(User $user)
    {
       
    	return view('users.detailadmin', compact('user'));    	
    }
}
