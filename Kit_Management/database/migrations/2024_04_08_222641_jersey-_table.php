<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JerseyTable extends Migration
{
    public function up()
    {
        Schema::create('jersey', function (Blueprint $table) {
            $table->id('JerseyID');
            $table->integer('Number');
            $table->string('Size');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jersey');
    }
}
