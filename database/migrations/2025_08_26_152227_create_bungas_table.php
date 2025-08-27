<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void{
    Schema::create('flowers', function (Blueprint $table) {
        $table->id(); // Kolom ID unik untuk setiap bunga
        $table->string('name'); // Kolom untuk nama bunga
        $table->text('description'); // Kolom untuk deskripsi bunga
        $table->string('image'); // Kolom untuk path/URL gambar bunga
        $table->timestamps(); // Kolom created_at dan updated_at
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bungas');
    }
};
