<header class="px-6 bg-white py-2">
    <div class="container mx-auto flex flex-wrap items-center relative">
        <div class="flex-1 flex justify-between items-center font-black text-gray-700">
            <a href="{{ route('dashboard') }}">
                <svg class="h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90">
                    <g fill="#38a169">
                        <path d="M24.442 47.265a6.842 6.842 0 00-2.899.644c.47.437.768 1.052.768 1.743a2.389 2.389 0 01-2.388 2.388c-.69 0-1.306-.296-1.744-.765a6.903 6.903 0 00-.642 2.897c0 3.814 3.091 6.905 6.905 6.905s6.905-3.09 6.905-6.905a6.906 6.906 0 00-6.905-6.907z"></path>
                        <path d="M76.42 34.068a42.341 42.341 0 008.805-17.217c-8.711 9.23-23.923 15.35-41.246 15.35-17.325 0-32.537-6.12-41.249-15.35A42.36 42.36 0 0011.736 34.3C5.193 38.493.852 45.822.852 54.17c0 13.028 10.562 23.59 23.59 23.59 8.312 0 15.616-4.302 19.817-10.795 4.202 6.493 11.504 10.795 19.817 10.795 13.029 0 23.59-10.56 23.59-23.59-.002-8.502-4.5-15.95-11.246-20.103zM24.442 70.063c-8.778 0-15.893-7.115-15.893-15.892 0-8.778 7.115-15.894 15.893-15.894s15.894 7.117 15.894 15.894c0 8.777-7.117 15.892-15.894 15.892zm39.633 0c-8.779 0-15.893-7.115-15.893-15.892 0-8.778 7.115-15.894 15.893-15.894s15.893 7.117 15.893 15.894c0 8.777-7.116 15.892-15.893 15.892z"></path>
                        <path d="M68.592 52.04a2.389 2.389 0 01-2.388-2.39c0-.69.298-1.305.766-1.742a6.837 6.837 0 00-2.896-.644 6.906 6.906 0 100 13.81 6.905 6.905 0 006.905-6.904 6.847 6.847 0 00-.645-2.898 2.364 2.364 0 01-1.742.767zM44.258 90.688l-7.014-11.907 7.014-7.538 7.014 7.538zm-2.027-66.996l-16.146-6.22v9.965c5.583 1.532 11.639 2.35 17.894 2.35a68.98 68.98 0 0014.397-1.498V17.474l-16.145 6.22z"></path>
                        <path d="M42.23 21.517l-29.073-11.2L42.23.688l29.076 9.627z"></path>
                    </g>
                </svg>
            </a>
        </div>

        <label for="menu-toggle" class="cursor-pointer lg:hidden block">
            <svg class="fill-current text-gray-600 hover:text-gray-800" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                <title>menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </label>
        <input class="hidden" type="checkbox" id="menu-toggle"/>

        <div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="menu">
            <nav>
                <ul class="lg:flex items-center justify-between text-sm font-medium text-gray-700 pt-4 lg:pt-0">
                    <li>
                        <a class="lg:p-4 py-3 px-0 block text-orange-500 font-bold" href="#">Sinh viên</a>
                    </li>
                    <li>
                        <a class="lg:p-4 py-3 px-0 block text-gray-600 hover:text-gray-900" href="#">Phụ huynh</a>
                    </li>
                    @can('viewNova')
                        <li>
                            <a class="lg:p-4 py-3 px-0 block text-gray-600 hover:text-gray-900 lg:mb-0 mb-2" href="{{ url(config('nova.path')) }}">Admin</a>
                        </li>
                    @endcan
                </ul>
            </nav>
            <a href="#" class="group lg:ml-4 flex items-center justify-start lg:mb-0 mb-4 pointer-cursor border-l border-gray-300 pl-6" id="userdropdown">
                <p class="font-bold text-xs pr-2 text-gray-700 text-right ignore-body-click">{{ auth()->user()->name }}</p>
                <img class="rounded-full w-10 h-10 border-2 border-transparent group-hover:border-orange-400 ignore-body-click" src="https://www.gravatar.com/avatar/{{ md5(strtolower(trim(auth()->user()->email))) }}?s=80&d=mp" alt="avatar">
            </a>
            <div id="usermenu" class="absolute lg:mt-12 pt-1 z-40 left-0 lg:left-auto lg:right-0 lg:top-0 invisible lg:w-auto w-full">
                <div class="bg-white shadow-xl lg:px-8 px-6 lg:py-4 pb-4 pt-0 rounded rounded-t-none">
                    <a href="{{ route('profile.index') }}" class="py-2 block text-gray-600 hover:text-gray-900 font-medium ignore-body-click">Cá nhân</a>
                    <a href="{{ route('logout') }}" class="py-2 block text-gray-600 hover:text-gray-900 font-medium ignore-body-click">Đăng xuất</a>
                </div>
            </div>

        </div>
    </div>
</header>

@if ($errors->any())
    <div class="container mx-auto max-w-3xl mt-8">
        <div class="bg-red-500 text-white p-4 rounded-lg">
            <p class="font-bold">Vui lòng sửa các lỗi sau</p>
            <ul class="list-disc ml-8">
                @foreach ($errors->all() as $error)
                    <li class="mt-2">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

<script>
    var userDropDownVisible = false;

    document.body.addEventListener("click", function (e) {
        if (e.target.id != "usermenu" && !e.target.classList.contains('ignore-body-click') && userDropDownVisible) {
            document.getElementById('usermenu').classList.add('invisible');
            userDropDownVisible = false;
        }
    });


    document.getElementById('userdropdown').addEventListener('click', function () {
        if (document.getElementById('usermenu').classList.contains('invisible')) {
            document.getElementById('usermenu').classList.remove('invisible');
            userDropDownVisible = true;
        } else {
            document.getElementById('usermenu').classList.add('invisible');
            userDropDownVisible = false;
        }
    });
</script>
