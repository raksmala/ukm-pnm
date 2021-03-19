<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function jabatan($jabatanAnggota)
    {
        if($jabatanAnggota == 'Ketua')
        { 
            return '1';
        } else if($jabatanAnggota == 'Wakil Ketua')
        {
            return '2';
        } else if($jabatanAnggota == 'Sekretaris')
        {
            return '3';
        } else if($jabatanAnggota == 'Wakil Sekretaris')
        {
            return '4';
        } else if($jabatanAnggota == 'Bendahara')
        {
            return '5';
        } else if($jabatanAnggota == 'Wakil Bendahara')
        {
            return '6';
        } else if($jabatanAnggota == 'Koordinator')
        {
            return '7';
        } else if($jabatanAnggota == 'Wakil Koordinator')
        {
            return '8';
        } else if($jabatanAnggota == 'Anggota')
        {
            return '9';
        }
    }

    
    public static function convertJabatan($jabatanAnggota)
    {
        if($jabatanAnggota == '1')
        { 
            return 'Ketua';
        } else if($jabatanAnggota == '2')
        {
            return 'Wakil Ketua';
        } else if($jabatanAnggota == '3')
        {
            return 'Sekretaris';
        } else if($jabatanAnggota == '4')
        {
            return 'Wakil Sekretaris';
        } else if($jabatanAnggota == '5')
        {
            return 'Bendahara';
        } else if($jabatanAnggota == '6')
        {
            return 'Wakil Bendahara';
        } else if($jabatanAnggota == '7')
        {
            return 'Koordinator';
        } else if($jabatanAnggota == '8')
        {
            return 'Wakil Koordinator';
        } else if($jabatanAnggota == '9')
        {
            return 'Anggota';
        }
    }
}
