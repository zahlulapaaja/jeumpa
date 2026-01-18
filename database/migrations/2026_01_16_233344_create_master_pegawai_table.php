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
        Schema::create('master_pegawai', function (Blueprint $table) {
            $table->id(); // bigint unsigned auto increment

            $table->string('nama', 255);
            $table->string('email', 255);
            $table->string('nip_lama', 10)->nullable()->unique();
            $table->string('nip_baru', 18)->unique();
            $table->string('nik', 16)->nullable();

            $table->string('golongan', 10)->nullable();
            $table->string('pangkat', 255)->nullable();
            $table->string('jabatan', 255)->nullable();

            $table->string('no_rek', 255)->nullable();
            $table->string('nama_bank', 255)->nullable();
            $table->string('an_rek', 255)->nullable();

            $table->string('no_hp', 30)->nullable();
            $table->string('catatan', 255)->nullable();

            $table->string('kode_satker', 20)->index();

            $table->timestamps();      // created_at & updated_at
            $table->softDeletes();     // deleted_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_pegawai');
    }
};
