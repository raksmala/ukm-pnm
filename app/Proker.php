<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proker extends Model
{
    protected $table = "programKerja";
    protected $primaryKey = "idProgramKerja";

    protected $fillable = ['UKM_idUKM', 'namaKegiatanProker', 'tujuanKegiatanProker', 'tanggalKegiatanProker', 'lokasiKegiatanProker', 'sasaranKegiatanProker', 'tuKegiatanProker', 'pjKegiatanProker', 'fotoKegiatanProker', 'keteranganKegiatanProker'];
}
