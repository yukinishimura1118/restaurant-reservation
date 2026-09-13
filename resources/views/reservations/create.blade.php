<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>予約する</title>
</head>
<body>

    <h1>{{ $restaurant->name }}を予約する</h1>

    <form action="/reservations" method="POST">
        @csrf
        <input type="hidden" name="restaurant_id" value="{{ $restaurant->id }}">

        <div>
            <label>予約日</label>
            <input type="date" name="reservation_date">
        </div>

        <div>
            <label>予約時間</label>
            <input type="time" name="reservation_time">
        </div>

        <div>
            <label>人数</label>
            <input type="number" name="number_of_people" min="1" value="1">
        </div>

        <button type="submit">予約する</button>
    </form>

    <a href="/restaurants/{{ $restaurant->id }}">お店の詳細に戻る</a>

</body>
</html>
