@extends('layouts.elearning')

@section('side')
    <div class="w-full">
        <div class="w-full bg-white rounded-lg shadow-lg mx-auto my-8">
            <div class="px-4 py-5 md:flex items-center justify-between">
                <div class="mb-4 md:mb-0">
                    <h3 class="text-xl font-semibold text-gray-900">{{ $result->quiz->title }}</h3>
                    <p class="text-sm font-semibold text-gray-700">{{ $result->created_at->format('j.n.Y') }}</p>
                </div>

                <span
                    class="text-sm text-white px-4 py-2 rounded font-bold flex-shrink-0 {{ $result->score > 70 ? 'bg-green-500' : ($result->score > 30 ? 'bg-orange-500' : 'bg-red-500') }}">
                        Kết quả: {{ $result->score . ' %' }}
                    </span>
            </div>

            <div class="p-4 border-t">
                @if($result->score <= 25)
                    <h4 class="font-semibold text-gray-800">Mravenec (Con kiến)</h4>
                    <p class="text-gray-700 text-sm my-1">Upss! :( Bạn là Mravenec (con kiến) - bạn đã
                        được {{ $result->score }}% từ 100%. Nhưng không sao đâu! Bạn đừng buồn nhé! Bạn hãy tập nhiều
                        hơn để biết thêm nhé!</p>
                    <p class="text-gray-700 text-sm my-1 italic">Cvik dělá mistra - Có công mài sắt có ngày nên kim</p>
                @elseif($result->score <= 50)
                    <h4 class="font-semibold text-gray-800">Myška (Chuột con)</h4>
                    <p class="text-gray-700 text-sm my-1">Hmm.. Bạn là Myška (chuột con) - bạn đã
                        được {{ $result->score }}% từ 100%. Bạn thử làm lại bài kiểm tra lần nữa xem lần sau có tốt hơn
                        không? :)</p>
                    <p class="text-gray-700 text-sm my-1 italic">Cái gì làm được hôm nay, đừng để đến ngày mai - Co
                        můžeš udělat dnes, neodkládej na zítřek.</p>
                @elseif($result->score <= 75)
                    <h4 class="font-semibold text-gray-800">Kočka (Con mèo)</h4>
                    <p class="text-gray-700 text-sm my-1">Woa! Bạn là Kočka (con mèo) bạn đã được {{ $result->score }}%
                        từ 100%. Chúc mừng bạn đã vượt qua 50%! </p>
                    <p class="text-gray-700 text-sm my-1 italic">#CốgắngcùngMagnus</p>
                @elseif($result->score <= 90)
                    <h4 class="font-semibold text-gray-800">Lev (Sư tử)</h4>
                    <p class="text-gray-700 text-sm my-1">Super! Bạn là Lev (con sư tử) - bạn đã
                        được {{ $result->score }}% từ 100%. Bạn giỏi quá mà!! Nhưng để bạn được làm Drak (con rồng) bạn
                        hãy cố lên thêm chút nữa nha :)</p>
                    <p class="text-gray-700 text-sm my-1 italic">Có lửa mới có khói. - Všechno má svůj důvod. </p>
                @else
                    <h4 class="font-semibold text-gray-800">Drak (Con rồng)</h4>
                    <p class="text-gray-700 text-sm my-1">SUPER WOW! Bạn là Drak (con rồng) - bạn đã
                        được {{ $result->score }}% từ 100%. Tuyệt vời ông mặt trời, Magnus xin chúc mừng bạn và hẹn gặp
                        bạn vào lần sau!!!</p>
                    <p class="text-gray-700 text-sm my-1 italic">Gratulujeme - Štěstí přeje připraveným. </p>
                @endif
            </div>
        </div>

        @foreach($result->types as $question)
            <div class="w-full bg-white rounded-lg shadow-lg mx-auto my-4">
                <div class="p-4">
                    <p class="text-sm font-semibold text-gray-700">{{ '#' . $loop->iteration }} - {{ $question->title }}</p>
                    <div class="text-md text-gray-900 mt-1">{!! $question->content !!}</div>
                </div>

                <div class="p-4 border-t lg:flex">
                    {!! $question->render() !!}
                </div>

                @if($question->explanation)
                    <div class="p-4 border-t">
                        <p class="text-sm font-semibold text-gray-700">Giải thích</p>
                        <div
                            class="text-sm text-gray-900 mt-1">{{ $question->explanation }}</div>
                    </div>
                @endif
            </div>
        @endforeach
    </div>
@endsection
