@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6">
                                Test: {{ $test->name }}
                            </div>
                            <div class="col-lg-6 d-flex flex-row-reverse">
                                (Question {{ $questionNumber }} / {{ $test->number_of_questions }})
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-lg-8">
                                <h4>{{ $question->question }}</h4>
                            </div>
                            <div class="col-lg-4">
                                @if ($question->image)
                                    <img src="{{ easyImg('Question', 'image', $question->image) }}" alt="Question Image">
                                @endif
                            </div>
                        </div>

                        <hr>

                        <h5>Answers:</h5>
                        <form method="POST"
                            action="{{ route('test-question', ['test' => $test->id, 'questionNumber' => $questionNumber + 1]) }}">
                            @csrf

                            <input type="hidden" name="question_id" value="{{ $question->id }}">

                            @foreach ($question->answers as $answer)
                                <div class="form-check">
                                    <input required value="{{ $answer->id }}" class="form-check-input" type="radio" name="answer_id">
                                    <label class="form-check-label">
                                        {{ $answer->answer }}
                                    </label>
                                </div>
                            @endforeach

                            <br>
                            <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                        </form>

                        <hr>

                        <p class="d-flex flex-row-reverse">
                            <a class="btn btn-info btn-sm" data-bs-toggle="collapse" href="#collapseExample" role="button"
                                aria-expanded="false" aria-controls="collapseExample">
                                Show Answer
                            </a>
                        </p>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                {{ $question->answers->where('is_correct?', true)->first()->answer }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
