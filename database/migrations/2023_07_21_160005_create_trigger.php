<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //Trigger saat menghapus karyawan
        $trigger ='
        CREATE TRIGGER deleteTrigger
        BEFORE DELETE ON karyawans
        FOR EACH ROW
        BEGIN
	        DELETE FROM cutis WHERE nomor_induk=OLD.nomor_induk;
        END
        ';

        DB::statement($trigger);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trigger');
    }
};
