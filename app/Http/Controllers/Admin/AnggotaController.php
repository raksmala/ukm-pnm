<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Anggota;

class AnggotaController extends Controller
{
    public function index() 
    {
        $anggota = Anggota::where([['statusAnggota', 'tetap'], ['UKM_idUKM', '!=', '1'],  ['UKM_idUKM', Auth()->user()->UKM_idUKM]])->get();
        return view('/admin/anggota', ['anggota' => $anggota]);
    }

    public function tambah(Request $request)
    {
        $this->validate($request,[
    		'NIMAnggota' => 'required|unique:anggota,NIMAnggota',
    		'namaAnggota' => 'required',
    		'jabatanAnggota' => 'required',
    		'programStudiAnggota' => 'required'
    	], [
            'NIMAnggota.required' => 'NIM Wajib Diisi!',
            'NIMAnggota.unique' => 'NIM Sudah Terdaftar!',
            'namaAnggota.required' => 'Nama Wajib Diisi!',
            'jabatanAnggota.required' => 'Jabatan Wajib Diisi!',
            'programStudiAnggota.required' => 'Program Studi Wajib Diisi!'
        ]);

        Anggota::create([
            'UKM_idUKM' => Auth()->user()->UKM_idUKM,
    		'namaAnggota' => $request->namaAnggota,
    		'NIMAnggota' => $request->NIMAnggota,
    		'jabatanAnggota' => $this->jabatan($request->jabatanAnggota),
    		'programStudiAnggota' => $request->programStudiAnggota,
            'statusAnggota' => 'tetap'
    	]);

        return back()->with('success', "Berhasil menambahkan anggota dengan NIM " .$request->NIMAnggota. "");
    }

    public function update(Request $request)
    {
        $this->validate($request,[
            'editIdAnggota' => 'required',
    		'editNIMAnggota' => 'required',
    		'editNamaAnggota' => 'required',
    		'editJabatanAnggota' => 'required',
    		'editProgramStudiAnggota' => 'required'
        ], [
            'editNIMAnggota.required' => 'Kolom NIM Wajib Diisi!',
            'editNamaAnggota.required' => 'Kolom Anggota Wajib Diisi!',
            'editJabatanAnggota.required' => 'Kolom Jabatan Wajib Diisi!',
            'editProgramStudiAnggota.required' => 'Kolom Program Studi Wajib Diisi!'
        ]);

        $anggota = Anggota::find($request->editIdAnggota);
        $anggota->namaAnggota = $request->editNamaAnggota;
        $anggota->NIMAnggota = $request->editNIMAnggota;
        $anggota->jabatanAnggota = $this->jabatan($request->editJabatanAnggota);
        $anggota->programStudiAnggota = $request->editProgramStudiAnggota;
        $anggota->save();
        return back()->with('success', "Data anggota berhasil diupdate");
    }

    public function hapus($idAnggota)
    {
        Anggota::find($idAnggota)->delete();
        return back()->with('success', "Data anggota berhasil dihapus");
    }
}
