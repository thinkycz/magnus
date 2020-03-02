@extends('layouts.parent')

@section('side')
    <div class="w-full">
        @forelse($children as $child)
            <div class="w-full bg-white rounded-lg shadow-lg mx-auto my-8">
                <div class="px-4 py-5 border-b-2 flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900">{{ $child->full_name }}</h3>
                        <p class="text-sm font-semibold text-gray-700">Học viên từ ngày {{ $child->created_at->format('j.n.Y') }}</p>
                    </div>
                </div>

                <div class="p-4 flex items-center justify-between">
                    <p class="font-semibold text-gray-800">Đã đăng ký {{ $child->courses->count() }} khoá học</p>

                    <a href="{{ route('student.courses.show', $child) }}"
                       class="px-2 py-1 text-xs rounded bg-blue-500 hover:bg-blue-600 text-white font-semibold">
                        Chi tiết
                    </a>
                </div>
            </div>
        @empty
            <div class="w-full bg-white rounded-lg shadow-lg mx-auto my-8">
                <div class="w-full h-48 flex items-center justify-center">
                    <h3 class="text-xl text-gray-600">Hiện tại bạn không phụ huynh học viên nào</h3>
                </div>
            </div>
        @endforelse
    </div>
@endsection
