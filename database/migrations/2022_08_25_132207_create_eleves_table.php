<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleves', function (Blueprint $table) {
            $table->id();
           
     $table->string("name"); 
      $table->string("suname"); 
      $table->char("gender" ); 
      $table->date("date_birth" ); 
      $table->foreignId("classe_id" ); 
      $table->date("date_joined"); 
      $table->integer("phone"); 
      $table->string("password" ); 
      $table->foreignId("option_id");  
      $table->string("ecole_provenance"); 
      $table->string("classe_provenance"); 
      $table->double("pourcentage"); 
      $table->string("nom_tuteur"); 
      $table->string("profession" );    
      $table->integer("tuteur_phone"); 
      $table->string("addresse_tuteur"); 
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
        Schema::dropIfExists('eleves');
    }
}
