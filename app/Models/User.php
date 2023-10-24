<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Village;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'referal',
        'ref_referal',
        'role',
        'nama',
        'email',
        'password',
        'nik',
        'jenis_kelamin',
        'agama',
        'suku',
        'telepon',
        'kelurahan',
        'alamat',
        'rt',
        'rw',
        'tps',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function query()
    // {
    //     return User::where('role', 'Saksi');
    // }

    public function village()
    {
        return $this->belongsTo(Village::class, 'kelurahan');
    }
    public function koordinator(): HasMany
    {
        return $this->hasMany(User::class, 'referal', 'ref_referal');
    }
    public function anggotaTim(): BelongsTo
    {
        return $this->belongsTo(User::class, 'referal', 'ref_referal');
    }
}
