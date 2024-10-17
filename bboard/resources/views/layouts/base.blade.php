<html>
<head>
    <meta charset=”UTF-8”>
    <title>@yield("title")::Объявления</title>
    <link href="{{asset('styles/main.css')}}" rel="stylesheet" type=”text/css”>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{asset('styles/main.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
<div class=”container”>
    <a href="{{route('index')}}">Главная</a>
    @guest
        <a href="{{route('register')}}">Регистрация</a>
        <a href="{{route('login')}}">Вход</a >
    @endguest
    @auth
        <a>Мои объявления</a>
        <form>
        </form>
    @endauth

    <h1 class="my-3 text-center">Объявления</h1>
    @yield("main")
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
