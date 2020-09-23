@extends('layouts.app')
<link rel="stylesheet" href="{{asset('css/login.css')}}">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="email-label">{{ __('E-Mail Address') }}</label>

                        
                                <input id="email" type="email" class="email-input @error('email') is-invalid @enderror" 
                                name="email" value="{{ old('email') }}" placeholder="Логин" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            <label for="password" class="password-label">{{ __('Password') }}</label>

                            
                                <input id="password" type="password" class="password-input @error('password') is-invalid @enderror" 
                                paceholder="Пароль" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            
                                <div class="remember-group">
                                    <input class="remember-pass-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="remember-pass-label" for="remember">
                                        Запомнить пароль
                                    </label>
                                
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                          
                                <button type="submit" class="login-btn">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="forgot-password" href="{{ route('password.request') }}">
                                        Забыли пароль?
                                    </a>
                                @endif
                            
                        </div>
                    </form>
                </div>
    </div>
</div>
@endsection
