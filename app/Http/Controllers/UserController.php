<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UKM;

class UserController extends Controller
{
    public function index() 
    {
        $ukm = UKM::where([['idUKM', '!=', '1']])->get();
        return view('/user/user', ['ukm' => $ukm]);
    }
}
