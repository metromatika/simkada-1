<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('referal', 6)->nullable();
            $table->string('ref_referal', 6)->nullable();
            $table->enum('role', ['Admin', 'Koordinator', 'Anggota', 'Saksi']);
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nik', 16)->unique();
            $table->enum('jenis_kelamin', ['(L)', '(P)']);
            $table->string('agama');
            $table->string('suku');
            $table->string('telepon', 15)->nullable();
            $table->foreignId('kelurahan')->constrained('villages')->cascadeOnDelete();
            $table->string('alamat');
            $table->string('rt', 3)->nullable();
            $table->string('rw', 3)->nullable();
            $table->string('tps', 4)->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
