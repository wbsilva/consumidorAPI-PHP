<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassMoviesTable extends Migration
{

    public function up()
    {
        Schema::create('class_movies', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->longText('desc');
          $table->timestamps();
          $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('class_movies');
    }
}
