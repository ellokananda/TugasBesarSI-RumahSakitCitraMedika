<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    use HasFactory;
    protected $fillable = [
        'nip',
        'nama_dokter',
        'alamat',
        'jk',
        'telp',
        'tempat_lahir',
        'date',
        'spesialis',
        'hari_praktek',
        'jam_praktek',
        'foto'
    ];

    public function rawat_inap(){
        return $this->hasMany(rawat_inap::class);
    }

    public function rekam_medis(){
        return $this->hasMany(rekam_medis::class);
    }
}
