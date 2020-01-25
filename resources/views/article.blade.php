@extends('layouts.public')

@section('content')
    <section class="bg-gray-100 py-24">

        <div class="container max-w-5xl mx-auto">
            <div class="py-24">
                <h2 class="w-full text-4xl font-bold leading-tight text-center text-gray-700">{{ $article->title }}</h2>
                <p class="text-center mt-2 text-sm text-gray-600">Ngày đăng bài viết {{ $article->created_at->format('j.n.Y') }}</p>
            </div>

            <div class="editor">
                {!! $article->content !!}
            </div>
        </div>

    </section>
@endsection
