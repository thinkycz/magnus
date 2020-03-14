@extends('layouts.main')

@section('main')
    <Quiz :quiz="{{ json_encode($quiz) }}"></Quiz>
@endsection
