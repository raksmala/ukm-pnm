<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetailJadwal;
use App\Jadwal;

class ApiController extends Controller
{
    public function get_all_jadwal(Request $request)
    {
        $UKM_idUKM = $request->UKM_idUKM;
        return response()->json(Jadwal::where([['UKM_idUKM', '!=', '1'],  ['UKM_idUKM', $UKM_idUKM]], [['tanggalAwal', '>=', date('Y-m-d', strtotime('-1 month'))],  ['tanggalAkhir', '<=', date('Y-m-d', strtotime('+1 month'))]])->get(), 200);
    }

    public function tambah(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');

        DetailJadwal::create([
            'idJadwal' => $request->idJadwal,
    		'NIM' => $request->nim,
    		'namaUndangan' => $request->namaUndangan,
    		'prodi' => $request->prodi
    	]);

        return response([
            'status' => 'OK',
            'message' => 'Data Undangan Disimpan',
            'namaUndangan' => $request->namaUndangan
        ], 200);
    }
}
