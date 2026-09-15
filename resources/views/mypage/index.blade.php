<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マイページ</title>

    <style>
        body{
            margin:0;
            font-family: Arial,sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }
        .container{
            width:90%;
            max-width: 800px;
            margin:0 auto;
            padding:40px 0;
        }
        h1{
            text-align: center;
            margin-bottom: 30px;
            color:cornflowerblue;
        }
        .reservation-card{
            background-color: #fff;
            border-radius:10px;
            padding:25px;
            margin-bottom:20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .button-area{
            display:flex;
            gap:10px;
            margin-top:20px;
        }
        .edit-button,
        .cansel-button{
            padding:10px 18px;
            border:none;
            border-radius:5px;
            text-decoration:none;
            cursor:pointer;
            font-size:14px;
        }

        .edit-button{
            background-color: #333;
            color: #fff;
        }

        .cansel-button{
            background-color: #ddd;
            color: #333;
        }

        .empty-message{
            background-color: #fff;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
        }

        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 20px;
            background-color: #333;
            color:#fff;
            text-decoration: none;
            border-radius: 5px;
        }


    </style>




</head>
<body>

  <div class="container">

    <h1>マイページ</h1>

    <h2>予約一覧</h2>

    @forelse ($reservations as $reservation)
        <div class="reservation-card">
            <h3>{{ $reservation->restaurant->name }}</h3>

            <p class="reservation-info">
                📅 予約日：{{ $reservation->reservation_date }}</p>
            <p class="reservation-info">
                🕛 予約時間：{{ $reservation->reservation_time }}</p>
            <p class="reservation-info">
                👤 人数：{{ $reservation->number_of_people }}人</p>

        <div class="button-area">
            <a href="/reservations/{{ $reservation->id }}/edit" class="edit-button">
                予約変更
            </a>

            <form
             action="/reservations/{{ $reservation->id }}"
             method="POST"
             onsubmit="return confirm('この予約をキャンセルしてもよろしいですか？')"
            >
             @csrf
             @method('DELETE')

             <button type="submit" class="cansel-button">予約キャンセル</button>
            </form>
        </div>

     </div>


    @empty
        <p class="empty-message">
            現在、予約はありません。
        </p>
    @endforelse

    <a href="/restaurants" class="back-button">
        飲食店一覧に戻る
    </a>
 </div>

</body>
</html>
