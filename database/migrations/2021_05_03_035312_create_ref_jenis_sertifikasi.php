<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefJenisSertifikasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_jenis_sertifikasi', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('nama');
            $table->string('keterangan');
            $table->boolean('status_jenis_sertifikasi')->nullable();
            $table->boolean('is_aktif')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_jenis_sertifikasi');
    }
}
