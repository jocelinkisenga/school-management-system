<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();

              $table->string("name");
              $table->string("gender");
              $table->string("date_birth");
              $table->string("phone"); 
              $table->string("date_joined");
              $table->string("qualification");
              $table->string("experience");
              $table->string("username"); 
              $table->string("password");
              $table->string("adresse");
              $table->string("commune"); 
              $table->string("town"); 

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
        Schema::dropIfExists('teachers');
    }
}
