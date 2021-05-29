<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableSyaratSertifikasiMenambahkanNullabelPadaRelasiIdRefJenisSertifikasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('syarat_sertifikasi', function (Blueprint $table) {
            $table->unsignedBigInteger('id_ref_jenis_sertifikasi')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('syarat_sertifikasi', function (Blueprint $table) {
            $table->unsignedBigInteger('id_ref_jenis_sertifikasi')->change();
        });
    }
}
