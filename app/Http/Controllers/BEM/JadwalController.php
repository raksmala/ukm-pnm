<?php

namespace App\Http\Controllers\BEM;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jadwal;
use App\DetailJadwal;

class JadwalController extends Controller
{
    public function index() 
    {
        $jadwal = Jadwal::select('*')->where([['UKM_idUKM', '!=', '1'], ['tanggalAwal', '>=', date('Y-m-d')]])->get();
        return view('/bem/jadwal', ['jadwal' => $jadwal]);
    }

    public function lama() 
    {
        $jadwal = Jadwal::select('*')->where([['UKM_idUKM', '!=', '1'], ['tanggalAwal', '<', date('Y-m-d')]])->get();
        return view('/bem/jadwal', ['jadwal' => $jadwal]);
    }

    public function detail($idJadwal)
    {
        $jadwal = Jadwal::find($idJadwal);
        $detailJadwal = DetailJadwal::where([['idJadwal', $idJadwal]])->get();
        return view('/bem/detail', ['detailJadwal' => $detailJadwal, 'jadwal' => $jadwal]);
    }
}
