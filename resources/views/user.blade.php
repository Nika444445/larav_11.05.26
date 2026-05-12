@extends('basa')
@section('front.main')
    @section('text')
        <h1>{{ $text }}</h1>
    @endsection
    <h1>Привет, {{ $name }}!</h1>
@endsection