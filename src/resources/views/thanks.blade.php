<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
</head>
<body>
    <div class="thanks">
        <div class="thanks-item">
            <p class="thanks-p">お問い合わせありがとうございました</p>
        </div>
        <form action="/" method="get">
            @csrf
            <div class="home__button">
                <button class="home__button-submit">HOME</button>
            </div>
        </form>
    </div>
</body>
</html>