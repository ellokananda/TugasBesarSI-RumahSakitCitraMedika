<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;
    protected $fillable = [
        'nik',
        'nama_pasien',
        'tempat_lahir',
        'date',
        'alamat',
        'telp',
        'jk',
        'status'
    ];

    public function rawat_inap(){
        return $this->hasMany(rawat_inap::class);
    }

    public function rekam_medis(){
        return $this->hasMany(rekam_medis::class);
    }

    public function transaksi(){
        return $this->hasMany(transaksi::class);
    }
}
