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
        Schema::create('tracers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alumni_id');
            $table->date('mulai_kerja')->nullable();
            $table->string('nama_instansi');
            $table->string('jabatan');
            $table->string('kesesuaian_kerja');
            $table->string('kelurahan');
            $table->string('kab_kota');
            $table->string('provinsi');
            $table->string('kode_pos');
            $table->date('tgl_update')->nullable();
            $table->timestamps();

            $table->foreign('alumni_id')->references('id')->on('alumnis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tracers');
    }
};
