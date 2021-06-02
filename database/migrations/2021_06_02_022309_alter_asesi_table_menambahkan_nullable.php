<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterAsesiTableMenambahkanNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('asesi', function (Blueprint $table) {
            $table->string('nim')->nullable()->change();
            $table->string('nik')->nullable()->change();
            $table->string('tempat_lahir')->nullable()->change();
            $table->date('tanggal_lahir')->nullable()->change();
            $table->string('alamat')->nullable()->change();
            $table->string('email')->nullable()->change();
            $table->string('kualifikasi_pendidikan')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('asesi', function (Blueprint $table) {
            $table->string('nim')->change();
            $table->string('nik')->change();
            $table->string('tempat_lahir')->change();
            $table->date('tanggal_lahir')->change();
            $table->string('alamat')->change();
            $table->string('email')->change();
            $table->string('kualifikasi_pendidikan')->change();
        });
    }
}
