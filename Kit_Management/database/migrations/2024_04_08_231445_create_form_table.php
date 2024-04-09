<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormTable extends Migration
{
    public function up()
    {
        Schema::create('form', function (Blueprint $table) {
            $table->id('FormID');
            $table->string('name');
            $table->string('surname');
            $table->unsignedBigInteger('KitID');
            $table->unsignedBigInteger('JerseyID');
            $table->text('textbox');
            $table->foreign('KitID')->references('KitID')->on('kit')->onDelete('cascade');
            $table->foreign('JerseyID')->references('JerseyID')->on('jersey')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('form');
    }
}
