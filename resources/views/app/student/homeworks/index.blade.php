@extends('layouts.student')

@section('side')
    <div class="w-full">
        @forelse($homeworks as $homework)
            <div class="w-full bg-white rounded-lg shadow-lg mx-auto my-8">
                <div class="px-4 py-5 border-b-2 flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900">{{ $homework->title }}</h3>
                        <p class="text-sm font-semibold text-gray-700">{{ $homework->lesson->course->name }} - {{ $homework->lesson->title }}</p>
                    </div>
                </div>

                <div class="p-4">
                    {!! $homework->description !!}
                </div>
            </div>
        @empty
            <div class="w-full bg-white rounded-lg shadow-lg mx-auto my-8">
                <div class="w-full h-full flex items-center justify-center">
                    <h3 class="text-xl text-gray-800">Hiện tại bạn chưa có bài tập về nhà</h3>
                </div>
            </div>
        @endforelse
    </div>

@endsection
