@extends('layouts.public')

@section('content')
    <section class="bg-gray-100 py-24">
        <div class="container max-w-5xl mx-auto">
            <div class="py-24">
                <h2 class="w-full text-4xl font-bold leading-tight text-center text-gray-700">Các khoá học</h2>
            </div>

            @foreach($courses as $course)
                <div class="p-4 bg-white rounded shadow-xl mb-4 relative">
                    <h3 class="text-xl font-semibold text-gray-800">{{ $course->name }}</h3>
                    <p class="text-xs font-semibold text-gray-600 m-0">{{ $course->starts_at->format('j.n.Y') . ' - ' . $course->ends_at->format('j.n.Y') }}</p>

                    <div class="editor mt-4">
                        {!! $course->description !!}
                    </div>

                    <div class="absolute bottom-0 right-0 bg-green-500 text-white px-4 py-2 rounded-br rounded-tl-lg font-semibold text-sm">{{ number_format($course->price, 2) . ' Kč' }}</div>
                </div>
            @endforeach

            {{ $courses->links() }}
        </div>
    </section>
@endsection
