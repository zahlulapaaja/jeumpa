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
        Schema::create('master_pok', function (Blueprint $table) {
            $table->id(); // bigint unsigned auto increment

            $table->string('kode_program', 10);
            $table->string('program', 255);

            $table->string('kode_kegiatan', 10);
            $table->string('kegiatan', 255);

            $table->string('kode_output', 10);
            $table->string('output', 255);

            $table->string('kode_suboutput', 10);
            $table->string('suboutput', 255);

            $table->string('kode_komponen', 10);
            $table->string('komponen', 255);

            $table->string('kode_subkomponen', 10);
            $table->string('subkomponen', 255);

            $table->string('kode_akun', 10);
            $table->string('akun', 255);

            $table->string('item_kegiatan', 255);

            $table->integer('volume');
            $table->string('satuan', 20);

            $table->integer('harga');
            $table->integer('jumlah');

            $table->integer('tahun');
            $table->integer('revisi');

            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_pok');
    }
};
