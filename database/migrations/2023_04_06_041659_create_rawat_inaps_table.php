<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rawat_inaps', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('no_kamar');
            $table->date('tgl_masuk');
            $table->date('tgl_keluar');
            $table->bigInteger('pasien_id')->unsigned();
            $table->foreign('pasien_id')->references('id')->on('pasiens');
            $table->bigInteger('dokter_id')->unsigned();
            $table->foreign('dokter_id')->references('id')->on('dokters');
            $table->bigInteger('kamar_id')->unsigned();
            $table->foreign('kamar_id')->references('id')->on('kamars');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rawat_inaps');
    }
};
