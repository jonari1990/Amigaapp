<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddressUser extends Model
{
	protected $fillable=['user_id','location','isprimary','complementary','label'];

    public function user()
    {
        return $this->belongsTo(User::class); //uno a uno 
    }
}
