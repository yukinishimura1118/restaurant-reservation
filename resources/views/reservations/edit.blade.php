<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>予約変更</title>
</head>
<body>

    <h1>予約変更</h1>

    <h2>{{ $reservation->restaurant->name }}</h2>

    <form action="/reservations/{{ $reservation->id }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>予約日</label>
            <input
                type="date"
                name="reservation_date"
                value="{{ $reservation->reservation_date }}"
            >
        </div>

        <div>
            <label>予約時間</label>
            <input
                type="time"
                name="reservation_time"
                value="{{ $reservation->reservation_time }}"
            >
        </div>

        <div>
            <label>人数</label>
            <input
                type="number"
                name="number_of_people"
                min="1"
                value="{{ $reservation->number_of_people }}"
            >
        </div>

        <button type="submit">変更する</button>
    </form>

    <a href="/mypage">マイページに戻る</a>

</body>
</html>
