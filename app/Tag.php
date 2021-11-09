<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    Public function posts() {
        return $this->belongsToMany('App\Post');
    }
}
