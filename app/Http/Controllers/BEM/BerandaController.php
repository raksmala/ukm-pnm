<?php

namespace App\Http\Controllers\BEM;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UKM;
use App\Proker;

class BerandaController extends Controller
{
    public function index() 
    {
        $ukm = UKM::where([['idUKM', '!=', '1']])->get();
        $ukm = count($ukm);
        
        $proker = Proker::where([['UKM_idUKM', '!=', '1'], ['keteranganKegiatanProker', 'belumTerlaksana']])->get();
        $proker = count($proker);

        return view('/bem/beranda', ['ukm' => $ukm, 'proker' => $proker]);
    }
}
