@extends('basa')
@section('front.main')
    @section('text')
        <h1>{{ $text }}</h1>
    @endsection
<div class="body"></div>
    <div class="content">
        @foreach ($main as $value)
        <div class="card">
            <img class="img_card" src="{{ $value->image }}" alt="{{ $value->title }}">

            <div class="title">{{ $value->title }}</div>
            <div class="price">{{ $value->price }} ₽</div>
            <div class="color"> Цвет: {{ $value->color }}</div>
            <div class="desc">{{ $value->description }}</div>
        </div>
        @endforeach
    </div>
@endsection