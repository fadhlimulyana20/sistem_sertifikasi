<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterJadwalTabelMenambahkanNullablePadaRelasiIdPenawaranSertifikasiDanIdKegiatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jadwal', function (Blueprint $table) {
            $table->unsignedBigInteger('id_penawaran_sertifikasi')->nullable()->change();
            $table->unsignedBigInteger('id_kegiatan')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jadwal', function (Blueprint $table) {
            $table->unsignedBigInteger('id_penawaran_sertifikasi')->change();
            $table->unsignedBigInteger('id_kegiatan')->change();
        });
    }
}
