<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function answers()
    {
        return $this->hasMany(\App\Models\Answer::class);
    }

    public function userAnswer()
    {
        return $this->hasOne(\App\Models\UserAnswer::class);
    }
}
