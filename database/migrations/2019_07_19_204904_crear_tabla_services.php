<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaServices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
	    /* Estos campos son los que agregue */
	    $table->bigInteger('user_id')->unsigned();
	    $table->foreign('user_id')->references('id')->on('users');
	    $table->string('name',50);
	    $table->boolean('status')->default(1);
	    /*timestamps com el id son campos que se agregan por default */
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
        Schema::dropIfExists('services');
    }
}
