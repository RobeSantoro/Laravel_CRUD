<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable =
    [
        'name',
        'reparto'
    ];

    public function reservations()
    {
        return $this->belongsToMany('App\Reservations');
    }

}
