<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>

    <style>
    body {
    margin: 0;
    font-family:'Arial', sans-serif;
    background: #f7d1d5;;                 
}

    h1 {
    margin: 0;
    padding: 18px 20px;
    background: #f8b1b8;         
    color: #e44b6c;          
    font-weight: 600;
}

    .content {
    display: flex;
    flex-wrap: wrap;
    gap: 24px;
    padding: 30px 20px;
}

    .card {
    margin: 0 auto;
    width: 280px;
    background: #fdfdfd;
    padding: 16px;
}


    .img_card {
    width: 100%;
    height: 210px;
    border-radius: 20px;
    background: #ffe9ec;
    object-fit: cover;
}

    .title {
    margin: 14px 0 6px;
    font-size: 18px;
    font-weight: 600;
    color: #4a2e2e;
}

    .price {
    margin: 0 0 12px ;
    font-weight: 700;
    color: #b15a62;
    font-size: 20px;
}

    .desc {
    margin: 8px 0 3px;
    font-size: 13px;
    color: #3d3d3d;
}
    </style>
</head>

<body>

    <h1>Главная Страница</h1>

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

</body>

</html>