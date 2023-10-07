<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class District extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'districts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'regency_id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function regency(): BelongsTo
    {
        return $this->belongsTo(Regency::class, 'regency_id');
    }

    public function village(): HasMany
    {
        return $this->hasMany(Village::class);
    }
}
