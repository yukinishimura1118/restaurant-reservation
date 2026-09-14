<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>{{ $restaurant->name }}</title>
</head>
<body>

    <h1>{{ $restaurant->name }}</h1>

    <p>住所：{{ $restaurant->address }}</p>

    <p>ジャンル：{{ $restaurant->genre }}</p>

    <p>説明：{{ $restaurant->description }}</p>

    <a href="/restaurants/{{ $restaurant->id }}/reservations/create">
        予約する
    </a>
    <form action="/restaurants/{{ $restaurant->id }}" method="POST"
        onsubmit="return confirm('この飲食店を削除してもよろしいですか？');">
      @csrf
      @method('DELETE')

      <button type="submit">削除する</button>
  </form>

    <a href="/restaurants">飲食店一覧に戻る</a>

</body>
</html>
