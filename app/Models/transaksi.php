<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'tgl_masuk',
        'tgl_keluar',
        'total',
        'pasien_id',
        'obat_id'
    ];

    // public function rekam_medis(){
    //     return $this->belongsTo(rekam_medis::class);
    // }

    public function pasien(){
        return $this->belongsTo(pasien::class);
    }

    public function obat(){
        return $this->belongsTo(obat::class);
    }
}
