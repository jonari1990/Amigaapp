<?php

use App\User; 
use App\Role; 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

    	$roleid = Role::where('title' , 'Administrator')->value('id');
    	   
    	//dd($profession);

         factory(User::class)->create([
        	'email'=> 'ingjonathan1990@gmail.com',
            'email_confirmed'=> 'ingjonathan1990@gmail.com',
        	'password'=>bcrypt('laravel'),
            'role_id'=>$roleid,
            'state'=>'1',        	
        ]);


         factory(User::class)->create([
         	'role_id'=>$roleid,

         ]);


         factory(User::class,48)->create();

        
    }
}
