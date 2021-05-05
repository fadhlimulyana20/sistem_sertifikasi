<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstrumenAsesmenKompetensi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Id, id_ref_unit_kompetensi, instrumen_pertanyaan, status_instrumen, is_aktif
        Schema::create('instrumen_asesmen_kompetensi', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('id_ref_unit_kompetensi');
            $table->text('instrumen_pertanyaan');
            $table->enum('status_instrumen', [0, 1])->default(1);
            $table->boolean('is_aktif')->default(true);
            $table->softDeletes();

            //$table->foreign('id_ref_unit_kompetensi')->references('id')->on('ref_unit_kompetensi')->onDelete('cascade);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instrumen_asesmen_kompetensi');
    }
}
