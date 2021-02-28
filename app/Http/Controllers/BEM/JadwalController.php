<?php

namespace App\Http\Controllers\BEM;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JadwalController extends Controller
{
    public function index() 
    {
        return view('/bem/jadwal');
    }
}
