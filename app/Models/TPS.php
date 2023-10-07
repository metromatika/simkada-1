<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Village;

class TPS extends Model
{
    use HasFactory;
    protected $table = 'tps';

    protected $fillable = [
        'village_id',
        'jumlah_tps',
        'keterangan',
    ];

    // Definisikan relasi dengan Village
    public function village()
    {
        return $this->belongsTo(Village::class, 'village_id');
    }
}
