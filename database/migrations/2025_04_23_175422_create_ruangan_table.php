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
        Schema::create('ruangan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ruangan');
            $table->string('gedung'); // Gedung tempat ruangan berada
            $table->integer('kapasitas')->nullable(); // Jumlah orang
            $table->string('fasilitas')->nullable(); // Meja, proyektor, dll
            $table->text('deskripsi')->nullable(); // Deskripsi tambahan
            $table->string('gambar')->nullable(); // Path ke gambar
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ruangan');
    }
};
