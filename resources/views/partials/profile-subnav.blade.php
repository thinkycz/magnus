<ul class="flex border-b border-gray-300 text-sm font-medium text-gray-600 mt-3 px-6 md:px-0">
    <li class="mr-8 text-gray-700 hover:text-gray-900 {{ Request::is('profile') ? 'border-b-2 border-gray-800' : '' }}">
        <a href="{{ route('profile.index') }}" class="py-4 inline-block">Thông tin cá nhân</a></li>
    <li class="mr-8 text-gray-700 hover:text-gray-900 {{ Request::is('security') ? 'border-b-2 border-gray-800' : '' }}">
        <a href="{{ route('security.index') }}" class="py-4 inline-block">Mật khẩu</a></li>
</ul>
