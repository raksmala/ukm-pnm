<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class ProfilController extends Controller
{
    public function index() 
    {
        $mahasiswa = Mahasiswa::select('*')->where([['NIM', "{{ Auth::guard('mahasiswa')->user()->NIM }}"]])->first();
        return view('/user/profil', ['mahasiswa' => $mahasiswa]);
    }

    public function update(Request $request)
    {
        $this->validate($request,[
    		'NIM' => 'required',
    		'nama' => 'required',
    		'programStudi' => 'required'
    	], [
            'NIM.required' => 'NIM Wajib Diisi!',
            'nama.required' => 'Nama Wajib Diisi!',
            'programStudi.required' => 'Program Studi Wajib Diisi!'
        ]);
        $mahasiswa = Mahasiswa::where([['NIM', $request->NIM]])->first();
        if($request->password != null) 
        {
            $mahasiswa->password = bcrypt($request->password);
        }
        $mahasiswa->save();
        return redirect()->secure('profil')->with('sukses', "Data Profil " .$mahasiswa->NIM. " terupdate");
    }
}
