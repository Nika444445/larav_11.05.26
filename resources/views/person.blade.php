@extends('basa')
@section('front.main')
    <div class="card">
        <h2>Информация о человеке</h2>
        <p><strong>Имя:</strong> {{ $name }}</p>
        <p><strong>Возраст:</strong> {{ $age }} лет</p>
        <p><strong>Рост:</strong> {{ $height }} см</p>
        <p><strong>Вес:</strong> {{ $weight }} кг</p>
        <p><strong>Хобби:</strong> {{ $hobby }}</p>
    </div>

    <style>
        .card {
            padding: 20px;
            width: 300px;
            background-color: #f9f9f9;
        }
    </style>
@endsection