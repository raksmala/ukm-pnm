<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UKM;
use App\KritikSaran;

class KritikSaranController extends Controller
{
    public function index() 
    {
        $ukm = UKM::all();
        return view('/user/kritikSaran', ['ukm' => $ukm]);
    }

    function tambah(Request $request) 
    {
        $this->validate($request,[
            'idUKM' => 'required',
    		'isiKritikSaran' => 'required'
    	], [
            'idUKM' => 'Harus Memilih Salah Satu UKM!',
            'isiKritikSaran' => 'Kritik dan Saran Wajib Diisi!'
        ]);

        if($request->namaMahasiswa != null) {
            $namaMahasiswa = $request->namaMahasiswa;
        } else {
            $namaMahasiswa = 'Anonim';
        }

        KritikSaran::create([
            'UKM_idUKM' => $request->idUKM,
    		'namaMahasiswa' => $namaMahasiswa,
    		'isiKritikSaran' => $request->isiKritikSaran
    	]);

        return redirect()->secure('kritikSaran')->with('success', 'Berhasil Mengirim Kritik dan Saran');
    }
}
