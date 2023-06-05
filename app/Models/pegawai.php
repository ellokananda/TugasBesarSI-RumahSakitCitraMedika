<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_pegawai',
        'nama_pegawai',
        'alamat',
        'jk',
        'telp',
        'tempat_lahir',
        'date',
        'jabatan'
    ];
}
