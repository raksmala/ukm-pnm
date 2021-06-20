<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Proker;

class LaporanController extends Controller
{
    public function index() 
    {
        $proker = Proker::where([['UKM_idUKM', '!=', '1'],  ['UKM_idUKM', Auth()->user()->UKM_idUKM], ['keteranganKegiatanProker', '!=', 'belumTerlaksana']])->get();
        return view('/admin/laporan', ['proker' => $proker]);
    }

    public function update($idProgramKerja, Request $request)
    {
        $this->validate($request,[
    		"fotoKegiatanProker$idProgramKerja" => 'required|image'
    	], [
            'fotoKegiatanProker.required' => 'Foto Kegiatan Wajib Diupload!',
            'fotoKegiatanProker.image' => 'Format foto tidak valid!'
        ]);

        $foto = $request->file("fotoKegiatanProker$idProgramKerja");
        $namaFoto = Auth()->user()->UKM_idUKM.'-'.$idProgramKerja.'.'.$foto->getClientOriginalExtension();
        $pathUpload = 'upload/';

        $foto->move($pathUpload, $namaFoto);
        $proker = Proker::find($idProgramKerja);
        $proker->fotoKegiatanProker = $namaFoto;
        $proker->save();

        return back()->with('success', "Data laporan program kerja berhasil diupdate");
    }

    public function hapus($idProgramKerja)
    {
        $proker = Proker::find($idProgramKerja);
        $pathUpload = 'upload/'.Auth()->user()->UKM_idUKM.'/'.$proker->fotoKegiatanProker;
        if(Storage::disk('local')->exists($pathUpload))
        {
            Storage::delete($pathUpload);
        }
        $proker->delete();
        
        return back()->with('success', "Data laporan program kerja berhasil dihapus");
    }
}
