@extends('layouts.main')

@section('main')
    <div class="w-full my-24 flex flex-col items-center">
        <svg fill="currentColor" viewBox="0 0 20 20" class="w-24 h-24 text-gray-800"><path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path></svg>

        <h1 class="text-2xl font-bold text-gray-800 mb-4 mt-6 lg:mb-0 text-center">
            Bạn cần kích hoạt tài khoản của bạn để truy cập phần này.
        </h1>

        <h3 class="text-xl text-gray-800 mt-10 opacity-1 fade-in delay">
            Gửi tin nhắn vào trang Facebook Magnus cho chúng tôi để kích hoạt tài khoản của bạn.
        </h3>

        <a href="{{ route('elearning.sections.index') }}" class="text-white bg-green-600 font-semibold px-4 py-2 rounded mt-8 hover:bg-green-500">Quay lại</a>
    </div>
@endsection
