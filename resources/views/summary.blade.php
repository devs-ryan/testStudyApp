@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Test: {{ $test->name }}
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5>Test Details</h5>
                    <ul>
                        <li>Total Questions: {{ $test->number_of_questions }}</li>
                        <li>Needed to pass: {{ $test->number_required_to_pass }}</li>
                    </ul>

                    <h5>Score Details</h5>
                    <ul>
                        <li>Correct Answers: {{ $correctAnswers }}</li>
                        <li>Incorrect Answers: {{ $test->number_of_questions - $correctAnswers }}</li>
                    </ul>

                    <h5>Result:
                        <span class="{{ $correctAnswers >= $test->number_required_to_pass ? 'text-success' : 'text-danger' }}">
                            {{ $correctAnswers >= $test->number_required_to_pass ? 'PASS' : 'FAIL' }}
                        </span>
                    </h5>

                    <br>

                    <a href="/test/{{ $test->id }}/1" class="btn btn-sm btn-primary" role="button">Restart Test</a>
                </div>

                <div class="card-footer text-muted">
                    <small>
                        <b><u>Note:</u></b> When taking the test multiple times, questions you previously
                        got incorrect are chosen with priority.
                     </small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
