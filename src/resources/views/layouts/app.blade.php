<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
        </div>
        @if (Auth::check())
            <form class="form" action="/logout" method="post">
            @csrf
                <button class="header-nav__button">logout</button>
            </form>
            @else
            <form class="form" action="/login" method="post">
            @csrf
                <button class="header-nav__button">login</button>
            </form>
        @endif
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>