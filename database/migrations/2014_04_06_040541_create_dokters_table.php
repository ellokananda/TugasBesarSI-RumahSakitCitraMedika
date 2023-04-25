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
            $table->string('nip', 50);
            $table->string('nama_dokter', 100);
            $table->text('alamat');
            $table->string('jk', 50);
            $table->string('telp', 15);
            $table->string('tempat_lahir', 50);
            $table->date('date');
            $table->string('spesialis', 100);
            $table->date('hari_praktek');
            $table->time('jam_praktek');
            $table->string('foto', 200);
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
