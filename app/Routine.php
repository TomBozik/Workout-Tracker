<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Routine extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function exercises()
    {
        return $this->belongsToMany('App\Exercise');
    }
}
