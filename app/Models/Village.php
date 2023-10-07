<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Village extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'villages';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'district_id',
        'member_id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class, 'district_id');
    }
}
