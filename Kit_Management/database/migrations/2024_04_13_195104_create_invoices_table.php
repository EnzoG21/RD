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
        Schema::create('invoices', function (Blueprint $table) {
    $table->id();
    $table->date('Date');
    $table->unsignedBigInteger('user_id');
    $table->unsignedBigInteger('KitID');
    $table->unsignedBigInteger('FormID');
    $table->foreign('FormID')->references('FormID')->on('form')->onDelete('cascade');
    $table->foreign('KitID')->references('KitID')->on('kit')->onDelete('cascade');
    $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    $table->decimal('Price', 8, 2);
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
