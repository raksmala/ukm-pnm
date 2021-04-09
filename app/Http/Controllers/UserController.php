<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UKM;
use DB;

class UserController extends Controller
{
    public function index() 
    {
        $ukm = UKM::where([['idUKM', '!=', '1']])->get();
        try{
            DB::Connection()->getPdo();
            die('Terhubung dengan database.');
        } catch (\Exception $e) {
            die('Tidak terhubung dengan database. Error:'.$e);
        }
        return view('/user/user', ['ukm' => $ukm]);
    }
}
