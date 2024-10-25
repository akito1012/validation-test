<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContactForm</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__inner-arrangement">            <div class="header__item">
                <h1 class="header__item-logo">FashionablyLate</h1>
                </div>
                <div class="header__button">
                    @yield('button')
                </div>
            </div>
        </div>
    </header>

    <main>
    @yield('content')
    </main>

</body>

</html>