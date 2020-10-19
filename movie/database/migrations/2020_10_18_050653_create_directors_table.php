<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectorsTable extends Migration
{

    public function up()
    {
        Schema::create('directors', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->longText('desc');
          $table->timestamps();
          $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('directors');
    }
}
