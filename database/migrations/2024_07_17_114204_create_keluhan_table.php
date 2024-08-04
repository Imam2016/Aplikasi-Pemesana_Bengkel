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
        Schema::create('keluhan', function (Blueprint $table) {
            $table->id('id_keluhan');
            $table->text('nama_keluhan');
            $table->integer('ongkos');
            $table->string('no_pol'); // Kolom untuk foreign key
            $table->foreign('no_pol')->references('no_pol')->on('kendaraan')->onDelete('cascade');
            $table->foreignId('id_customer')->constrained('customers')->onDelete('cascade');
            $table->foreignId('id_pegawai')->constrained('pegawai')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keluhan');
    }
};