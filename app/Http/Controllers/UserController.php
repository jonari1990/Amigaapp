<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\User;
use App\UserProfile;
use App\Documento;
use App\Useradmin;
use Mail;

use Illuminate\Http\Request;

class UserController extends Controller
{
     
    public function select()
    {
        return view('auth.select');
    }

    public function register()
    {
        return view('auth.register');
    }   

    public function saveamiga(Request $request)
    {

        $data = request()->validate([
                'name'=>'required',
                'lastname'=>'required',
                'email'=>'required|email|unique:users,email',
                'password'=>'required', 
                'state'=>'required',
                'role_id'=>'required',                              

        ], [

            'name.required'           =>'Falta Nombre de la persona',
            'lastname.required'       =>'Falta lastname',            
            'email.required'          =>'El email es necesario',
            'email.email'             =>'Email no valido',
            'email.unique'            =>'Email Ya existe',
            'password.required'       =>'Password es Necesario',

        ]);

        $pass=bcrypt($data['password']);
        User::create([
            'email'=>$data['email'],
            'email_confirmed'=>$data['email'],
            'email'=>$data['email'],
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


      /* $subject = "Tu Registro Fue exitoso: ";
        $for = $data['email'];
        Mail::send('email', $data,function($msj) use($subject,$for){
            $msj->from("amigaapp@gmail.com","Gracias por registrarse");
            $msj->subject($subject);
            $msj->to($for);
        }); */   

        $exito = 'Usuario '.$data['name'].' '.$data['lastname'].' Creado con exito';

       return redirect()->route('login')->with('exito',$exito);
    }
    
     public function welcome(User $user)
    {
        return view('welcome', compact('user'));
    }


     public function edituser($user)    {
            
        $user= User::find($user);
        //dd($user);
        return view('users.editadmin', ['user'=>$user],compact('tipo_documento'));
        
    }  

    public function updateuser(Useradmin $user)
    {
        // es recomendable llamar los campos igual que en la base de datos para no tener pronlemas al actualizar 

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

       $userp->update($data);

       return redirect()->route('users.detailadmin', ['user'=>$user]);      
    }      

  public function deleteuser(Useradmin $user)
    {

        $userp = User::where('identificacion' , $user->identificacion )->first();
        $mensaje = 'Usuario '.$user->identificacion.' Eliminado con exito';
        //dd($mensaje);
        $userp->delete();
        $user->delete();

        return redirect()->route('users.listadmin')->with('mensaje',$mensaje);

    }

    public function detailuser(Useradmin $user)
    {
       
        return view('users.detailadmin', compact('user'));      
    }
}
