@extends('layouts.student')

@section('side')
    <div class="w-full bg-white rounded-lg shadow-lg mx-auto my-8">
        <div class="px-4 py-5 border-b-2 flex items-center justify-between">
            <div>
                <h3 class="text-xl font-semibold text-gray-900">{{ $course->name }}</h3>
                <p class="text-sm font-semibold text-gray-700">{{ $course->starts_at->format('j.n.Y') }}
                    - {{ $course->ends_at->format('j.n.Y') }}</p>
            </div>
        </div>

        <table class="w-full">
            <thead class="bg-gray-200">
            <tr>
                <th class="p-4 text-left text-gray-800">Giờ học</th>
                <th class="p-4 text-left text-gray-800">Chủ đề</th>
                <th class="p-4 text-left text-gray-800">Bài tập về nhà</th>
            </tr>
            </thead>
            <tbody>
            @forelse($course->lessons as $lesson)
                <tr class="border-t border-gray-300">
                    <td class="p-4">{{ $lesson->title }}</td>
                    <td class="p-4">{{ $lesson->topic }}</td>
                    <td class="p-4">{{ $lesson->homework_count }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="100%">
                        <p>Khoá này chưa có giờ học</p>
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
