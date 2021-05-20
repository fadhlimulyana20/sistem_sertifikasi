<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterSyaratSertifikasiTableMenambahkanRelasiKeRefJenisSertifikasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('syarat_sertifikasi', function (Blueprint $table) {
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
        Schema::table('syarat_sertifikasi', function (Blueprint $table) {
            $table->dropForeign('syarat_sertifikasi_id_ref_jenis_sertifikasi_foreign');

            $table->dropColumn('id_ref_jenis_sertifikasi');
        });
    }
}
