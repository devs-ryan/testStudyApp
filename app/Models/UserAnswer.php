<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{
    /**
     * The attributes that are NOT mass assignable.
     *
     * @var array<string>
     */
    protected $guarded = ['id'];

    /**
     * User relationship
     *
     * @return relationship
     */
    public function user()
    {
        $this->belongsTo(\App\Models\User::class);
    }

    /**
     * Question relationship
     *
     * @return relationship
     */
    public function question()
    {
        $this->belongsTo(\App\Models\Question::class);
    }
}
