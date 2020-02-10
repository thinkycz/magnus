@extends('layouts.student')

@section('side')
    <div class="w-full">
        @forelse($feedbacks as $feedback)
            <div class="w-full bg-white rounded-lg shadow-lg mx-auto my-8">
                <div class="px-4 py-5 border-b-2 flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900">{{ $feedback->title }}</h3>

                        <p class="text-sm font-semibold text-gray-700">
                            @if($feedback->course)
                                <span>{{ $feedback->course->name }}</span> -
                            @endif
                            <span>{{ $feedback->created_at->format('j.n.Y') }}</span>
                        </p>
                    </div>
                </div>

                <div class="p-4">
                    {!! $feedback->content !!}
                </div>
            </div>
        @empty
            <div class="w-full bg-white rounded-lg shadow-lg mx-auto my-8">
                <div class="w-full h-full flex items-center justify-center">
                    <h3 class="text-xl text-gray-800">Hiện tại bạn chưa có hạnh kiểm</h3>
                </div>
            </div>
        @endforelse
    </div>

@endsection
