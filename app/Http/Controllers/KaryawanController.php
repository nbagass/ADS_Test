<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use App\Http\Resources\PostDetailResource;

class KaryawanController extends Controller
{
    public function add(Request $request){
        $validated = $request->validate([
            'nama'=>'required',
            'alamat'=>'required',
            'tanggal_lahir'=>'required',
            'tanggal_bergabung'=>'required'
        ]);

        $data = $request->json()->all();

        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $tanggal_lahir = $data['tanggal_lahir'];
        $tanggal_bergabung = $data['tanggal_bergabung'];

        Karyawan::addKaryawan($nama,$alamat,$tanggal_lahir,$tanggal_bergabung);
        return response()->json('Karyawan Telah Terinput');

    }

    public function update(Request $request){
        $validated = $request->validate([
            'nomor_induk'=>'required',
            'nama'=>'required',
            'alamat'=>'required',
            'tanggal_lahir'=>'required',
            'tanggal_bergabung'=>'required'
        ]);

        $data = $request->json()->all();

        $nomor_induk = $data['nomor_induk'];
        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $tanggal_lahir = $data['tanggal_lahir'];
        $tanggal_bergabung = $data['tanggal_bergabung'];

        Karyawan::updateKaryawan($nomor_induk,$nama,$alamat,$tanggal_lahir,$tanggal_bergabung);
        return response()->json('Karyawan Telah Terupdate');
    }

    public function view(){
        return Karyawan::viewKaryawan();
    }

    public function delete(Request $request){
        $validated = $request->validate([
            'nomor_induk'=>'required'
        ]);

        $data = $request->json()->all();

        $nomor_induk = $data['nomor_induk'];

        Karyawan::deleteKaryawan($nomor_induk);
        return response()->json('Karyawan Telah Dihapus');
    }

    public function topView(){
        return Karyawan::topView();
    }

    public function karyawanCuti(){
        return Karyawan::karyawanCuti();
    }

    public function sisaCuti(){
        return Karyawan::sisaCuti();
    }
}
