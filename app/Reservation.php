<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable =
    [
        'data',
        'trattamento',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function doctors()
    {
        return $this->belongsToMany('App\Doctor');
    }
}
