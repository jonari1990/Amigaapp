<?php

use App\Gender; 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //
       Gender::create([
       		'title' => 'Woman',
       ]);


       Gender::create([
       		'title' => 'Man',
       ]);


       Gender::create([
       		'title' => 'Other',
       ]);
    }
}
