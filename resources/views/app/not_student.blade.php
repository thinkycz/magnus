@extends('layouts.main')

@section('main')
    <div class="w-full my-8 flex flex-col items-center">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-24 h-24 text-gray-800 fill-current">
            <path class="heroicon-ui"
                  d="M13 16v5a1 1 0 0 1-1 1H9l-3-6a2 2 0 0 1-2-2 2 2 0 0 1-2-2v-2c0-1.1.9-2 2-2 0-1.1.9-2 2-2h7.59l4-4H20a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-2.41l-4-4H13zm0-2h1.41l4 4H20V4h-1.59l-4 4H13v6zm-2 0V8H6v2H4v2h2v2h5zm0 2H8.24l2 4H11v-4z"/>
        </svg>
        <h3 class="text-2xl font-semibold text-gray-900 mt-6">Bạn hiện tại chưa là sinh viên của Magnus</h3>
        <p class="text-md font-semibold text-gray-700 mt-4">Hãy chọn và đăng ký một khoá học để trở thành sinh viên Magnus!</p>
    </div>
@endsection
