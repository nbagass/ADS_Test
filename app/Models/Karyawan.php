<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Karyawan extends Model
{
    use HasFactory;

    protected $fillable=[
        'nama',
        'alamat',
        'tanggal_lahir',
        'tanbggal_bergabung'
    ];

    public static function addKaryawan($nama,$alamat,$tanggal_lahir,$tanggal_bergabung){
        return DB::select("Call spAddKaryawan(\"$nama\",\"$alamat\",\"$tanggal_lahir\",\"$tanggal_bergabung\")");
    }

    public static function updateKaryawan($id,$nama,$alamat,$tanggal_lahir,$tanggal_bergabung){
        return DB::select("Call spUpdateKaryawan($id,\"$nama\",\"$alamat\",\"$tanggal_lahir\",\"$tanggal_bergabung\")");
    }

    public static function viewKaryawan(){
        return DB::select("Call spViewKaryawan()");
    }

    public static function deleteKaryawan($id){
        return DB::select("Call spDeleteKaryawan($id)");
    }

    public static function topView(){
        return DB::select("Select * from TopView");
    }

    public static function karyawanCuti(){
        return DB::select("Select * from KaryawanCuti");
    }

    public static function sisaCuti(){
        return DB::select("Select * from SisaCuti");
    }

   

    public function cuti(): HasMany
    {
        return $this->hasMany(Cuti::class);
    }
}
