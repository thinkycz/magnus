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
            <div class="w-full mx-auto my-16">
                <div class="w-full h-full flex flex-col items-center justify-center text-gray-800">
                    <svg viewBox="0 0 20 20" fill="currentColor" class="w-16 h-16">
                        <path fill-rule="evenodd"
                              d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                              clip-rule="evenodd"></path>
                    </svg>

                    <h3 class="text-xl mt-8">Hiện tại bạn chưa có hạnh kiểm</h3>
                </div>
            </div>
        @endforelse

        {{ $feedbacks->links() }}
    </div>

@endsection
