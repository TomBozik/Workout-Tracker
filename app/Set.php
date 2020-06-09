<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    protected $fillable = ['reps', 'weight', 'exercise_id', 'user_id'];

    public function exercise()
    {
        return $this->belongsTo('App\Exercise');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
