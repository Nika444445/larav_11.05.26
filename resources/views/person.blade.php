<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Информация о человеке</title>
    
</head>
<body>
    <div class="card">
        <h2>Информация о человеке</h2>
        <p><strong>Имя:</strong> {{ $name }}</p>
        <p><strong>Возраст:</strong> {{ $age }} лет</p>
        <p><strong>Рост:</strong> {{ $height }} см</p>
        <p><strong>Вес:</strong> {{ $weight }} кг</p>
        <p><strong>Хобби:</strong> {{ $hobby }}</p>
    </div>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        .card {
            padding: 20px;
            width: 300px;
            background-color: #f9f9f9;
        }
    </style>
</body>
</html>