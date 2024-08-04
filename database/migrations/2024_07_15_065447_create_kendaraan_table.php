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
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->string('no_pol', 10)->primary(); // Primary Key
            $table->string('no_mesin', 15)->unique(); // Unique Key
            $table->enum('merek', ['Honda', 'Yamaha', 'Suzuki', 'Kawasaki', 'Lain'])->notNullable();
            $table->enum('warna', ['Putih', 'Hitam', 'Hijau', 'Biru', 'Merah', 'Lain'])->notNullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kendaraan');
    }
};