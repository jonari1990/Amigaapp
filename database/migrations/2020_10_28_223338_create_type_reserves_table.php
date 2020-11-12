<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeReservesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_reserves', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100)->unique();

            $table->boolean('Reservaxhoras')->default(false);            
            $table->decimal('Horasminimo',3,2);
            $table->decimal('Horasmaximo',3,2);
            $table->boolean('Reservaxservicio')->default(false);
            $table->integer('minimoservicio')->unsigned()->nullable();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_reserves');
    }
}
