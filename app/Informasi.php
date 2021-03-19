<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    protected $table = "informasi";
    protected $primaryKey = "idInformasi";

    protected $fillable = ['UKM_idUKM', 'isiInformasi'];
    
    public function ukm()
    {
        return $this->belongsTo('App\UKM', 'UKM_idUKM');
    }
}
