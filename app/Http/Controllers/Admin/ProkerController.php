<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Proker;

class ProkerController extends Controller
{
    public function index() 
    {
        $proker = Proker::where([['UKM_idUKM', '!=', '1'],  ['UKM_idUKM', Auth()->user()->UKM_idUKM], ['keteranganKegiatanProker', 'belumTerlaksana']])->get();
        return view('/admin/proker', ['proker' => $proker]);
    }
    
    public function tambah(Request $request)
    {
        $this->validate($request,[
    		'namaKegiatanProker' => 'required',
    		'tujuanKegiatanProker' => 'required',
    		'tanggalKegiatanProker' => 'required',
    		'lokasiKegiatanProker' => 'required',
    		'sasaranKegiatanProker' => 'required',
    		'tuKegiatanProker' => 'required',
    		'pjKegiatanProker' => 'required'
    	], [
            'namaKegiatanProker.required' => 'Nama Kegiatan Wajib Diisi!',
            'tujuanKegiatanProker.required' => 'Tujuan Wajib Diisi!',
            'tanggalKegiatanProker.required' => 'Tanggal Wajib Diisi!',
            'lokasiKegiatanProker.required' => 'Lokasi Wajib Diisi!',
            'sasaranKegiatanProker.required' => 'Sasaran Wajib Diisi!',
            'tuKegiatanProker.required' => 'Tolak Ukur Kesuksesan Wajib Diisi!',
            'pjKegiatanProker.required' => 'Penanggung Jawab Wajib Diisi!'
        ]);

        $tanggalKegiatanProker = explode('/', $request->tanggalKegiatanProker);

        Proker::create([
            'UKM_idUKM' => Auth()->user()->UKM_idUKM,
    		'namaKegiatanProker' => $request->namaKegiatanProker,
            'tujuanKegiatanProker' => $request->tujuanKegiatanProker,
    		'tanggalKegiatanProker' => $tanggalKegiatanProker[2]."-".$tanggalKegiatanProker[0]."-".$tanggalKegiatanProker[1],
            'lokasiKegiatanProker' => $request->lokasiKegiatanProker,
            'sasaranKegiatanProker' => $request->sasaranKegiatanProker,
    		'tuKegiatanProker' => $request->tuKegiatanProker,
            'pjKegiatanProker' => $request->pjKegiatanProker,
            'keteranganKegiatanProker' => 'belumTerlaksana'
    	]);

        return back()->with('success', "Berhasil menambahkan proker dengan nama " .$request->namaKegiatanProker. "");
    }

    public function update(Request $request)
    {
        $this->validate($request,[
    		'editIdProgramKerja' => 'required',
    		'editNamaKegiatanProker' => 'required',
    		'editTujuanKegiatanProker' => 'required',
    		"editTanggalKegiatanProker" => 'required',
    		'editLokasiKegiatanProker' => 'required',
    		'editSasaranKegiatanProker' => 'required',
    		'editTuKegiatanProker' => 'required',
    		'editPjKegiatanProker' => 'required',
    		'editKeteranganKegiatanProker' => 'required'
    	], [
            'editNamaKegiatanProker.required' => 'Nama Kegiatan Wajib Diisi!',
            'editTujuanKegiatanProker.required' => 'Tujuan Wajib Diisi!',
            'editTanggalKegiatanProker.required' => 'Tanggal Wajib Diisi!',
            'editLokasiKegiatanProker.required' => 'Lokasi Wajib Diisi!',
            'editSasaranKegiatanProker.required' => 'Sasaran Wajib Diisi!',
            'editTuKegiatanProker.required' => 'Tolak Ukur Kesuksesan Wajib Diisi!',
            'editPjKegiatanProker.required' => 'Penanggung Jawab Wajib Diisi!',
    		'editKeteranganKegiatanProker.required' => 'Keterangan Wajib Diisi!'
        ]);

        $tanggalKegiatanProker = explode('/', $request->editTanggalKegiatanProker);

        $proker = Proker::find($request->editIdProgramKerja);
        $proker->namaKegiatanProker = $request->editNamaKegiatanProker;
        $proker->tujuanKegiatanProker = $request->editTujuanKegiatanProker;
        $proker->tanggalKegiatanProker = $tanggalKegiatanProker[2]."-".$tanggalKegiatanProker[0]."-".$tanggalKegiatanProker[1];
        $proker->lokasiKegiatanProker = $request->editLokasiKegiatanProker;
        $proker->sasaranKegiatanProker = $request->editSasaranKegiatanProker;
        $proker->tuKegiatanProker = $request->editTuKegiatanProker;
        $proker->pjKegiatanProker = $request->editPjKegiatanProker;
        $proker->keteranganKegiatanProker = $request->editKeteranganKegiatanProker;
        $proker->save();
        return back()->with('success', "Data program kerja berhasil diupdate");
    }

    public function hapus($idProgramKerja)
    {
        Proker::find($idProgramKerja)->delete();
        return back()->with('success', "Data program kerja berhasil diupdate");
    }
}
