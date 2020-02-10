@extends('layouts.student')

@section('side')
    <div class="w-full">
        @forelse($courses as $course)
            <div class="w-full bg-white rounded-lg shadow-lg mx-auto my-8">
                <div class="px-4 py-5 border-b-2 flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900">{{ $course->name }}</h3>
                        <p class="text-sm font-semibold text-gray-700">{{ $course->starts_at->format('j.n.Y') }}
                            - {{ $course->ends_at->format('j.n.Y') }}</p>
                    </div>

                    @if($course->pivot->paid_amount >= $course->price)
                        <span class="text-sm bg-green-500 text-white px-4 py-2 rounded font-bold">Đã thanh toán</span>
                    @else
                        <span
                            class="text-sm bg-red-500 text-white px-4 py-2 rounded font-bold">Chưa thanh toán đầy đủ</span>
                    @endif
                </div>

                @if($course->next_lesson)
                    <div class="p-4 border-b">
                        <p class="font-semibold text-gray-800">Giờ học tiếp theo: {{ $course->next_lesson->title }}</p>
                    </div>
                @endif

                <div class="p-4 flex items-center justify-between">
                    <p class="font-semibold text-gray-800">Tổng cộng: {{ $course->lessons->count() }} giờ học</p>

                    <a href="{{ route('student.courses.show', $course) }}"
                       class="px-2 py-1 text-xs rounded bg-blue-500 hover:bg-blue-600 text-white font-semibold">Chi
                        tiết</a>
                </div>
            </div>
        @empty
            <div class="w-full bg-white rounded-lg shadow-lg mx-auto my-8">
                <div class="w-full h-full flex items-center justify-center">
                    <h3 class="text-xl text-gray-800">Hiện tại bạn chưa đăng ký khoá học</h3>
                </div>
            </div>
        @endforelse
    </div>

@endsection
