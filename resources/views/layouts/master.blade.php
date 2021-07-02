<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="/img/icon.svg" color="white">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="d-flex">
                <a class="navbar-brand" href="/">Sport LIfe</a>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page"
                           href="{{ route('index') }}">Головна</a>
                        <a class="nav-link {{ Request::is('services') ? 'active' : '' }}"
                           href="{{ route('services') }}">Послуги</a>
                        <a class="nav-link {{ Request::is('news') ? 'active' : '' }}"
                           href="{{ route('news') }}">Новини</a>
                        <a class="nav-link {{ Request::is('reviews') ? 'active' : '' }}"
                           href="{{ route('reviews') }}">Відгуки</a>
                        <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ route('about') }}">Про
                            нас</a>
                    </div>
                </div>
            </div>
            <div class="d-flex">
                <div class="userinfo d-flex justify-content-center align-items-center">
                    @if(Auth::check())
                        <a href="{{ route('menu') }}"><img id="avatar"
                                                           src="{{ Storage::url(Auth::user()->avatar) }}"
                                                           width="50px"
                                                           height="50px"
                                                           alt="avatar">
                        </a>
                    @else
                        <a class="nav-link" href=" {{ url('/login') }}">Авторизуватися</a>
                        <a class="nav-link" href=" {{ url('/register') }}">Зареєструватися</a>
                    @endif
                </div>
            </div>
        </div>
    </nav>
</header>
<main>
    @yield('content')
</main>
<!-- Footer -->
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
        <section class="links">
            <a href="https://www.facebook.com/"><img src="/img/icons/facebook.svg" alt="facebook"></a>

            <a href="https://twitter.com/"><img src="/img/icons/twitter.svg" alt="twitter"></a>

            <a href="https://instagram.com/"><img src="/img/icons/instagram.svg" alt="instagram"></a>

            <a href="https://www.tiktok.com/"><img src="/img/icons/tiktok.svg" alt="tiktok"></a>
        </section>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Copyright:
        <a class="text-white" href="/">Sport Life</a>
    </div>
</footer>
<!-- Footer -->
<script src="/js/app.js"></script>
</body>
</html>
