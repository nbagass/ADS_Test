<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //View menampilkan 3 data teratas berdasarkan paling awal masuk

        $topView = '
        CREATE VIEW TopView AS
            SELECT CONCAT("IP6", LPAD(nomor_induk, 3, "0")) AS nomor_induk, nama, alamat, tanggal_lahir, tanggal_bergabung
            FROM karyawans
            ORDER BY tanggal_bergabung ASC
            LIMIT 3;
        ';
        DB::statement($topView);

        //View menampilkan daftar karyawan yang mengambil cuti

        $karyawanCuti ='
        CREATE VIEW KaryawanCuti AS
            SELECT CONCAT("IP6",LPAD(k.nomor_induk,3,"0")) AS nomor_induk,k.nama,k.alamat,k.tanggal_lahir,k.tanggal_bergabung
            FROM karyawans k
            JOIN cutis c
            ON k.nomor_induk = c.nomor_induk
            GROUP BY k.nomor_induk
            ORDER BY k.tanggal_bergabung ASC;
        ';
        DB::statement($karyawanCuti);

        //View menampilkan sisa cuti karyawan

        $sisaCuti='
        CREATE VIEW SisaCuti AS
        SELECT CONCAT("IP6",LPAD(k.nomor_induk,3,"0")) AS nomor_induk,k.nama, IFNULL((12 - SUM(lama_cuti)),12) as sisa_cuti
        FROM karyawans k
        LEFT JOIN cutis c
        ON k.nomor_induk = c.nomor_induk
        GROUP BY k.nomor_induk
        ORDER BY k.tanggal_bergabung ASC;
        ';
        DB::statement($sisaCuti);
        

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('views');
    }
};
