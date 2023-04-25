<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dokters')->insert([
            'nip' => '123',
            'nama_dokter' => 'ellok',
            'alamat' => NULL,
        ]);
        DB::table('admins')->insert([
            'role' => 1,
            'username' => 'ellok',
            'password' => 'ellok',
            'pegawai_id' => null,
            'dokter_id' => 1,
            'pasien_id' => null,
        ]);
    }
}
