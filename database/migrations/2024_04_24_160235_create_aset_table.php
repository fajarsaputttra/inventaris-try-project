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
        Schema::create('aset', function (Blueprint $table) {
            $table->id();
            $table->string('NamaAset');
            $table->string('JenisAset');
            $table->text('Deskripsi');
            $table->unsignedBigInteger('IDLokasi'); //foreign Key Lokasi aset
            $table->foreign('IDLokasi')->references('id')->on('lokasiaset');
            $table->unsignedBigInteger('IDKategori'); //foreign Key Kategori aset
            $table->foreign('IDKategori')->references('id')->on('kategoriaset');
            $table->enum('Kondisi', ['Good', 'Bad']);
            $table->date('TanggalPembelian');
            $table->integer('NilaiAset');
            $table->text('Catatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aset');
    }
};
