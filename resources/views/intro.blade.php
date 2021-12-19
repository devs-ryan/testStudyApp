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

                    <p>
                        This test consists of {{ $test->number_of_questions }} randomized questions selected from
                        a pool of {{ $test->questions->count() }}, and requires a score of
                        {{ $test->number_required_to_pass }} to acheive a passing grade.
                    </p>
                    <p>
                        Click the button below to begin.
                    </p>
                    <a href="/test/{{ $test->id }}/1" class="btn btn-sm btn-primary" role="button">Start Test</a>
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
