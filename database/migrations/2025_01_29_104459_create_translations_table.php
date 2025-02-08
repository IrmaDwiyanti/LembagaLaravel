<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('berita_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('berita_id')->constrained()->onDelete('cascade'); // Hubungan ke tabel berita
            $table->string('locale'); // Kode bahasa (id, en, ar)
            $table->string('title'); // Judul berita dalam bahasa tertentu
            $table->text('content'); // Konten berita dalam bahasa tertentu
            $table->string('date'); // Tanggal berita dalam format bahasa lokal
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita_translations');
    }
};
