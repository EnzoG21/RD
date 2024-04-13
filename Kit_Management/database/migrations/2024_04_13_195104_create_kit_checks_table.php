<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kit_checks', function (Blueprint $table) {
    $table->id();
    $table->date('Date');
    $table->unsignedBigInteger('KitID');
    $table->foreign('KitID')->references('KitID')->on('kit')->onDelete('cascade');
    $table->string('Results');
    $table->text('notes')->nullable();
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kit_checks');
    }
};
