<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cuti extends Model
{
    use HasFactory;

    protected $fillable=[
        'nomor_induk',
        'tanggal_cuti',
        'lama_cuti',
        'keterangan'
    ];

    public static function viewCuti(){
        return DB::select("CALL spCuti()");
    }

    public function karyawan():BelongsTo
    {
        return $this->belongsTo(Karyawan::class,'nomor_induk','nomor_induk');
    }
}
