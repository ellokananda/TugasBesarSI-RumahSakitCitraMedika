<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obat extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_obat',
        'jenis_obat',
        'harga',
        'stok',
        'keterangan'
    ];

    public function rekam_medis(){
        return $this->hasMany(rekam_medis::class);
    }

    public function transaksi(){
        return $this->hasMany(transaksi::class);
    }
}
