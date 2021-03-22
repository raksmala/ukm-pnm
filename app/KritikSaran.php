<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KritikSaran extends Model
{
    protected $table = "kritiksaran";
    protected $primaryKey = "idKritikSaran";

    protected $fillable = ['UKM_idUKM', 'namaMahasiswa','isiKritikSaran'];
    
    public function ukm()
    {
        return $this->belongsTo('App\UKM', 'UKM_idUKM');
    }
}
