<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jadwal;

class JadwalController extends Controller
{
    public function index() 
    {
        $jadwal = Jadwal::where([['UKM_idUKM', '!=', '1'],  ['UKM_idUKM', Auth()->user()->UKM_idUKM], ['tanggalAwal', '>=', date('Y-m-d')]])->get();
        return view('/admin/jadwal', ['jadwal' => $jadwal]);
    }
    
    public function tambah(Request $request)
    {
        $this->validate($request,[
    		'namaKegiatan' => 'required',
    		'tanggalAwal' => 'required',
    		'tanggalAkhir' => 'required'
    	]);

        $tanggalAwal = explode('/', $request->tanggalAwal);
        $tanggalAkhir = explode('/', $request->tanggalAkhir);

        Jadwal::create([
            'UKM_idUKM' => Auth()->user()->UKM_idUKM,
    		'namaKegiatan' => $request->namaKegiatan,
    		'tanggalAwal' => $tanggalAwal[2]."-".$tanggalAwal[0]."-".$tanggalAwal[1],
    		'tanggalAkhir' => $tanggalAkhir[2]."-".$tanggalAkhir[0]."-".$tanggalAkhir[1],
    	]);

        return redirect('admin/jadwal');
    }

    public function update(Request $request)
    {
        $this->validate($request,[
    		'editIdJadwal' => 'required',
    		'editNamaKegiatan' => 'required',
    		'editTanggalAwal' => 'required',
    		'editTanggalAkhir' => 'required'
    	]);
        $tanggalAwal = explode('/', $request->editTanggalAwal);
        $tanggalAkhir = explode('/', $request->editTanggalAkhir);

        $jadwal = Jadwal::find($request->editIdJadwal);
        $jadwal->namaKegiatan = $request->editNamaKegiatan;
        $jadwal->tanggalAwal = $tanggalAwal[2]."-".$tanggalAwal[0]."-".$tanggalAwal[1];
        $jadwal->tanggalAkhir = $tanggalAkhir[2]."-".$tanggalAkhir[0]."-".$tanggalAkhir[1];
        $jadwal->save();
        return back()->with('success', "Data Jadwal dengan id " .$request->editIdJadwal. " terupdate");
    }

    public function hapus($idJadwal)
    {
        Jadwal::find($idJadwal)->delete();
        return back()->with('success', "Data Jadwal dengan id " .$idJadwal. " terhapus");
    }
}
