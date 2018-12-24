<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kuis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       /*
         Schema::create('kuis', function (Blueprint $table) {
             $table->increments('kuis_id');
             $table->string('kuis_name');
             $table->timestamps();
         });
         */
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
       /*
         Schema::dropIfExists('users');
         */
     }
}
