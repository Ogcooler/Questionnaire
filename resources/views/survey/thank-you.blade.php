<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/thank-you.css')}}">
        <script src="{{asset('js/thank-you.js')}}"></script>
    </head>
    <body>
    @include('layouts.header')
    <span></span>
    <div class="thank-you-wrapper">
        <h1 class="thank-you-title">Спасибо за участие в опросе!</h1>
        <h2 class="thank-you-comment">Для нас очень важно ваше мнение.</h2>
        <a href="/login">
            <button class="redirect-btn">Вернуться в профиль!</button>
        </a>
    </div>
    </body>
</html>
