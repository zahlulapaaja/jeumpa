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
        Schema::create('master_kegiatan', function (Blueprint $table) {
            $table->id();

            $table->string('nama_kegiatan');
            $table->string('tim_kerja')->nullable();
            $table->string('pj')->nullable(); // penanggung jawab

            $table->date('tanggal_mulai')->nullable();
            $table->date('tanggal_selesai')->nullable();

            $table->year('tahun')->index();
            $table->string('status')->default('perencanaan');
            // contoh: perencanaan | berjalan | selesai | ditunda

            $table->text('deskripsi')->nullable();

            $table->timestamps();
            $table->softDeletes();

            // Optional index untuk pencarian cepat
            $table->index(['tahun', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_kegiatan');
    }
};
