<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['body'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function question()
    {
        return $this->belongsTo('App\Question');
    }

    public function likes()
    {
        return $this->hasMany('App\Like');
    }

    public function dislikes()
    {
        return $this->hasMany('App\Dislike');
    }
}