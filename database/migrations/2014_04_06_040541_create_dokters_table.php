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
        Schema::create('dokters', function (Blueprint $table) {
            $table->id();
            $table->string('nip', 50)->nullable();
            $table->string('nama_dokter', 100)->nullable();
            $table->text('alamat')->nullable();
            $table->enum('jk', ['Laki-laki','Perempuan'])->nullable();
            $table->string('telp', 15)->nullable();
            $table->string('tempat_lahir', 50)->nullable();
            $table->date('date')->nullable();
            $table->string('spesialis', 100)->nullable();
            $table->enum('hari_praktek', ['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu'])->nullable();
            $table->time('jam_praktek')->nullable();
            $table->string('foto', 200)->nullable();
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
        Schema::dropIfExists('dokters');
    }
};
