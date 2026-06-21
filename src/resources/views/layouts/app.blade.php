<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/attendance.css') }}">
</head>
<body>

<header class="header">
    <div class="header__inner">

        <div class="header__logo">
            COACHTECH
        </div>

        <nav class="header__nav">
            <a href="#">勤怠</a>
            <a href="#">勤怠一覧</a>
            <a href="#">申請</a>
            <a href="#">ログアウト</a>
        </nav>

    </div>
</header>

<main>
    @yield('content')
</main>

</body>
</html>