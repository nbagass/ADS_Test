<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cuti extends Model
{
    use HasFactory;

    protected $fillable=[
        'nomor_induk',
        'tanggal_cuti',
        'lama_cuti',
        'keterangan'
    ];

    public function karyawan():BelongsTo
    {
        return $this->belongsTo(Karyawan::class,'nomor_induk','nomor_induk');
    }
}
