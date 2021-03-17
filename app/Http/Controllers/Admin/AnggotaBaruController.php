<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Anggota;

class AnggotaBaruController extends Controller
{
    public function index() 
    {
        $anggota = Anggota::where([['statusAnggota', 'baru'], ['UKM_idUKM', '!=', '1'],  ['UKM_idUKM', Auth()->user()->UKM_idUKM]])->get();
        return view('/admin/anggotaBaru', ['anggota' => $anggota]);
    }

    public function update(Request $request)
    {
        $this->validate($request,[
            'editIdAnggota' => 'required',
    		'editNIMAnggota' => 'required',
    		'editNamaAnggota' => 'required',
    		'editProgramStudiAnggota' => 'required',
    		'editStatusAnggota' => 'required'
        ]);

        $anggota = Anggota::find($request->editIdAnggota);
        $anggota->namaAnggota = $request->editNamaAnggota;
        $anggota->NIMAnggota = $request->editNIMAnggota;
        $anggota->programStudiAnggota = $request->editProgramStudiAnggota;
        $anggota->statusAnggota = $request->editStatusAnggota;
        if($request->editStatusAnggota == 'tetap') {
            $anggota->jabatanAnggota = 'Anggota';
        }
        $anggota->save();
        return back()->with('success', "Anggota dengan id " .$request->editIdAnggota. " terupdate");
    }

    public function hapus($idAnggota)
    {
        Anggota::find($idAnggota)->delete();
        return back()->with('success', 'Anggota terhapus');
    }
}
