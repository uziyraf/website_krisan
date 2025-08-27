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
        // Pastikan nama tabelnya 'flower_farmer'
        Schema::create('flower_farmer', function (Blueprint $table) {
            $table->id();

            // Gunakan 'flower_id' dan 'farmer_id'
            $table->foreignId('flower_id')->constrained()->onDelete('cascade');
            $table->foreignId('farmer_id')->constrained()->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flower_farmer');
    }
};