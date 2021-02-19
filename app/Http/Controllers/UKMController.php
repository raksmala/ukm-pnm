<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UKMController extends Controller
{
    public function index() 
    {
        return view('/user/ukm');
    }
}
