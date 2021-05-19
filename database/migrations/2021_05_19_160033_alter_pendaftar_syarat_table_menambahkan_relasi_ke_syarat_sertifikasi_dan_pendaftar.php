<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterPendaftarSyaratTableMenambahkanRelasiKeSyaratSertifikasiDanPendaftar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pendaftar_syarat', function (Blueprint $table) {
            $table->unsignedBigInteger('id_syarat_sertifikasi')->nullable();
            $table->unsignedBigInteger('id_pendaftar')->nullable();

            $table->foreign('id_syarat_sertifikasi')->references('id')->on('syarat_sertifikasi')->onDelete('cascade');
            $table->foreign('id_pendaftar')->references('id')->on('pendaftar')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pendaftar_syarat', function (Blueprint $table) {
            $table->dropForeign('pendaftar_syarat_id_pendaftar_foreign');
            $table->dropForeign('pendaftar_syarat_id_syarat_sertifikasi_foreign');

            $table->dropColumn('id_syarat_sertifikasi');
            $table->dropColumn('id_pendaftar');
        });
    }
}
