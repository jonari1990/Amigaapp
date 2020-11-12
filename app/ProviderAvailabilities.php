<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProviderAvailabilities extends Model
{
    protected $fillable=['provider_id','timestart','endtime','dayofweek'];

    public function user()
    {
        return $this->belongsTo(User::class); //uno a uno 
    }
}
