<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = "jadwal";
    protected $primaryKey = "idJadwal";

    protected $fillable = ['UKM_idUKM', 'namaKegiatan', 'tanggalAwal', 'tanggalAkhir'];

    public function ukm()
    {
        return $this->belongsTo('App\UKM', 'UKM_idUKM');
    }

    public function detailJadwal()
    {
        return $this->hasMany('App\DetailJadwal', 'idJadwal');
    }
}
