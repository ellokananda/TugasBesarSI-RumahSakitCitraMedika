<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_kamar',
        'fasilitas',
        'harga',
        'kapasitas'
    ];

    public function rawat_inap(){
        return $this->hasMany(rawat_inap::class);
    }
}
