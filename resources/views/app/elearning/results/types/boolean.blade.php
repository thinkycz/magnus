<div class="flex-1">
    <h4 class="font-semibold text-gray-800">Đáp án</h4>
    @if($correct)
        <p class="pl-8 text-sm text-green-700 font-semibold">Đồng ý</p>
    @else
        <p class="pl-8 text-sm text-red-700 font-semibold">Không đồng ý</p>
    @endif
</div>
<div class="flex-1">
    <h4 class="font-semibold text-gray-800">Bạn đã chọn</h4>
    <ul class="pl-8 text-sm text-gray-700">
        @if($providedAnswer)
            <p class="pl-8 text-sm text-green-700 font-semibold">Đồng ý</p>
        @else
            <p class="pl-8 text-sm text-red-700 font-semibold">Không đồng ý</p>
        @endif
    </ul>
</div>
