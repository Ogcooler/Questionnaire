<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Questionnaire') }}</title>

    <!-- Scripts -->


    <!-- Fonts -->

   

    <!-- Styles -->
    
    <link rel="stylesheet" href="{{asset('css/surveylist.css')}}">
    
</head>
@include('layouts.header')
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
             


                  
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
