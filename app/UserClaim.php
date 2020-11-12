<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserClaim extends Model
{
    protected $fillable=['user_id','type','value'];

    public function user()
    {
        return $this->belongsTo(User::class); //uno a uno 
    }
}
