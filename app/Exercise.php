<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function routines()
    {
        return $this->belongsToMany('App\Routine');
    }

    public function sets()
    {
        return $this->hasMany('App\Set');
    }
}
