<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UKM extends Model
{
    protected $table = "ukm";
    protected $primaryKey = "idUKM";

    protected $fillable = ['idUKM', 'namaUKM'];

    public function jadwal()
    {
        return $this->hasMany('App\Jadwal');
    }

    public function proker()
    {
        return $this->hasMany('App\Proker');
    }
}
