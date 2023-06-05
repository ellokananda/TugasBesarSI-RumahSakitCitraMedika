<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dokters')->insert([
            'nip' => '123',
            'nama_dokter' => 'ellok',
            'alamat' => NULL,
            'jk' => null,
            'telp' => null,
            'tempat_lahir' => null,
            'date' => null,
            'spesialis' => null,
            'hari_praktek' => null,
            'jam_praktek' => null,
            'foto'=> null,
        ]);
        
        DB::table('pasiens')->insert([
            'nik' => '987',
            'nama_pasien' => 'pasien',
            'tempat_lahir' => null,
            'date' => null,
            'alamat' => NULL,
            'telp' => null,
            'jk' => null,
            'status'=> null,
        ]);

        DB::table('pegawais')->insert([
            'kode_pegawai' => '234',
            'nama_pegawai' => 'pegawai',
            'alamat' => NULL,
            'jk' => null,
            'telp' => null,
            'tempat_lahir' => null,
            'date' => null,
            'jabatan'=> 'admin',
        ]);

        DB::table('users')->insert([
            'role' => 1,
            'username' => 'ellok',
            'email' => 'ellok@gmail.com',
            'password' => Hash::make('ellok'),
            'pegawai_id' => null,
            'dokter_id' => 1,
            'pasien_id' => null,
        ]);
        DB::table('users')->insert([
            'role' => 2,
            'username' => 'pasien',
            'email' => 'pasien@gmail.com',
            'password' => Hash::make('pasien'),
            'pegawai_id' => null,
            'dokter_id' => null,
            'pasien_id' => 1,
        ]);
        DB::table('users')->insert([
            'role' => 3,
            'username' => 'pegawai',
            'email' => 'pegawai@gmail.com',
            'password' => Hash::make('pegawai'),
            'pegawai_id' => 1,
            'dokter_id' => null,
            'pasien_id' => null,
        ]
        );
    }
}
