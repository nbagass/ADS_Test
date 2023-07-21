<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Karyawan extends Model
{
    use HasFactory;

    protected $fillable=[
        'nama',
        'alamat',
        'tanggal_lahir',
        'tanbggal_bergabung'
    ];

    public function cuti(): HasMany
    {
        return $this->hasMany(Cuti::class);
    }
}
