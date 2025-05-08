<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', '勤怠管理アプリ')</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
    <header>
        @include('components.header') <!-- 共通ヘッダ -->
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('components.footer') <!-- 共通フッタ -->
    </footer>

    @yield('js')
</body>
</html>
