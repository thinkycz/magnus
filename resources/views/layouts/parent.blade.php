@extends('layouts.main')

@section('main')
    <div class="pt-4">
        <nav id="nav" class="w-64 relative">
            <ul class="relative">
                <li>
                    <a href="{{ route('parent.children.index') }}"
                       class="py-3 pl-1 w-full flex items-center text-gray-700 hover:text-gray-900 focus:outline-none focus-visible:underline {{ Request::routeIs('parent.children.*') ? 'text-green-600 hover:text-green-600' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                            <path class="heroicon-ui"
                                  d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-3.54-4.46a1 1 0 0 1 1.42-1.42 3 3 0 0 0 4.24 0 1 1 0 0 1 1.42 1.42 5 5 0 0 1-7.08 0zM9 11a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm6 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                        </svg>
                        <span class="ml-3 text-sm font-medium transition-all ease-out transition-medium">
                        Học viên Magnus
                    </span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    @yield('side')
@endsection
