<div class="flex-1">
    <h4 class="font-semibold text-gray-800">Đáp án</h4>
    <ul class="pl-8 text-sm text-gray-700 font-semibold">
        @foreach($answers as $answer)
            <li class="list-disc {{ $answer->attributes->correct ? 'text-green-700' : 'text-red-700' }}">{{ $answer->attributes->title }}</li>
        @endforeach
    </ul>
</div>
<div class="flex-1">
    <h4 class="font-semibold text-gray-800">Bạn đã chọn</h4>
    <ul class="pl-8 text-sm text-gray-700 font-semibold">
        @foreach($providedAnswer as $answer)
            <li class="list-disc {{ $answer->attributes->correct ? 'text-green-700' : 'text-red-700' }}">{{ $answer->attributes->title }}</li>
        @endforeach
    </ul>
</div>
