@extends('layouts.public')

@section('content')
    <section class="bg-gray-100 py-24">

        <div class="container max-w-5xl mx-auto">
            <div class="py-24">
                <h2 class="w-full text-4xl font-bold leading-tight text-center text-gray-700">{{ $article->title }}</h2>
            </div>

            {!! $article->content !!}
        </div>

    </section>
@endsection
