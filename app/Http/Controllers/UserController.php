<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UKM;

class UserController extends Controller
{
    public function index() 
    {
        $ukm = UKM::all();
        dd($ukm);
        return view('/user/user', ['ukm' => $ukm]);
    }
}
