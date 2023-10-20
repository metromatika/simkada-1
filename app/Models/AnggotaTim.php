<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaTim extends Model
{
    use HasFactory;
    protected $table = 'anggota_tim';

    protected $fillable = [
        'nama_anggota',
        'referal_tim',
        'nik',
        'no_hp',
        'direkrut_oleh',
        'tanggal_lahir',
        'keterangan',
        'agama',
        'suku',
        'alamat',
    ];
}
