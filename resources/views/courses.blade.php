@extends('layouts.public')

@section('content')
    <section class="bg-gray-100 py-24">
        <div class="container max-w-5xl mx-auto">
            <div class="py-24">
                <h2 class="w-full text-4xl font-bold leading-tight text-center text-gray-700">Courses</h2>
            </div>

            @foreach($courses as $course)
                <div>
                    <h3><a href="{{ $course->show_route }}">{{ $course->name }}</a></h3>
                </div>
            @endforeach
        </div>
    </section>
@endsection
