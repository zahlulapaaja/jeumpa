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
        Schema::create('master_satker', function (Blueprint $table) {
            $table->id();

            // KODE WILAYAH
            $table->char('kode_provinsi', 2);
            $table->char('kode_kabkot', 2);

            // GABUNGAN PROV + KABKOT
            $table->string('kode_satker', 10)->unique();

            // IDENTITAS
            $table->string('nama_kabkot', 255);
            $table->string('nama_satker', 255);

            // KEPALA SATKER (OPSIONAL)
            $table->foreignId('kepala_id')->nullable()->constrained('master_pegawai')->nullOnDelete();

            $table->timestamps();
            $table->softDeletes();

            // INDEX TAMBAHAN (OPSIONAL TAPI DISARANKAN)
            $table->index(['kode_provinsi', 'kode_kabkot']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_satker');
    }
};
