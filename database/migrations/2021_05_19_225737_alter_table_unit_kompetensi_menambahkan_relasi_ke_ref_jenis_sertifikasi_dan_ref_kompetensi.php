<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableUnitKompetensiMenambahkanRelasiKeRefJenisSertifikasiDanRefKompetensi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('unit_kompetensi_sertifikasi', function (Blueprint $table) {
            $table->unsignedBigInteger('id_ref_jenis_sertifikasi');
            $table->unsignedBigInteger('id_ref_kompetensi');


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
        Schema::table('unit_kompetensi_sertifikasi', function (Blueprint $table) {
            $table->dropForeign('unit_kompetensi_sertifikasi_id_ref_jenis_sertifikasi_foreign');
            $table->dropForeign('unit_kompetensi_sertifikasi_id_ref_kompetensi_foreign');

            $table->dropColumn('id_ref_jenis_sertifikasi');
            $table->dropColumn('id_ref_kompetensi');
        });
    }
}
