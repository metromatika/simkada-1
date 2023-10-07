<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Regency extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'regencies';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'province_id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class, 'province_id');
    }

    public function district(): HasMany
    {
        return $this->hasMany(District::class);
    }
}
