<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UnitKompetensiSertifikasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_kompetensi_sertifikasi', function (Blueprint $table) {
            $table->id();

            $table->timestamps();

            $table->unsignedBigInteger('id_ref_jenis_sertifikasi');
            $table->unsignedBigInteger('id_ref_kompetensi');
            $table->boolean('is_aktif')->nullable();

            $table->foreign('id_ref_jenis_sertifikasi')->references('id')->on('ref_jenis_sertifikasi')->onDelete('cascade');
            $table->foreign('id_ref_kompetensi')->references('id')->on('ref_unit_kompetensi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unit_kompetensi_sertifikasi');
    }
}
