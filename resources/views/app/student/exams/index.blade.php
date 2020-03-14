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
            <div class="w-full mx-auto my-16">
                <div class="w-full h-full flex flex-col items-center justify-center text-gray-800">
                    <svg viewBox="0 0 20 20" fill="currentColor" class="w-16 h-16">
                        <path fill-rule="evenodd"
                              d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                              clip-rule="evenodd"></path>
                    </svg>

                    <h3 class="text-xl mt-8">Hiện tại bạn chưa có bài kiểm tra</h3>
                </div>
            </div>
        @endforelse
    </div>

@endsection
