<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
       

        <title>Laravel</title>
         <script src="{{asset('js/parallax.js')}}"></script>
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/home.css')}}">
    </head>
    <body>
     @include('layouts.header')
     <div class="top-cub-group">
        <div class="red-coub coub layer" data-speed="-9"></div>
        <div class="blue-coub coub layer" data-speed="6"></div>
        <div class="red-coub coub layer"data-speed="-5" ></div>
     </div>
     <div class="bottom-cub-group">
        <div class="blue-coub coub layer" data-speed="2"></div>
        <div class="red-coub coub layer" data-speed="5"></div>
        <div class="blue-coub coub layer" data-speed="-3"></div>
     </div>
        <div class="create-btn-container layer" data-speed="1">
            <a class="create-btn-link" href="home">
                <span data-speed="1" class="create-btn-wrapper">Создать опрос</span>
            </a>
        </div>

    </body>
</html>
