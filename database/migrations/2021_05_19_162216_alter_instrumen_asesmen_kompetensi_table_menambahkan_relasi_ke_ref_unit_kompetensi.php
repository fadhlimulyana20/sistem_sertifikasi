<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterInstrumenAsesmenKompetensiTableMenambahkanRelasiKeRefUnitKompetensi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('instrumen_asesmen_kompetensi', function (Blueprint $table) {
          $table->foreign('id_ref_unit_kompetensi')->references('id')->on('ref_unit_kompetensi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('instrumen_asesmen_kompetensi', function (Blueprint $table) {
            $table->dropForeign('instrumen_asesmen_kompetensi_id_ref_unit_kompetensi');

            $table->dropColumn('id_ref_unit_kompetensi');
        });
    }
}

