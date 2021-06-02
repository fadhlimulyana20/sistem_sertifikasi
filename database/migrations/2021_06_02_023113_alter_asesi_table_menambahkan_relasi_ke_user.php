<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterAsesiTableMenambahkanRelasiKeUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('asesi', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user')->nullable();

            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
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
            $table->dropForeign('asesi_id_user_foreign');
            $table->dropColumn('id_user');
        });
    }
}
