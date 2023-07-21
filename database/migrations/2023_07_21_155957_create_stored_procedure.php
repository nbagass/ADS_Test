<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //Create / Insert Karyawan
        $insert = '
        CREATE PROCEDURE spAddKaryawan(
            IN inNama VARCHAR(255),
            IN inAlamat VARCHAR (255),
            IN inTanggal_lahir DATE,
            IN inTanggal_bergabung DATE
        )
        BEGIN
        INSERT INTO karyawans (nama, alamat, tanggal_lahir, tanggal_bergabung) VALUES (inNama, inAlamat, inTanggal_lahir, inTanggal_bergabung);
        END
        ';
        DB::statement($insert);

        //Read / View Karyawan
        $view ='
        CREATE PROCEDURE spViewKaryawan()
        BEGIN
        SELECT CONCAT("IP6", LPAD(nomor_induk, 3, "0")) AS nomor_induk, nama, alamat, tanggal_lahir, tanggal_bergabung
        FROM karyawans
        ORDER BY tanggal_bergabung ASC;
        END
        '; 
        DB::statement($view);   

        //Update Karyawan
        $update ='
        CREATE PROCEDURE spUpdateKaryawan(
            IN inId INTEGER,	
            IN inNama VARCHAR(255),
            IN inAlamat VARCHAR (255),
            IN inTanggal_lahir DATE,
            IN inTanggal_bergabung DATE
        )
        BEGIN
        UPDATE karyawans
        SET nama = inNama,
            alamat = inAlamat,
            tanggal_lahir = inTanggal_lahir,
            tanggal_bergabung = inTanggal_bergabung
        WHERE nomor_induk = inId;
        END
        ';
        DB::statement($update);

        //Delete Karyawan
        $delete='
        CREATE PROCEDURE spDeleteKaryawan(IN inId INTEGER)
        BEGIN
        DELETE FROM karyawans
        WHERE nomor_induk = inId;
        END
        ';
        DB::statement($delete);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stored_procedure');
    }
};
