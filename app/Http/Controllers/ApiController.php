<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\DetailJadwal;
use App\Jadwal;
use App\UKM;
use App\User;

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

    public function loginAndroid(Request $request)
    {
        $login = User::where([['username', $request->username]])->first();

        if($login) {
            $result["success"] = true;
            $result["message"] = "success";
            
            $result["user"] = array(
                'idUKM' => $login->UKM_idUKM,
                'name' => $login->name,
                'foto' => $login->foto
            );

            error_log("Login Sukses");
            $response->write(json_encode($result));

            return $response->withStatus(200);
        } else {
            $result["success"] = false;
            $result["message"] = "error gagal login";

            error_log("Login Gagal");
            $response->write(json_encode($result));

            return $response->withStatus(200);
        }
    }
}
