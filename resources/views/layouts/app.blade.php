<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('img/favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('img/favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('img/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
    <div id="app">
        <!-- Top Color Bar -->
        <div class="h-2 bg-indigo-600 w-full absolute z-20 gradient"></div>

        @include('partials.nav')

{{--        <nav class="bg-blue-900 shadow mb-8 py-6">--}}
{{--            <div class="container mx-auto px-6 md:px-0">--}}
{{--                <div class="flex items-center justify-center">--}}
{{--                    <div class="mr-6">--}}
{{--                        <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">--}}
{{--                            {{ config('app.name', 'Laravel') }}--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="flex-1 text-right">--}}
{{--                        @guest--}}
{{--                            <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                            @if (Route::has('register'))--}}
{{--                                <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                            @endif--}}
{{--                        @else--}}
{{--                            <span class="text-gray-300 text-sm pr-4">{{ Auth::user()->name }}</span>--}}

{{--                            <a href="{{ route('logout') }}"--}}
{{--                               class="no-underline hover:underline text-gray-300 text-sm p-3"--}}
{{--                               onclick="event.preventDefault();--}}
{{--                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>--}}
{{--                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">--}}
{{--                                {{ csrf_field() }}--}}
{{--                            </form>--}}
{{--                        @endguest--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </nav>--}}

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
