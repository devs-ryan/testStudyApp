<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\UserAnswer;
use App\Models\Answer;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function intro(Test $test)
    {
        return view('intro', ['test' => $test]);
    }

    public function show(Request $request, Test $test, $questionNumber)
    {
        $user = $request->user();
        $sessionKey = "user-questions-{$user->id}";

        if ($questionNumber == 1) {
            $questions = $user->startTest($test);
            $request->session()->put($sessionKey, $questions);
        }
        else {
            if ($request->isMethod('post')) {
                // store answer
                UserAnswer::updateOrCreate([
                    'user_id' => $user->id,
                    'question_id' => $request->question_id
                ], ['is_correct?' => Answer::findOrFail($request->answer_id)->{'is_correct?'}]);
            }
            if ($questionNumber > $test->number_of_questions) { // if test finished redirect to summary
                return redirect(route('test-summary', ['test' => $test->id]));
            }

            $questions = $request->session()->get($sessionKey);
        }

        return view('question', [
            'test' => $test,
            'questionNumber' => $questionNumber,
            'question' => $questions[$questionNumber - 1]
        ]);
    }

    public function summary(Request $request, Test $test)
    {
        $user = $request->user();
        $sessionKey = "user-questions-{$user->id}";
        $questions = $request->session()->get($sessionKey);

        $correctAnswers = 0;

        foreach($questions as $question) {
            if ($question->userAnswer && $question->userAnswer->{'is_correct?'}) {
                $correctAnswers++;
            }
        }

        return view('summary', ['test' => $test, 'correctAnswers' => $correctAnswers]);
    }
}
