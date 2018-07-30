<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function answer()
    {
        return $this->belongsTo('App\Answer');
    }
}