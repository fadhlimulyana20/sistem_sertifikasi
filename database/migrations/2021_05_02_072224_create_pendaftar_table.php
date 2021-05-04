<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//         Id, id_penawaran_sertifikasi, id_asesi,
// status_akhir_sertifikasi, tanggal_status_akhir,
// created_by, created_at, edited_by, edited_at,
// status_pendaftaran
        Schema::create('pendaftar', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('status_akhir_sertifikasi');
            $table->date('tanggal_status_akhir');
            $table->boolean('status_pendaftaran');
            // $table->unsignedBigInteger('id_penawaran_sertifikasi');
            // $table->unsignedBigInteger('id_asesi');

            // $table->foreign('id_penawaran_sertifikasi')->references('id')->on('penawaran_sertifikasi')->onDelete('cascade');
            // $table->foreign('id_asesi')->references('id')->on('asesi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftar');
    }
}
