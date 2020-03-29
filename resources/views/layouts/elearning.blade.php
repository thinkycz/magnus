@extends('layouts.main')

@section('main')
    <div class="p-4">
        <nav id="nav" class="w-64 relative">
            <ul class="relative">
                <li>
                    <a href="{{ route('elearning.sections.index') }}"
                       class="py-3 pl-1 w-full flex items-center text-gray-700 hover:text-gray-900 focus:outline-none focus-visible:underline {{ Request::routeIs('elearning.sections.*') ? 'text-green-600 hover:text-green-600' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                            <path class="heroicon-ui"
                                  d="M17 22a2 2 0 0 1-2-2v-1a1 1 0 0 0-1-1 1 1 0 0 0-1 1v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-3H5a3 3 0 1 1 0-6h1V8c0-1.11.9-2 2-2h3V5a3 3 0 1 1 6 0v1h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1a1 1 0 0 0-1 1 1 1 0 0 0 1 1h1a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3zm3-2v-3h-1a3 3 0 1 1 0-6h1V8h-3a2 2 0 0 1-2-2V5a1 1 0 0 0-1-1 1 1 0 0 0-1 1v1a2 2 0 0 1-2 2H8v3a2 2 0 0 1-2 2H5a1 1 0 0 0-1 1 1 1 0 0 0 1 1h1a2 2 0 0 1 2 2v3h3v-1a3 3 0 1 1 6 0v1h3z"/>
                        </svg>
                        <span class="ml-3 text-sm font-medium transition-all ease-out transition-medium">
                            Các chủ đề
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('elearning.results.index') }}"
                       class="py-3 pl-1 w-full flex items-center text-gray-700 hover:text-gray-900 focus:outline-none focus-visible:underline {{ Request::routeIs('elearning.results.*') ? 'text-green-600 hover:text-green-600' : '' }}">
                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 fill-current">
                            <path
                                d="M11 3a1 1 0 10-2 0v1a1 1 0 102 0V3zM15.657 5.757a1 1 0 00-1.414-1.414l-.707.707a1 1 0 001.414 1.414l.707-.707zM18 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zM5.05 6.464A1 1 0 106.464 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zM5 10a1 1 0 01-1 1H3a1 1 0 110-2h1a1 1 0 011 1zM8 16v-1h4v1a2 2 0 11-4 0zM12 14c.015-.34.208-.646.477-.859a4 4 0 10-4.954 0c.27.213.462.519.476.859h4.002z"></path>
                        </svg>
                        <span class="ml-3 text-sm font-medium transition-all ease-out transition-medium">
                            Kết quả của bạn
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
