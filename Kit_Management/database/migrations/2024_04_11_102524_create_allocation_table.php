<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllocationTable extends Migration
{
    public function up()
    {
        Schema::create('allocations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('KitID');
            $table->unsignedBigInteger('JerseyID');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('KitID')->references('KitID')->on('kit')->onDelete('cascade');
            $table->foreign('JerseyID')->references('JerseyID')->on('jersey')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('allocations');
    }
}
