<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'venue',
        'date',
        'contact',
        'address',
        'time',
    ];

    public function photos(){
        $this->hasMany('App\Photo');
    }
}
