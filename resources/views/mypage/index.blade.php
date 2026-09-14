<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>マイページ</title>
</head>
<body>

    <h1>マイページ</h1>

    <h2>予約一覧</h2>

    @forelse ($reservations as $reservation)
        <div>
            <h3>{{ $reservation->restaurant->name }}</h3>

            <p>予約日：{{ $reservation->reservation_date }}</p>
            <p>予約時間：{{ $reservation->reservation_time }}</p>
            <p>人数：{{ $reservation->number_of_people }}人</p>
            <a href="/reservations/{{ $reservation->id }}/edit">
                予約変更
            </a>
            <form
             action="/reservations/{{ $reservation->id }}"
             method="POST"
             onsubmit="return confirm('この予約をキャンセルしてもよろしいですか？')"
            >
             @csrf
             @method('DELETE')

             <button type="submit">予約キャンセル</button>
</form>
        </div>

        <hr>
    @empty
        <p>現在、予約はありません。</p>
    @endforelse

    <a href="/restaurants">飲食店一覧に戻る</a>

</body>
</html>
