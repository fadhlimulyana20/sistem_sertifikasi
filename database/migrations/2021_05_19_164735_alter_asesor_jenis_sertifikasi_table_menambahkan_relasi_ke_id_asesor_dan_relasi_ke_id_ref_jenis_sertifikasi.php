<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterAsesorJenisSertifikasiTableMenambahkanRelasiKeIdAsesorDanRelasiKeIdRefJenisSertifikasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('asesor_jenis_sertifikasi', function (Blueprint $table) {
            $table->foreign('id_asesor')->references('id')->on('asesor')->onDelete('cascade');
            $table->foreign('id_ref_jenis_sertifikasi')->references('id')->on('ref_jenis_sertifikasi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('asesor_jenis_sertifikasi', function (Blueprint $table) {
            $table->dropForeign('asesor_jenis_sertifikasi_id_asesor_foreign');
            $table->dropForeign('asesor_jenis_sertifikasi_id_ref_jenis_sertifikasi_foreign');

            $table->dropColumn('id_asesor');
            $table->dropColumn('id_ref_jenis_sertifikasi');
        });
    }
}
