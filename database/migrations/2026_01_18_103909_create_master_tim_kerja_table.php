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
        Schema::create('master_tim_kerja', function (Blueprint $table) {
            $table->id();

            $table->string('kode_tim', 20)->index();
            $table->string('nama_tim', 255);
            $table->unsignedBigInteger('ketua_tim_id')->nullable();
            $table->integer('tahun')->index();

            $table->timestamps();
            $table->softDeletes();
            $table->unique(['kode_tim', 'tahun']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_tim_kerja');
    }
};
