@extends('layouts.public')

@section('content')
    <div class="flex h-screen bg-gray-200 p-4 rotate">
        <div class="sm:max-w-xl md:max-w-2xl w-full m-auto">
            <form method="POST" action="{{ route('register') }}" class="flex items-stretch bg-white rounded-lg shadow-lg overflow-hidden border-t-4 border-green-500 sm:border-0">
                @csrf
                <div class="flex hidden overflow-hidden relative sm:block w-5/12 md:w-6/12 bg-gray-600 text-gray-300 py-4 bg-cover bg-center" style="background-image: url('{{ asset('img/prague.jpg') }}')">
                    <div class="flex-1 absolute bottom-0 text-white p-10">
                        <h3 class="text-4xl font-bold inline-block">Đăng ký</h3>
                        <p class="text-gray-300 whitespace-no-wrap mt-2">
                            Chào mừng bạn đến với Magnus!
                        </p>
                    </div>
                    <svg class="absolute animate h-full w-4/12 sm:w-2/12 right-0 inset-y-0 fill-current text-white" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                        <polygon points="0,0 100,100 100,0"></polygon>
                    </svg>
                </div>
                <div class="flex-1 p-6 sm:p-10 sm:py-12">
                    <h3 class="text-xl text-gray-700 font-bold mb-6">
                        Đăng ký <span class="text-gray-400 font-light">tài khoản mới</span></h3>

                    <input id="name" type="text" class="px-3 w-full py-2 bg-gray-200 border border-gray-200 rounded focus:border-gray-400 focus:outline-none focus:bg-white mb-4 {{ $errors->has('name') ? ' border-red-500' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Họ và Tên">
                    @if ($errors->has('name'))
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $errors->first('name') }}
                        </p>
                    @endif

                    <input id="email" type="email" class="px-3 w-full py-2 bg-gray-200 border border-gray-200 rounded focus:border-gray-400 focus:outline-none focus:bg-white mb-4 {{ $errors->has('email') ? ' border-red-500' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Dịa chỉ Email">
                    @if ($errors->has('email'))
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $errors->first('email') }}
                        </p>
                    @endif

                    <input id="password" type="password" class="px-3 w-full py-2 bg-gray-200 border border-gray-200 rounded focus:border-gray-400 focus:outline-none focus:bg-white mb-4 {{ $errors->has('password') ? ' border-red-500' : '' }}" name="password" required placeholder="Mật khẩu">
                    @if ($errors->has('password'))
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $errors->first('password') }}
                        </p>
                    @endif

                    <input id="password-confirm" type="password" class="px-3 w-full py-2 bg-gray-200 border border-gray-200 rounded focus:border-gray-400 focus:outline-none focus:bg-white mb-4" name="password_confirmation" required placeholder="Xác nhận mật khẩu">

                    <div class="flex flex-wrap items-center">
                        <div class="w-full sm:flex-1">
                            <input type="submit" value="Đăng ký" class="w-full sm:w-auto bg-green-500 text-green-100 px-6 py-2 rounded hover:bg-green-600 focus:outline-none cursor-pointer">
                        </div>
                    </div>

                    <p class="w-full text-xs text-left text-gray-700 mt-8">
                        Bạn đã có tài khoản Magnus?
                        <a class="text-blue-500 hover:text-blue-700 no-underline" href="{{ route('login') }}">
                            Đăng nhập
                        </a>
                    </p>

                </div>
            </form>
        </div>
    </div>
@endsection
