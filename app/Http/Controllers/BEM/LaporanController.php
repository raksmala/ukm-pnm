<?php

namespace App\Http\Controllers\BEM;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaporanController extends Controller
{
    public function index() 
    {
        return view('/bem/laporan');
    }
}
