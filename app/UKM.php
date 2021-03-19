<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UKM extends Model
{
    protected $table = "ukm";
    protected $primaryKey = "idUKM";

    protected $fillable = ['idUKM', 'namaUKM'];

    public function anggota()
    {
        return $this->hasMany('App\Anggota');
    }

    public function jadwal()
    {
        return $this->hasMany('App\Jadwal');
    }

    public function proker()
    {
        return $this->hasMany('App\Proker');
    }

    public function user()
    {
        return $this->hasOne('App\User', 'UKM_idUKM');
    }

    public function informasi()
    {
        return $this->hasOne('App\Informasi', 'UKM_idUKM');
    }
}
