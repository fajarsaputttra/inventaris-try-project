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
            $table->id('IDAset');
            $table->string('NamaAset');
            $table->string('JenisAset');
            $table->text('Deskripsi');
            $table->unsignedBigInteger('IDLokasi'); //foreign key
            $table->unsignedBigInteger('IDKategori'); //foreign key
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
