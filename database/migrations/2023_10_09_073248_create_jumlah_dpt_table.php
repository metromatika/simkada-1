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
        Schema::create('jumlah_dpt', function (Blueprint $table) {
            $table->id();
            $table->foreignId('village_id')->constrained('villages')->cascadeOnDelete();
            $table->integer('dpt_l');
            $table->integer('dpt_p');
            $table->integer('dpt_jumlah');
            $table->timestamps();
        });
        DB::unprepared('
        CREATE TRIGGER calculate_dpt_jumlah BEFORE UPDATE ON jumlah_dpt
        FOR EACH ROW
        BEGIN
            SET NEW.dpt_jumlah = NEW.dpt_l + NEW.dpt_p;
        END;
    ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER IF EXISTS calculate_dpt_jumlah');
        Schema::dropIfExists('jumlah_dpt');
    }
};
