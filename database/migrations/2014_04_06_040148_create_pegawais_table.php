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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pegawai', 50)->nullable();
            $table->string('nama_pegawai', 100)->nullable();
            $table->text('alamat')->nullable();
            $table->enum('jk', ['Laki-laki','Perempuan'])->nullable(); 
            $table->string('telp', 15)->nullable();
            $table->string('tempat_lahir', 50)->nullable();
            $table->date('date')->nullable();
            $table->string('jabatan', 50)->nullable();
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
        Schema::dropIfExists('pegawais');
    }
};
