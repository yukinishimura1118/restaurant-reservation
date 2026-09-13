<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>飲食店登録</title>
</head>
<body>

    <h1>飲食店登録</h1>

    <form action="/restaurants" method="POST">
        @csrf

        <div>
            <label>店名</label>
            <input type="text" name="name">
        </div>

        <div>
            <label>住所</label>
            <input type="text" name="address">
        </div>

        <div>
            <label>ジャンル</label>
            <input type="text" name="genre">
        </div>

        <div>
            <label>説明</label>
            <textarea name="description"></textarea>
        </div>

        <button type="submit">登録する</button>
    </form>

</body>
</html>
