<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterAsesorPendaftarMemasukkanForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('asesor_pendaftar', function (Blueprint $table) {
            $table->unsignedBigInteger('id_asesor_jenis_sertifikasi')->nullable()->change();
            $table->unsignedBigInteger('id_pendaftar')->nullable()->change();

            $table->foreign('id_asesor_jenis_sertifikasi')->references('id')->on('asesor_jenis_sertifikasi')->onDelete('cascade');
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
        Schema::table('asesor_pendaftar', function (Blueprint $table) {
            $table->dropForeign('id_asesor_jenis_sertifikasi');
            $table->dropForeign('id_pendaftar');

            $table->dropColumn('id_asesor_jenis_sertifikasi');
            $table->dropColumn('id_pendaftar');
        });
    }
}
