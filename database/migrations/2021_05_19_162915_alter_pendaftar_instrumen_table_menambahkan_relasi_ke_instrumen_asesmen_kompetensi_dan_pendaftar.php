<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterPendaftarInstrumenTableMenambahkanRelasiKeInstrumenAsesmenKompetensiDanPendaftar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pendaftar_instrumen', function (Blueprint $table) {
            $table->unsignedBigInteger('id_instrumen_asesmen')->nullable();
            $table->unsignedBigInteger('id_pendaftar')->nullable();

            $table->foreign('id_instrumen_asesmen')->references('id')->on('instrumen_asesmen_kompetensi')->onDelete('cascade');
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
        Schema::table('pendaftar_instrumen', function (Blueprint $table) {
            $table->dropForeign('pendaftar_instrumen_id_instrumen_asesmen_foreign');
            $table->dropForeign('pendaftar_instrumen_id_pendaftar');

            $table->dropColumn('id_instrumen_asesmen');
            $table->dropColumn('id_pendaftar');
        });
    }
}
