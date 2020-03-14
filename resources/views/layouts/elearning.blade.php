@extends('layouts.main')

@section('main')
    <div class="p-4">
        <nav id="nav" class="w-64 relative">
            <ul class="relative">
                <li>
                    <a href="{{ route('elearning.quizzes.index') }}"
                       class="py-3 pl-1 w-full flex items-center text-gray-700 hover:text-gray-900 focus:outline-none focus-visible:underline {{ Request::routeIs('elearning.quizzes.*') ? 'text-green-600 hover:text-green-600' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                            <path class="heroicon-ui"
                                  d="M17 22a2 2 0 0 1-2-2v-1a1 1 0 0 0-1-1 1 1 0 0 0-1 1v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-3H5a3 3 0 1 1 0-6h1V8c0-1.11.9-2 2-2h3V5a3 3 0 1 1 6 0v1h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1a1 1 0 0 0-1 1 1 1 0 0 0 1 1h1a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3zm3-2v-3h-1a3 3 0 1 1 0-6h1V8h-3a2 2 0 0 1-2-2V5a1 1 0 0 0-1-1 1 1 0 0 0-1 1v1a2 2 0 0 1-2 2H8v3a2 2 0 0 1-2 2H5a1 1 0 0 0-1 1 1 1 0 0 0 1 1h1a2 2 0 0 1 2 2v3h3v-1a3 3 0 1 1 6 0v1h3z"/>
                        </svg>
                        <span class="ml-3 text-sm font-medium transition-all ease-out transition-medium">
                            Các chủ đề
                        </span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="px-4 w-full">
        @yield('side')
    </div>
@endsection
