<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Anggota;
use App\Proker;
use App\Jadwal;
use App\Informasi;

class BerandaController extends Controller
{
    public function index() 
    {
        $anggota = Anggota::where([['statusAnggota', 'tetap'], ['UKM_idUKM', '!=', '1'],  ['UKM_idUKM', Auth()->user()->UKM_idUKM]])->get();
        $anggota = count($anggota);

        $proker = Proker::where([['UKM_idUKM', '!=', '1'],  ['UKM_idUKM', Auth()->user()->UKM_idUKM], ['keteranganKegiatanProker', 'belumTerlaksana']])->get();
        $proker = count($proker);
        
        $tanggal = Jadwal::where([['UKM_idUKM', '!=', '1'],  ['UKM_idUKM', Auth()->user()->UKM_idUKM], ['tanggalAwal', '>=', date('Y-m-d')]])->orderBy('tanggalAwal')->first();

        if($anggota == null)
        {
            $anggota = '0';
        }
        if($proker == null)
        {
            $proker = '0';
        }
        if($tanggal != null) {
            $tanggal = explode('-', $tanggal['tanggalAwal']);
            $tahun = $tanggal[0];
            $bulan = (int)$tanggal[1] - 1;
            $hari = $tanggal[2];
            $namaBulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
            $bulan = $namaBulan[$bulan];
            $tanggal = "$hari $bulan $tahun";
        } else {
            $tanggal = "Tidak ada Kegiatan";
        }

        $informasi = Informasi::where([['UKM_idUKM', '!=', '1'],  ['UKM_idUKM', Auth()->user()->UKM_idUKM]])->first();

        return view('/admin/beranda', ['proker' => $proker, 'anggota' => $anggota, 'tanggal' => $tanggal, 'informasi' => $informasi]);
    }

    function tambah(Request $request)
    {
        $this->validate($request,[
    		'isiInformasi' => 'required'
    	]);

        Informasi::create([
            'UKM_idUKM' => Auth()->user()->UKM_idUKM,
            'isiInformasi' => $request->isiInformasi
    	]);

        return redirect()->secure('admin/beranda');
    }

    function update(Request $request) 
    {
        $this->validate($request,[
            'idInformasi' => 'required',
    		'isiInformasi' => 'required'
    	]);

        $informasi = Informasi::find($request->idInformasi);
        $informasi->isiInformasi = $request->isiInformasi;
        $informasi->save();
        return back()->with('success', "Data Informasi UKM dengan id " .$request->idInformasi. " terupdate");
    }
}
