@extends('layouts.main')

@section('main')
    @include('partials.dashboard-nav')

    <div class="w-full bg-white rounded-lg shadow-lg mx-auto my-8">
        <div class="px-4 py-5 border-b-2 flex items-center justify-between">
            <div>
                <h3 class="text-xl font-semibold text-gray-900">Tiếng Séc giao tiếp A1</h3>
                <p class="text-sm font-semibold text-gray-700">asdasd asdasd</p>
            </div>

            <span class="text-sm bg-green-500 text-white px-4 py-2 rounded font-bold">Đã thanh toán</span>
        </div>

        <div class="p-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dolore eligendi et ex harum sapiente! Animi culpa cum cupiditate eligendi eveniet harum necessitatibus nesciunt, officiis, sapiente sequi unde vero voluptatum!</p>

        </div>
    </div>
@endsection
