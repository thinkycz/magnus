@extends('layouts.public')

@section('content')
    <section class="bg-gray-100 py-40">

        <div class="container max-w-5xl mx-auto">
            <div class="pb-24">
                <h2 class="w-full text-4xl font-bold leading-tight text-center text-gray-700">Liên hệ với chúng tôi</h2>
                <p class="text-center mt-4 text-gray-600">Nếu bạn có bất kỳ câu hỏi nào, đừng ngần ngại liên hệ với chúng tôi.</p>
            </div>

            <div class="max-w-3xl bg-white rounded-lg mx-auto px-16 py-12">
                <h1 class="text-2xl font-medium mb-2 text-gray-800">Câu hỏi của bạn là gì?</h1>
                <form action="{{ route('contact.store') }}" method="POST" class="flex flex-col">
                    @csrf
                    <input type="text" class="px-3 w-full py-2 bg-gray-200 border border-gray-200 rounded focus:border-gray-400 focus:outline-none focus:bg-white mt-4" name="subject" placeholder="Chủ đề" value="{{ old('subject') }}">
                    <textarea class="px-3 w-full py-2 bg-gray-200 border border-gray-200 rounded focus:border-gray-400 focus:outline-none focus:bg-white mt-4 " name="message" cols="30" rows="10" placeholder="Nội dung">{{ old('message') }}</textarea>
                    <button class="bg-green-500 text-green-100 px-6 py-3 rounded-full hover:bg-green-600 focus:outline-none cursor-pointer mt-4">Send Message</button>
                </form>
            </div>
        </div>
    </section>
@endsection
