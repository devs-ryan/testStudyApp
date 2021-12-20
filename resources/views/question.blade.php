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

                        <div id="correct-alert" class="alert alert-success d-none" role="alert">
                            Correct! You selected to right answer. Click continue to move to the next question.
                        </div>

                        <div id="incorrect-alert" class="alert alert-danger d-none" role="alert">
                            Incorrect! You selected to wrong answer. Click continue to move to the next question.
                        </div>

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
                            <button
                                id="submit"
                                class="btn btn-sm btn-primary"
                                type="button"
                                onclick="handleSubmit({{ $question->answers->where('is_correct?', true)->first()->id }})"
                            >
                                Submit
                            </button>
                            <button id="continue" class="d-none btn btn-sm btn-primary" type="submit">
                                Continue
                            </button>
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

@push('scripts')
<script>
    function handleSubmit(correctAnswerId) {
        const inputs = document.getElementsByTagName("input");
        const selected = document.querySelector('input[name="answer_id"]:checked');

        if (selected) {
            const selectedValue = selected.value;

            for (let input of inputs) {
                if (selectedValue != input.value) {
                    input.disabled = true;
                }
            }

            if (selectedValue == correctAnswerId) {
                document.getElementById("correct-alert").classList.remove('d-none');
            }
            else {
                document.getElementById("incorrect-alert").classList.remove('d-none');
            }

            document.getElementById("submit").classList.add('d-none');
            document.getElementById("continue").classList.remove('d-none');
        }
        else {
            alert('Please select an answer.')
        }
    }
</script>
@endpush
