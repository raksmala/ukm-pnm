<?php

namespace App\Http\Controllers\BEM;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Proker;

class ProkerController extends Controller
{
    public function index() 
    {
        $proker = Proker::select('*')->where([['UKM_idUKM', '!=', '1'], ['keteranganKegiatanProker', 'belumTerlaksana']])->get();
        return view('/bem/proker', ['proker' => $proker]);
    }
}
