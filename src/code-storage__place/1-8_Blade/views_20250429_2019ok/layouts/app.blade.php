<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <!-- リセットcss -->
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <!-- 各cssの適用 -->
    @yield('css')
    <!-- 共通部分のcssの適用 -->
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
</head>

<body>
    <header class="header">
       <div class="header__inner">
            <a class="header__logo" href="/">
            Contact Form
            </a>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>