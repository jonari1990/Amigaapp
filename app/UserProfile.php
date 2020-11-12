<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = [
        'user_id', 'name', 'lastname', 'birthdate', 'gender_id'  , 'displayname', 'phone', 'picture',
    ];

    public function user()
    {
        return $this->belongsTo(User::class); // cuando es uno a uno 
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class); // uno a uno 
    }

    
}
