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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 100)->nullable();
            $table->string('nama_pasien', 100)->nullable();
            $table->string('tempat_lahir', 100)->nullable();
            $table->date('date')->nullable();
            $table->text('alamat')->nullable();
            $table->string('telp', 15)->nullable();
            $table->enum('jk', ['Laki-laki','Perempuan'])->nullable();           
            $table->enum('status', ['Rawat Jalan','Rawat Inap'])->nullable();            
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
        Schema::dropIfExists('pasiens');
    }
};
