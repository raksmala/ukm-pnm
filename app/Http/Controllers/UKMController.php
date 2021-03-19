<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UKM;
use App\Anggota;
use App\Jadwal;

class UKMController extends Controller
{
    public function index(Request $request) 
    {
        $idUKM = $request->idUKM;
        $ukm = UKM::where([['idUKM', $idUKM]])->first();
        $anggota = Anggota::where([['UKM_idUKM', $idUKM], ['jabatanAnggota', '<', '9']])->get();
        $count = count($anggota) / 3;
        $jadwal = Jadwal::select('namaKegiatan', 'tanggalAwal', 'tanggalAkhir')->where([['UKM_idUKM', $idUKM]])->get();
        return view('/user/ukm', ['ukm' => $ukm, 'anggota' => $anggota, 'count' => $count, 'jadwal' => $jadwal]);
    }
}
