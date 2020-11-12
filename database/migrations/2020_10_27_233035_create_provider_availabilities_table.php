<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProviderAvailabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_availabilities', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('provider_id')->unsigned()->nullable();
            $table->foreign('provider_id')->references('id')->on('users');

            $table->time('timestart')->nullable();
            $table->time('endtime')->nullable();
            $table->date('dayofweek')->nullable();
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
        Schema::dropIfExists('provider_availabilities');
    }
}
