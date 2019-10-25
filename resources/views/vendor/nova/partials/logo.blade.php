@auth()
    <img src="{{ asset('img/magnus_white.png') }}" alt="Magnus Logo" style="max-width: 12rem; max-height: 3rem; margin: auto">
@else
    <img src="{{ asset('img/magnus_black.png') }}" alt="Magnus Logo" class="w-48 h-48">
@endif