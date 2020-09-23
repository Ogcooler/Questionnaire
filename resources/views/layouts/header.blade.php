<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
</head>

<div class="header">
    <nav>
        <ul class="nav-list">
        @if(!Auth::check())
            <li>
                <a class="nav-link"  href="/register">Регистрация</a>
            </li>

            <li>
                <a class="nav-link"  href="/login">Авторизация</a>
            </li>
        @endif
            @if(Auth::check())
            <li class="profile-links">
                <a class="nav-link"   href="/login">{{ Auth::user()->name }}</a> 
            </li>
            
            <li class="logout-link">
                <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Выход') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            @endif
        </ul>
    </nav>
</div>