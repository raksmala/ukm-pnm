<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jadwal;
use App\DetailJadwal;

class JadwalController extends Controller
{
    public function index() 
    {
        $jadwal = Jadwal::where([['UKM_idUKM', '!=', '1'],  ['UKM_idUKM', Auth()->user()->UKM_idUKM], ['tanggalAwal', '>=', date('Y-m-d')]])->get();
        $btnTambah = true;
        return view('/admin/jadwal', ['jadwal' => $jadwal, 'btnTambah' => $btnTambah]);
    }

    public function lama() 
    {
        $jadwal = Jadwal::where([['UKM_idUKM', '!=', '1'],  ['UKM_idUKM', Auth()->user()->UKM_idUKM], ['tanggalAwal', '<', date('Y-m-d')]])->get();
        $btnTambah = false;
        return view('/admin/jadwal', ['jadwal' => $jadwal, 'btnTambah' => $btnTambah]);
    }
    
    public function tambah(Request $request)
    {
        $this->validate($request,[
    		'namaKegiatan' => 'required',
    		'tanggalAwal' => 'required',
    		'tanggalAkhir' => 'required'
    	], [
            'namaKegiatan.required' => 'Nama Kegiatan Wajib Diisi!',
            'tanggalAwal.required' => 'Tanggal Awal Wajib Diisi!',
            'tanggalAkhir.required' => 'Tanggal Akhir Wajib Diisi!'
        ]);

        $tanggalAwal = explode('/', $request->tanggalAwal);
        $tanggalAkhir = explode('/', $request->tanggalAkhir);

        Jadwal::create([
            'UKM_idUKM' => Auth()->user()->UKM_idUKM,
    		'namaKegiatan' => $request->namaKegiatan,
    		'tanggalAwal' => $tanggalAwal[2]."-".$tanggalAwal[0]."-".$tanggalAwal[1],
    		'tanggalAkhir' => $tanggalAkhir[2]."-".$tanggalAkhir[0]."-".$tanggalAkhir[1],
    	]);

        return back()->with('success', "Berhasil menambahkan kegiatan dengan nama " .$request->namaKegiatan. "");
    }

    public function update(Request $request)
    {
        $this->validate($request,[
    		'editIdJadwal' => 'required',
    		'editNamaKegiatan' => 'required',
    		'editTanggalAwal' => 'required',
    		'editTanggalAkhir' => 'required'
    	], [
            'editNamaKegiatan.required' => 'Nama Kegiatan Wajib Diisi!',
            'editTanggalAwal.required' => 'Tanggal Awal Wajib Diisi!',
            'editTanggalAkhir.required' => 'Tanggal Akhir Wajib Diisi!'
        ]);
        $tanggalAwal = explode('/', $request->editTanggalAwal);
        $tanggalAkhir = explode('/', $request->editTanggalAkhir);

        $jadwal = Jadwal::find($request->editIdJadwal);
        $jadwal->namaKegiatan = $request->editNamaKegiatan;
        $jadwal->tanggalAwal = $tanggalAwal[2]."-".$tanggalAwal[0]."-".$tanggalAwal[1];
        $jadwal->tanggalAkhir = $tanggalAkhir[2]."-".$tanggalAkhir[0]."-".$tanggalAkhir[1];
        $jadwal->save();
        return back()->with('success', "Data jadwal berhasil diupdate");
    }

    public function hapus($idJadwal)
    {
        Jadwal::find($idJadwal)->delete();
        return back()->with('success', "Data jadwal berhasil dihapus");
    }

    public function detail($idJadwal)
    {
        $jadwal = Jadwal::find($idJadwal);
        $detailJadwal = DetailJadwal::where([['idJadwal', $idJadwal]])->get();
        return view('/admin/detail', ['detailJadwal' => $detailJadwal, 'jadwal' => $jadwal]);
    }
}
