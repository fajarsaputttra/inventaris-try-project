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
        Schema::create('lokasiaset', function (Blueprint $table) {
            $table->id('IDLokasi');
            $table->string('NamaLokasi');
            $table->text('Deskripsi')->nullable();
            $table->string('KunKer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lokasiaset');
    }
};
