<script src="{{asset('js/survey-share.js')}}"></script>
@extends('layouts.app')

@section('content')


        <section class="questionnaire-list">
            <div class="card">
               

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="link_create-btn" href="/questionnaires/create">
                        <div class="create-btn">Создать опрос</div>
                    </a>

                    <div class="questionnaire-title">Мои опросы</div>

                    <ul class="list-group">
                        @foreach($questionnaires as $questionnaire)
                            <a class="survey-name" href="{{ $questionnaire->path() }}"><li class="list-item">{{ $questionnaire->title }}</a>
                            <div class="share-title">Копировать Ссылку</div>

                            <div class="share-group">
                                <button type="button" onclick="copy()" class="url-btn">Копировать URL</button>
                                <input class="share-input" value="{{ $questionnaire->publicPath()}}" /></li>
                            </div>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div id="copied" class="success-message">
                <div>Ссылка скопирована! ;)</div>
            </div>
        </section>
  
@endsection
