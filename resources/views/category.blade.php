@extends('layouts.public')

@section('content')
    <section class="bg-gray-100 py-24">

        <div class="container max-w-5xl mx-auto">
            <div class="py-24">
                <h2 class="w-full text-4xl font-bold leading-tight text-center text-gray-700">{{ $category->name }}</h2>
            </div>

            @foreach($articles as $article)
                <div class="p-4 bg-white rounded shadow-xl mb-4">
                    <h3 class="text-xl font-semibold text-gray-800 hover:underline">
                        <a href="{{ $article->show_route }}">{{ $article->title }}</a>
                    </h3>
                    <p class="text-xs font-semibold text-gray-600 m-0">{{ $article->read_time }}</p>

                    <div class="content mt-4 mb-6">
                        {!! $article->excerpt !!}
                    </div>

                    <a class="font-semibold bg-green-500 hover:bg-green-600 text-white rounded px-4 py-2" href="{{ $article->show_route }}">Đọc tiếp...</a>
                </div>
            @endforeach

            {{ $articles->links() }}
        </div>

    </section>
@endsection
