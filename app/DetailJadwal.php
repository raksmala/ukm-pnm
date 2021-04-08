<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailJadwal extends Model
{
    protected $table = "detailjadwal";
    protected $primaryKey = "idDetailJadwal";

    protected $fillable = ['idJadwal', 'NIM', 'namaUndangan', 'prodi'];

    public function jadwal()
    {
        return $this->belongsTo('App\Jadwal', 'idJadwal');
    }
}
