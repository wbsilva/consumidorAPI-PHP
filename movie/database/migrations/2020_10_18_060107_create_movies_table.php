<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->longText('desc');
          $table->integer('classmovies_id')->unsigned();
          $table->integer('actors_id')->unsigned();
          $table->integer('directors_id')->unsigned();
          $table->timestamps();
          $table->softDeletes();


           $table->foreign('classmovies_id')->references('id')->on('class_movies')->onDelete('cascade');
           $table->foreign('actors_id')->references('id')->on('actors')->onDelete('cascade');
           $table->foreign('directors_id')->references('id')->on('directors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
