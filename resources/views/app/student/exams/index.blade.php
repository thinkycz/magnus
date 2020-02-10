@extends('layouts.student')

@section('side')
    <div class="w-full">
        @forelse($exams as $exam)
            <div class="w-full bg-white rounded-lg shadow-lg mx-auto my-8">
                <div class="px-4 py-5 border-b-2 flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900">{{ $exam->title }}</h3>

                        <p class="text-sm font-semibold text-gray-700">
                            @if($exam->course)
                                <span>{{ $exam->course->name }}</span> -
                            @endif
                                <span>{{ $exam->created_at->format('j.n.Y') }}</span>
                        </p>
                    </div>

                    <span
                        class="text-sm text-white px-4 py-2 rounded font-bold {{ $exam->percentage > 70 ? 'bg-green-500' : ($exam->percentage > 30 ? 'bg-orange-500' : 'bg-red-500') }}">
                        Kết quả: {{ $exam->percentage . ' %' }}
                    </span>
                </div>

                <div class="p-4">
                    {!! $exam->content !!}
                </div>
            </div>
        @empty
            <div class="w-full bg-white rounded-lg shadow-lg mx-auto my-8">
                <div class="w-full h-full flex items-center justify-center">
                    <h3 class="text-xl text-gray-800">Hiện tại bạn chưa có bài kiểm tra</h3>
                </div>
            </div>
        @endforelse
    </div>

@endsection
