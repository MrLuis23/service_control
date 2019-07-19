<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarCamposEnTablaUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::table('users', function(Blueprint $table)
	    {
		    $table->unsignedInteger('age');
		    $table->enum('gender', ['hombre','mujer']);
		    $table->bigInteger('id_rol')->unsigned()->default(1);
		    $table->foreign('id_rol')->references('id')->on('roles')->on_delete('restrict'); 
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	    Schema::table('users', function(Blueprint $table)
	    {
		    $table->dropColumn(['age','gender']);
		    $table->dropForeign('users_id_rol_foreign');
	    });
    }
}
