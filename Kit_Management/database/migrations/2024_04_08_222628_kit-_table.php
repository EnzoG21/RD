<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KitTable extends Migration
{
    public function up()
    {
        Schema::create('kit', function (Blueprint $table) {
            $table->id('KitID');
            $table->string('Brand');
            $table->string('Model');
            $table->string('Size');
            $table->string('Status');
            $table->date('Date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kit');
    }
}
