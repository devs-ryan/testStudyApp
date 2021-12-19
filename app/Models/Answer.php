<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function question()
    {
        $this->belongsTo(\App\Models\Question::class);
    }
}
