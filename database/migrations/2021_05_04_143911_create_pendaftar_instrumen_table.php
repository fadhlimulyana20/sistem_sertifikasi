<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftarInstrumenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftar_instrumen', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('jawaban_self_asesmen');
            $table->string('path_bukti');
            $table->string('komentar_bukti');
            $table->boolean('jawaban_asesor_verifikasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftar_instrumen');
    }
}
