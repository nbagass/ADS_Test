<?php

namespace Database\Seeders;

use App\Models\karyawan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $karyawan =[
            [
                'nama'=>'Agus',
                'alamat'=>'Jln Gaja Mada no 12, Surabaya',
                'tanggal_lahir'=>'1980-01-11',
                'tanggal_bergabung'=>'2005-08-07',
            ],
            [
                'nama'=>'Amin',
                'alamat'=>'Jln Imam Bonjol no 11, Mojokerto',
                'tanggal_lahir'=>'1977-09-03',
                'tanggal_bergabung'=>'2005-08-07',
            ],
            [
                'nama'=>'Yusuf',
                'alamat'=>'Jln A Yani Raya 15 Np 14, Malang',
                'tanggal_lahir'=>'1973-08-09',
                'tanggal_bergabung'=>'2006-08-07',
            ],
            [
                'nama'=>'Alyssa',
                'alamat'=>'Jln Bungur Sari V no 166, Bandung',
                'tanggal_lahir'=>'1983-03-18',
                'tanggal_bergabung'=>'2006-09-06'
            ],
            [
                'nama'=>'Maulana',
                'alamat'=>'Jln Candi Agung, No 78 Gg 5, Jakarta',
                'tanggal_lahir'=>'1978-11-10',
                'tanggal_bergabung'=>'2006-09-10'
            ],
            [
                'nama'=>'Agfika',
                'alamat'=>'Jln Nangka, Jakarta Timur',
                'tanggal_lahir'=>'1979-02-07',
                'tanggal_bergabung'=>'2007-01-02'
            ],
            [
                'nama'=>'James',
                'alamat'=>'Jln Merpati, 8 Surabaya',
                'tanggal_lahir'=>'1989-05-18',
                'tanggal_bergabung'=>'2007-04-07'
            ],
            [
                'nama'=>'Octavanus',
                'alamat'=>'Jln A Yani 17, B 08 Sidoarjo',
                'tanggal_lahir'=>'1985-04-14',
                'tanggal_bergabung'=>'2007-05-19'
            ],
            [
                'nama'=>'Nugroho',
                'alamat'=>'Jln Duren tiga 167, Jakarta Selatan',
                'tanggal_lahir'=>'1984-01-01',
                'tanggal_bergabung'=>'2008-01-16'
            ],
            [
                'nama'=>'Raisa',
                'alamat'=>'Jln Kelapa Sawit, Jakarta Selatan',
                'tanggal_lahir'=>'1990-12-17',
                'tanggal_bergabung'=>'2008-08-16'
            ],
        ];
        karyawan::insert($karyawan);
    }
}
