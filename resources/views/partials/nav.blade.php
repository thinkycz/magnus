<!-- Top Color Bar -->
<div class="h-2 bg-green-600 w-full absolute z-20"></div>

<!-- Nav Bar -->
<div class="absolute w-full z-20">
    <nav class="font-sans text-center flex justify-between my-4 mx-auto container overflow-hidden mt-8 z-50 relative px-5 overflow-visible">
        <a href="/" class="toggleColour text-gray-700 no-underline hover:no-underline font-bold text-2xl lg:text-4xl h-12 pb-1 mx-auto sm:mx-0">
            <svg class="h-full mt-1" viewBox="0 0 360 78" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;"><path d="M89.958,62.246l-28.388,-52.101l-11.321,21.441l-16.533,-28.086l-30.216,59.142" style="fill:#79cc9e;fill-opacity:0;stroke:url(#_Linear1);stroke-width:7px;"/><text x="117.312px" y="62.533px" style="font-family:'TrebuchetMS', 'Trebuchet MS', sans-serif;font-size:72px;fill:#2d3748;">Magnus</text><defs><linearGradient id="_Linear1" x1="0" y1="0" x2="1" y2="0" gradientUnits="userSpaceOnUse" gradientTransform="matrix(-86.458,0,0,59.1424,89.958,33.0712)"><stop offset="0" style="stop-color:#48bb78;stop-opacity:1"/><stop offset="1" style="stop-color:#38a169;stop-opacity:1"/></linearGradient></defs></svg>
        </a>
        <ul class="text-sm text-grey-dark list-reset flex items-center">
            <li class="mr-8 group relative">
                <span class="font-semibold text-gray-900 hover:text-orange-500 cursor-pointer">
                    Tiếng Séc Giao Tiếp
                </span>

                <div class="absolute hidden group-hover:flex flex-col bg-white shadow rounded top-0 right-0 mt-4 py-2">
                    <a href="{{ route('category', 'luyen-nghe-tieng-sec') }}" class="px-6 py-2 hover:bg-gray-200 whitespace-no-wrap">Luyện nghe tiếng Séc</a>
                    <a href="{{ route('category', 'luyen-noi-tieng-sec') }}" class="px-6 py-2 hover:bg-gray-200 whitespace-no-wrap">Luyện nói tiếng Séc</a>
                    <a href="{{ route('category', 'phat-am-tieng-sec') }}" class="px-6 py-2 hover:bg-gray-200 whitespace-no-wrap">Phát âm tiếng Séc</a>
                    <a href="{{ route('category', 'ngu-phap-tieng-sec') }}" class="px-6 py-2 hover:bg-gray-200 whitespace-no-wrap">Ngữ pháp tiếng Séc</a>
                </div>
            </li>
            <li class="mr-8">
                <a href="{{ route('courses') }}" class="font-semibold text-gray-900 hover:text-orange-500">Các khoá học</a>
            </li>
            <li class="mr-8">
                <a href="{{ route('category', 've-tt-magnus') }}" class="font-semibold text-gray-900 hover:text-orange-500">Về TT Magnus</a>
            </li>
            @auth
                <li>
                    <a href="{{ route('dashboard') }}" class="text-white ml-4 py-3 px-6 rounded-full bg-gray-800 font-bold hidden sm:block bg-green-500 hover:bg-green-600">Vào ứng dụng</a>
                </li>
            @else
                <li>
                    <a href="{{ route('login') }}" class="text-white ml-4 py-3 px-6 rounded-full bg-gray-800 font-bold hidden sm:block bg-green-500 hover:bg-green-600">Đăng nhập</a>
                </li>
            @endauth
        </ul>
    </nav>
</div>
