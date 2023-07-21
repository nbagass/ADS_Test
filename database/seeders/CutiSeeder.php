<?php

namespace Database\Seeders;

use App\Models\Cuti;
use App\Models\Karyawan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CutiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $cuti=[
        [
            'nomor_induk'=>1,
            'tanggal_cuti'=>'2020-08-02',
            'lama_cuti'=>2,
            'keterangan'=>'Acara Keluarga'
        ],
        [
            'nomor_induk'=>1,
            'tanggal_cuti'=>'2020-08-18',
            'lama_cuti'=>2,
            'keterangan'=>'Anak Sakit'
        ],
        [
            'nomor_induk'=>6,
            'tanggal_cuti'=>'2020-08-19',
            'lama_cuti'=>1,
            'keterangan'=>'Nenek Sakit'
        ],
        [
            'nomor_induk'=>7,
            'tanggal_cuti'=>'2020-08-23',
            'lama_cuti'=>1,
            'keterangan'=>'Sakit'
        ],
        [
            'nomor_induk'=>4,
            'tanggal_cuti'=>'2020-08-29',
            'lama_cuti'=>5,
            'keterangan'=>'Menikah'
        ],
        [
            'nomor_induk'=>3,
            'tanggal_cuti'=>'2020-08-30',
            'lama_cuti'=>2,
            'keterangan'=>'Acara Keluarga'
        ],
       ];
       Cuti::insert($cuti);


    }
}
