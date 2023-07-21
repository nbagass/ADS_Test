<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //Trigger saat menghapus karyawan
        $trigger ='
        CREATE TRIGGER delete
        BEFORE DELETE ON karyawans
        FOR EACH ROW
        BEGIN
	        DELETE FROM cutis WHERE nomor_induk = OLD.nomor_induk;
        END
        ';
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trigger');
    }
};
