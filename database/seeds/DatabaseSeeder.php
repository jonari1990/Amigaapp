<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
      $this->truncateTables([
      'roles',
     	'users',
      'genders',  
     ]);

      // $this->call(UsersTableSeeder::class);
      $this->call(GenderSeeder::class);
      $this->call(RoleSeeder::class);
      $this->call(UserSeeder::class);      
         
    }


    protected function truncateTables(array $tables)
    {

     DB::statement('SET FOREIGN_KEY_CHECKS=0;');//DESACTIVA REVISION DE LLAVES FORANEAS EN BD

     foreach ($tables as $table) {
     	 DB::table($table)->truncate(); // elimina y crea datos de nuevo
     }
    



   	 DB::statement('SET FOREIGN_KEY_CHECKS=1;');//ACTIVA REVISION DE LLAVES FORANEAS EN BD
    }
}
