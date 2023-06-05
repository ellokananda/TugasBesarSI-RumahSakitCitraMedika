<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rawat_inap extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_kamar',
        'tgl_masuk',
        'tgl_keluar',
        'pasien_id',
        'dokter_id',
        'kamar_id'
    ];

    public function pasien(){
        return $this->belongsTo(pasien::class);
    }

    public function dokter(){
        return $this->belongsTo(dokter::class);
    }

    public function kamar(){
        return $this->belongsTo(kamar::class);
    }
}
