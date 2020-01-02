@extends('layouts.app')

@section('content')
    <div class="container mx-auto max-w-3xl mt-8">
        <h1 class="text-2xl font-bold text-gray-700 px-6 md:px-0">Tài khoản của bạn</h1>

        @include('partials.profile-subnav')

        <form action="{{ route('security.update', $user) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="w-full bg-white rounded-lg mx-auto mt-8 flex overflow-hidden rounded-b-none">
                <div class="w-1/3 bg-gray-100 p-8 hidden md:inline-block">
                    <h2 class="font-medium text-md text-gray-700 mb-4 tracking-wide">Cài đặt bảo vệ</h2>
                    <p class="text-xs text-gray-500">Cập nhật mật khẩu của bạn</p>
                </div>
                <div class="md:w-2/3 w-full">
                    <div class="py-8 px-16">
                        <label for="password" class="text-sm text-gray-600">Mật khẩu</label>
                        <input class="mt-2 border-2 border-gray-200 px-3 py-2 block w-full rounded-lg text-base text-gray-900 focus:outline-none focus:border-indigo-500" type="password" value="" name="password">
                    </div>
                    <hr class="border-gray-200">
                    <div class="py-8 px-16">
                        <label for="password_confirmation" class="text-sm text-gray-600">Xác nhận mật khẩu</label>
                        <input class="mt-2 border-2 border-gray-200 px-3 py-2 block w-full rounded-lg text-base text-gray-900 focus:outline-none focus:border-indigo-500" type="password" value="" name="password_confirmation">
                    </div>

                </div>

            </div>
            <div class="p-16 py-8 bg-gray-300 clearfix rounded-b-lg border-t border-gray-200">
                <p class="float-left text-xs text-gray-500 tracking-tight mt-3">Nhấp vào Lưu để cập nhật mật khẩu của bạn</p>
                <input type="submit" class="bg-green-500 text-white text-sm font-medium px-6 py-3 rounded-full float-right uppercase cursor-pointer" value="Lưu">
            </div>
        </form>
    </div>
@endsection
