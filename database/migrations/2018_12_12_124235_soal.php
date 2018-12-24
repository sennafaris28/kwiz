<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Soal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Soal', function (Blueprint $table) {
      $table->string('judul_soal');
      $table->increments('id');
      $table->string('Question')->unique();
      $table->string('A');
      $table->String('B');
      $table->string('C');
      $table->string('D');
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
        //
    }
}
