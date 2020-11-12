<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable=['title'];

     public function users()//se declara plural para muchos
    {
        return $this->hasMany(User::class); // relaciona con modelo usuarios indicando que profesion la tiene muchos usuarios

    }
}
