<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>飲食店一覧</title>
</head>
<body>

    <h1>飲食店一覧</h1>

    @foreach ($restaurants as $restaurant)
        <div>
            <h2>{{ $restaurant->name }}</h2>
            <p>住所：{{ $restaurant->address }}</p>
            <p>ジャンル：{{ $restaurant->genre }}</p>
            <p>{{ $restaurant->description }}</p>
            <a href="/restaurants/{{ $restaurant->id }}">
                詳細を見る
            </a>
        </div>
    @endforeach

</body>
</html>
