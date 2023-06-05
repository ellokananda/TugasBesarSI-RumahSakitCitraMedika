<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rekam_medis extends Model
{
    use HasFactory;
    protected $fillable = [
        'tgl_periksa',
        'keluhan',
        'tindakan',
        'diagnosa',
        'pasien_id',
        'dokter_id',
        'obat_id'
    ];

    public function pasien(){
        return $this->belongsTo(pasien::class);
    }

    public function dokter(){
        return $this->belongsTo(dokter::class);
    }

    public function obat(){
        return $this->belongsTo(obat::class);
    }

    // public function transaksi(){
    //     return $this->hasMany(transaksi::class);
    // }
}
