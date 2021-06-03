<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Mahasiswa extends Authenticatable
{
    use Notifiable;

    protected $guard = 'mahasiswa';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "mahasiswas";
    protected $primaryKey = "id";
    protected $fillable = [
        'NIM', 'password', 'name', 'programStudi'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
