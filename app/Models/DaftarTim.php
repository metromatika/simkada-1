<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Village;

class DaftarTim extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'daftar_tim';
    protected $fillable = [
        'village_id',
        'nama_tim',
        'koordinator',
        'jumlah_anggota',
        'keterangan'
    ];
    public function village() {
        return $this->belongsTo(Village::class, 'village_id');
    }
}
