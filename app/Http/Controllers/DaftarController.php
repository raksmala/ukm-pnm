<?php

namespace App\Http\Controllers;
use App\UKM;
use App\Anggota;

use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function index() 
    {
        $ukm = UKM::where([['idUKM', '!=', '1']])->get();
        return view('/user/daftar', ['ukm' => $ukm]);
    }

    function tambah(Request $request) 
    {
        $this->validate($request,[
            'idUKM' => 'required',
            'NIM' => 'required',
            'namaMahasiswa' => 'required',
            'programStudi' => 'required'
        ], [
            'idUKM' => 'Harus Memilih Salah Satu UKM!',
            'NIM' => 'NIM Wajib Diisi!',
            'namaMahasiswa' => 'Nama Wajib Diisi!',
            'programStudi' => 'Program Studi Wajib Diisi!'
        ]);
    
        Anggota::create([
            'UKM_idUKM' => $request->idUKM,
            'NIMAnggota' => $request->NIM,
            'namaAnggota' => $request->namaMahasiswa,
            'programStudiAnggota' => $request->programStudi,
            'statusAnggota' => 'baru'
        ]);
    
        return redirect()->secure('/')->with('success', 'Daftar UKM Berhasil');
    }
}