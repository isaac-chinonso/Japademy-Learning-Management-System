@extends('layout.app-user')
@section('title')
Start Quiz || JapaDemy
@endsection
@section('content')

<div class="dashboard-body">

    <div class="breadcrumb-with-buttons mb-24 flex-between flex-wrap gap-8">
        <!-- Breadcrumb Start -->
        <div class="breadcrumb mb-24">
            <ul class="flex-align gap-4">
                <li><a href="index.html" class="text-gray-200 fw-normal text-15 hover-text-main-600">Home</a>
                </li>
                <li> <span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>
                <li><span class="text-main-600 fw-normal text-15">Welcome</span></li>
            </ul>
        </div>
        <!-- Breadcrumb End -->
    </div>

    <!-- Create Course Step List Start -->
    <ul class="step-list mb-24">
        <li class="step-list__item py-15 px-24 text-15 text-heading fw-medium flex-center gap-6 done">
            <span class="icon text-xl d-flex"><i class="ph ph-circle"></i></span>
            Quiz
            <span class="line position-relative"></span>
        </li>
        <li class="step-list__item py-15 px-24 text-15 text-heading fw-medium flex-center gap-6 active">
            <span class="icon text-xl d-flex"><i class="ph ph-circle"></i></span>
            Start Quiz
            <span class="line position-relative"></span>
        </li>
        <li class="step-list__item py-15 px-24 text-15 text-heading fw-medium flex-center gap-6  ">
            <span class="icon text-xl d-flex"><i class="ph ph-circle"></i></span>
            See your Result
            <span class="line position-relative"></span>
        </li>
    </ul>
    <!-- Create Course Step List End -->

    @include('include.success')
    @include('include.warning')
    @include('include.error')
    <!-- Course Tab Start -->
    <div class="card">
        <div class="card-body grettings-box-two position-relative z-1 p-0">
            <!-- Progress Bar -->
            <div class="progress-container">
                <div id="progress-bar" class="progress-bar" style="width: 0%;"></div>
            </div>

            <form id="assessment-form" action="{{ route('quiz.submit') }}" method="POST">
                @csrf

                <!-- Question Steps -->
                <div class="steps">
                    @foreach ($questions as $index => $question)
                    <div class="step" style="display: {{ $index === 0 ? 'block' : 'none' }};">
                        <h4>Question {{ $index + 1 }}: {{ $question->question }}</h4>

                        <div style="padding-left: 20px;">
                            @if($question->option1)
                            <label>
                                <input type="radio" name="responses[{{ $question->id }}]" value="option" required>
                                {{ $question->option1 }}
                            </label><br>
                            @endif

                            @if($question->option2)
                            <label>
                                <input type="radio" name="responses[{{ $question->id }}]" value="option2">
                                {{ $question->option2 }}
                            </label><br>
                            @endif

                            @if($question->option3)
                            <label>
                                <input type="radio" name="responses[{{ $question->id }}]" value="option3">
                                {{ $question->option3 }}
                            </label><br>
                            @endif

                            @if($question->option4)
                            <label>
                                <input type="radio" name="responses[{{ $question->id }}]" value="option4">
                                {{ $question->option4 }}
                            </label><br>
                            @endif

                            @if($question->option5)
                            <label>
                                <input type="radio" name="responses[{{ $question->id }}]" value="option5">
                                {{ $question->option5 }}
                            </label>
                            @endif
                        </div>

                    </div>
                    @endforeach
                </div>

                <!-- Navigation Buttons -->
                <div class="navigation-buttons">
                    <button type="button" class="btn btn-outline-main rounded-pill py-9 mt-24" id="prevBtn" style="display: none;" onclick="changeStep(-1)">Previous</button>
                    <button type="button" class="btn btn-outline-main rounded-pill py-9 mt-24" id="nextBtn" onclick="changeStep(1)">Next</button>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-outline-main rounded-pill py-9 mt-24" id="submitBtn" style="display: none;">Submit</button>
            </form>
            <img src="../assets-user/images/bg/star-shape.png"
                class="position-absolute start-0 top-0 w-100 h-100 z-n1 object-fit-contain" alt="">
        </div>
    </div>
    <!-- Course Tab End -->

</div>

@endsection