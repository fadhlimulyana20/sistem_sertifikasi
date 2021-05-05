<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefKegiatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    // id, nama_kegiatan deskripsi, created_at,
    // created_by
    public function up()
    {
        Schema::create('ref_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_kegiatan');
            $table->text('deskripsi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_kegiatan');
    }
}
