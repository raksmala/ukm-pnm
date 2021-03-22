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

        return redirect('kritikSaran');
    }
}
