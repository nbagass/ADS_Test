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
        Schema::create('cutis', function (Blueprint $table) {
            $table->unsignedBigInteger("nomor_induk");
            $table->date("tanggal_cuti");
            $table->integer("lama_cuti");
            $table->string("keterangan");
            $table->timestamps();

            $table->foreign('nomor_induk')->references('nomor_induk')->on('karyawans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuti');
    }
};
