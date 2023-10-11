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
        Schema::create('anggota_tim', function (Blueprint $table) {
            $table->id();
            $table->string('nama_anggota');
            $table->string('referal_tim');
            $table->integer('nik');
            $table->integer('no_hp');
            $table->string('direkrut_oleh');
            $table->string('tanggal_lahir');
            $table->string('keterangan');
            $table->string('agama');
            $table->string('suku');
            $table->string('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota_tim');
    }
};
