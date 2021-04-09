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
            $tables = DB::select('SHOW TABLES');
            foreach($tables as $table)
            {
                foreach ($table as $key => $value)
                    echo $value;
            }
            die('Terhubung');
        } catch (\Exception $e) {
            die('Tidak terhubung dengan database. Error:'.$e);
        }
        return view('/user/user', ['ukm' => $ukm]);
    }
}
