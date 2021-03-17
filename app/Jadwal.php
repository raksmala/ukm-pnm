<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = "jadwal";
    protected $primaryKey = "idJadwal";

    protected $fillable = ['UKM_idUKM', 'namaKegiatan', 'tanggalAwal', 'tanggalAkhir'];
}
