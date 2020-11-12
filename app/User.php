<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'email_confirmed', 'password', 'role_id' , 'state', 'remember_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class); // uno a uno 
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class); // uno a uno 
    }

    public function profile()
    {
        return $this->belongsTo(UserProfile::class); // uno a uno 
    }

     public function addresses()
    {
        return $this->hasMany(AddressUser::class);//Muchas direcciones

    }

    public function availabilities()
    {
        return $this->hasMany(ProviderAvailabilities::class);//Muchas disponibilidades

    }

    public function claims()
    {
        return $this->hasMany(UserClaim::class);//Muchos reclamos

    }

    public function profile1($id)
    {
        $auditor = UserProfile::where('user_id' , $id )->first(); 
        return $auditor;  
    
    }

    public function calculaedad($fechanacimiento){

             list($ano,$mes,$dia) = explode("-",$fechanacimiento);

                 $ano_diferencia  = date("Y") - $ano;
                 $mes_diferencia  = date("m") - $mes;
                 $dia_diferencia  = date("d") - $dia;

        if ($dia_diferencia < 0 || $mes_diferencia < 0)
             $ano_diferencia--;

        return $ano_diferencia;
}

   
}
