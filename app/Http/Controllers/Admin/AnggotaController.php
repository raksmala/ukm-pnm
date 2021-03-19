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
    		'NIMAnggota' => 'required',
    		'namaAnggota' => 'required',
    		'jabatanAnggota' => 'required',
    		'programStudiAnggota' => 'required'
    	]);

        Anggota::create([
            'UKM_idUKM' => Auth()->user()->UKM_idUKM,
    		'namaAnggota' => $request->namaAnggota,
    		'NIMAnggota' => $request->NIMAnggota,
    		'jabatanAnggota' => $this->jabatan($request->jabatanAnggota),
    		'programStudiAnggota' => $request->programStudiAnggota,
            'statusAnggota' => 'tetap'
    	]);

        return redirect('admin/anggota');
    }

    public function update(Request $request)
    {
        $this->validate($request,[
            'editIdAnggota' => 'required',
    		'editNIMAnggota' => 'required',
    		'editNamaAnggota' => 'required',
    		'editJabatanAnggota' => 'required',
    		'editProgramStudiAnggota' => 'required'
        ]);

        $anggota = Anggota::find($request->editIdAnggota);
        $anggota->namaAnggota = $request->editNamaAnggota;
        $anggota->NIMAnggota = $request->editNIMAnggota;
        $anggota->jabatanAnggota = $this->jabatan($request->editJabatanAnggota);
        $anggota->programStudiAnggota = $request->editProgramStudiAnggota;
        $anggota->save();
        return back()->with('success', "Anggota dengan id " .$request->editIdAnggota. " terupdate");
    }

    public function hapus($idAnggota)
    {
        Anggota::find($idAnggota)->delete();
        return back()->with('success', "Data anggota id " .$idAnggota. " terhapus");
    }
}
