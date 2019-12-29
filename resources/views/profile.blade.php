@extends('layouts.app')

@section('content')
    <div class="container mx-auto max-w-3xl mt-8">
        <h1 class="text-2xl font-bold text-gray-700 px-6 md:px-0">Tài khoản của bạn</h1>
        <ul class="flex border-b border-gray-300 text-sm font-medium text-gray-600 mt-3 px-6 md:px-0">
            <li class="mr-8 text-gray-900 border-b-2 border-gray-800">
                <a href="#_" class="py-4 inline-block">Thông tin cá nhân</a></li>
            <li class="mr-8 hover:text-gray-900"><a href="#_" class="py-4 inline-block">Mật khẩu</a></li>
        </ul>
        <form action="{{ route('profile.update', $user) }}" method="POST">
            @csrf
            <div class="w-full bg-white rounded-lg mx-auto mt-8 flex overflow-hidden rounded-b-none">
                <div class="w-1/3 bg-gray-100 p-8 hidden md:inline-block">
                    <h2 class="font-medium text-md text-gray-700 mb-4 tracking-wide">Thông tin cá nhân</h2>
                    <p class="text-xs text-gray-500">Tại đây bạn có thể thay đổi thông tin cá nhân của bạn</p>
                </div>
                <div class="md:w-2/3 w-full">
                    <div class="py-8 px-16">
                        <label for="name" class="text-sm text-gray-600">Họ và Tên</label>
                        <input class="mt-2 border-2 border-gray-200 px-3 py-2 block w-full rounded-lg text-base text-gray-900 focus:outline-none focus:border-indigo-500" type="text" name="name" value="{{ $user->name }}">
                    </div>
                    <hr class="border-gray-200">
                    <div class="py-8 px-16">
                        <label for="email" class="text-sm text-gray-600">Địa chỉ Email</label>
                        <input class="mt-2 border-2 border-gray-200 px-3 py-2 block w-full rounded-lg text-base text-gray-900 focus:outline-none focus:border-indigo-500" type="email" name="email" value="{{ $user->email }}">
                    </div>
                </div>

            </div>
            <div class="p-16 py-8 bg-gray-300 clearfix rounded-b-lg border-t border-gray-200">
                <p class="float-left text-xs text-gray-500 tracking-tight mt-2">Nhấp vào Lưu để cập nhật thông tin cá nhân của bạn</p>
                <input type="submit" class="bg-indigo-500 text-white text-sm font-medium px-6 py-2 rounded float-right uppercase cursor-pointer" value="Lưu">
            </div>
        </form>
    </div>
@endsection