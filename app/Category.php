<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function exercise()
    {
        return $this->hasMany('App\Exercise');
    }
}
