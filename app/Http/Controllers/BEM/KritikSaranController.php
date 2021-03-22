<?php

namespace App\Http\Controllers\BEM;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\KritikSaran;

class KritikSaranController extends Controller
{
    public function index() 
    {
        $kritikSaran = KritikSaran::select('*')->orderBy('idKritikSaran', 'desc')->get();
        return view('/bem/kritikSaran', ['kritikSaran' => $kritikSaran]);
    }
}
