<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Test;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Begin a test
     *
     * @param Test $test
     * @return Question Collection
     */
    public function startTest(Test $test)
    {
        $questions = collect();
        $usedQuestionIds = [];
        $questionsNeededCount = $test->number_of_questions;

        foreach($test->questions as $question) {
            if ($question->userAnswer) {
                if (! $question->userAnswer->{'is_correct?'}) {
                    $questions->push($question);
                    $usedQuestionIds[] = $question->id;
                }
            }
        }

        if ($questions->count() >= $questionsNeededCount) {
            return $questions->take($questionsNeededCount);
        }

        $randomQuestionsNeeded = $questionsNeededCount - $questions->count();
        $randomQuestions = $test->questions->whereNotIn('id', $usedQuestionIds)->random($randomQuestionsNeeded);


        return $questions->merge($randomQuestions);
    }
}
