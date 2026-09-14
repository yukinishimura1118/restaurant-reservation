<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>飲食店編集</title>
</head>
<body>

    <h1>飲食店編集</h1>

    <form action="/restaurants/{{ $restaurant->id }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>店名</label>
            <input
                type="text"
                name="name"
                value="{{ $restaurant->name }}"
            >
        </div>

        <div>
            <label>住所</label>
            <input
                type="text"
                name="address"
                value="{{ $restaurant->address }}"
            >
        </div>

        <div>
            <label>ジャンル</label>
            <input
                type="text"
                name="genre"
                value="{{ $restaurant->genre }}"
            >
        </div>

        <div>
            <label>説明</label>
            <textarea name="description">{{ $restaurant->description }}</textarea>
        </div>

        <button type="submit">更新する</button>
    </form>

    <a href="/restaurants/{{ $restaurant->id }}">
        詳細ページに戻る
    </a>

</body>
</html>
