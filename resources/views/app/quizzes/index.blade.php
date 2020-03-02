@extends('layouts.main')

@section('main')
    <div class="w-full my-24 flex flex-col items-center">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-24 h-24 text-gray-800 fill-current">
            <path class="heroicon-ui"
                  d="M17 22a2 2 0 0 1-2-2v-1a1 1 0 0 0-1-1 1 1 0 0 0-1 1v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-3H5a3 3 0 1 1 0-6h1V8c0-1.11.9-2 2-2h3V5a3 3 0 1 1 6 0v1h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1a1 1 0 0 0-1 1 1 1 0 0 0 1 1h1a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3zm3-2v-3h-1a3 3 0 1 1 0-6h1V8h-3a2 2 0 0 1-2-2V5a1 1 0 0 0-1-1 1 1 0 0 0-1 1v1a2 2 0 0 1-2 2H8v3a2 2 0 0 1-2 2H5a1 1 0 0 0-1 1 1 1 0 0 0 1 1h1a2 2 0 0 1 2 2v3h3v-1a3 3 0 1 1 6 0v1h3z"/>
        </svg>

        <h3 class="text-3xl font-semibold text-gray-800 mt-6">Cơ bản tiếng Séc</h3>

        <div class="flex mt-6">
            <div class="block w-3 h-3 mx-1 rounded bg-green-400"></div>
            <div class="block w-3 h-3 mx-1 rounded bg-gray-400"></div>
            <div class="block w-3 h-3 mx-1 rounded bg-gray-400"></div>
        </div>

        <p class="text-xs text-gray-600 font-semibold mt-2">Trình độ - dễ</p>

        <button class="bg-gray-400 px-24 py-4 mt-20 rounded-lg text-sm font-semibold text-gray-800 tracking-widest uppercase hover:bg-gray-500">
            Bắt đầu
        </button>
    </div>
@endsection
