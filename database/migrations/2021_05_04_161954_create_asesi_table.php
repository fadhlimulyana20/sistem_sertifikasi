<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsesiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // id, nim, nik, tempat_lahir, tanggal_lahir,
    // jenis_kelamin, id_ref_negara, alamat, no_telepon,email, kualifikasi_pendidikan, id_unit, created_by,
    // created_at, edited_by, edited_at, id_user

    public function up()
    {
        Schema::create('asesi', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nim');
            $table->string('nik');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->boolean('jenis_kelamin');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->date('tanggal_lahir');
            $table->string('no_telepon');
            $table->string('email');
            $table->string('kualifikasi_pendidikan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asesi');
    }
}
