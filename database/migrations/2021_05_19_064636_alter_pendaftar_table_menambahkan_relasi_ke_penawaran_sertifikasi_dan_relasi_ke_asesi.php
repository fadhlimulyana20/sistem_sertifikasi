<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterPendaftarTableMenambahkanRelasiKePenawaranSertifikasiDanRelasiKeAsesi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pendaftar', function (Blueprint $table) {
            $table->unsignedBigInteger('id_penawaran_sertifikasi');
            $table->unsignedBigInteger('id_asesi');


            $table->foreign('id_penawaran_sertifikasi')->references('id')->on('penawaran_sertifikasi')->onDelete('cascade');
            $table->foreign('id_asesi')->references('id')->on('asesi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pendaftar', function (Blueprint $table) {
            $table->dropForeign('pendaftar_id_penawaran_sertifikasi_foreign');
            $table->dropForeign('pendaftar_id_asesi_foreign');

            $table->dropColumn('id_penawaran_sertifikasi');
            $table->dropColumn('id_asesi');
        });
    }
}
