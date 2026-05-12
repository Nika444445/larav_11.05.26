<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
    
@yield('text')

<ul>
    <li><a href="{{ route('index') }}">Главная</a></li>
    <li><a href="{{ route('user') }}">Пользователь</a></li>
    <li><a href="{{ route('person') }}">Информация</a></li>
    <li><a href="{{ route('myadmin') }}">Админка</a></li>
</ul>

@yield('front.main')
@yield('person')
@yield('user')
@yield('admin')


<script src="{{ asset('js/script.js') }}"></script> 
</body>
</html>
<?php