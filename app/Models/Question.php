<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function answers()
    {
        return $this->hasMany(\App\Models\Answer::class);
    }

    public function userAnswers()
    {
        return $this->hasMany(\App\Models\UserAnswer::class);
    }

    public function getUserAnswer($user)
    {
        return $this->userAnswers->where('user_id', $user->id)->first();
    }
}
