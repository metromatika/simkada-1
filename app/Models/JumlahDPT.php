<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Village;

class JumlahDPT extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'jumlah_dpt';
    protected $fillable = [
        'village_id',
        'dpt_l',
        'dpt_p',
        'jumlah_dpt',
    ];
    public function village() {
        return $this->belongsTo(Village::class, 'village_id');
    }
}
