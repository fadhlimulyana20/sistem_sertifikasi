<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftarSyaratTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftar_syarat', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('status_verifikasi_syarat');
            $table->string('path_bukti');
            $table->boolean('verifikasi_asesor');
            $table->string('komentar_asesor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftar_syarat');
    }
}
