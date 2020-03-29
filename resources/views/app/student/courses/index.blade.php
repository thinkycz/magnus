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
            <div class="w-full mx-auto my-16">
                <div class="w-full h-full flex flex-col items-center justify-center text-gray-800">
                    <svg viewBox="0 0 20 20" fill="currentColor" class="w-16 h-16">
                        <path fill-rule="evenodd"
                              d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                              clip-rule="evenodd"></path>
                    </svg>

                    <h3 class="text-xl mt-8">Hiện tại bạn chưa đăng ký khoá học</h3>
                </div>
            </div>
        @endforelse

        {{ $courses->links() }}
    </div>

@endsection
