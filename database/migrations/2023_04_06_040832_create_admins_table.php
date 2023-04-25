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
        // Schema::create('admins', function (Blueprint $table) {
        //     $table->id();
        //     $table->bigInteger('role');
        //     $table->string('username', 100);
        //     $table->string('password', 100);
        //     $table->bigInteger('pegawai_id')->unsigned();
        //     $table->foreign('pegawai_id')->references('id')->on('pegawais');
        //     $table->bigInteger('dokter_id')->unsigned();
        //     $table->foreign('dokter_id')->references('id')->on('dokters');
        //     $table->bigInteger('pasien_id')->unsigned();
        //     $table->foreign('pasien_id')->references('id')->on('pasiens');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
};
