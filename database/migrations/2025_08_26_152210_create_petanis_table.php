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
    Schema::create('farmers', function (Blueprint $table) {
        $table->id(); // Kolom nomor urut (ID) otomatis
        $table->string('name'); // Kolom untuk nama petani
        $table->string('address'); // Kolom untuk alamat
        $table->text('mapLink')->nullable(); // Kolom untuk link Google Maps, boleh kosong
        $table->string('specialization'); // Kolom untuk spesialisasi
        $table->text('description'); // Kolom untuk deskripsi singkat
        $table->string('image'); // Kolom untuk path/URL gambar
        $table->text('story'); // Kolom untuk cerita petani
        $table->string('whatsapp'); // Kolom untuk nomor WhatsApp
        $table->timestamps(); // Kolom created_at dan updated_at otomatis
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petanis');
    }
};
