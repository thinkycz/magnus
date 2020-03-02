@extends('layouts.main')

@section('main')
    <div class="w-full my-8 flex flex-col items-center">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-24 h-24 text-gray-800 fill-current">
            <path class="heroicon-ui"
                  d="M17 22a2 2 0 0 1-2-2v-1a1 1 0 0 0-1-1 1 1 0 0 0-1 1v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-3H5a3 3 0 1 1 0-6h1V8c0-1.11.9-2 2-2h3V5a3 3 0 1 1 6 0v1h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1a1 1 0 0 0-1 1 1 1 0 0 0 1 1h1a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3zm3-2v-3h-1a3 3 0 1 1 0-6h1V8h-3a2 2 0 0 1-2-2V5a1 1 0 0 0-1-1 1 1 0 0 0-1 1v1a2 2 0 0 1-2 2H8v3a2 2 0 0 1-2 2H5a1 1 0 0 0-1 1 1 1 0 0 0 1 1h1a2 2 0 0 1 2 2v3h3v-1a3 3 0 1 1 6 0v1h3z"/>
        </svg>

        <h3 class="text-2xl font-semibold text-gray-900 mt-6">Quizzes</h3>

        <p class="text-md font-semibold text-gray-700 mt-4">Please select a quiz</p>
    </div>
@endsection
