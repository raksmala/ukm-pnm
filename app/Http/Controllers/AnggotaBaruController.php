<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnggotaBaruController extends Controller
{
    public function index() 
    {
        return view('/admin/anggotaBaru');
    }
}
