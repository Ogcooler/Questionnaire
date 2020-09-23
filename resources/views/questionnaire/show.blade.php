<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/questionnaire.css')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>

        <script src="{{asset('js/percent-counter.js')}}"></script>
    </head>
    <body>
    @include('layouts.header')
    <div class="Page-title"> {{$questionnaire->title}} </div>
    <div class="questions-wrapper">
        <div class="questions">
            <div class="menu-question">
                <a href="/questionnaires/{{ $questionnaire->id }}/questions/create"><div class="add-question">Добавить вопрос</div></a>
                <a class="take-survey" href="/surveys/{{ $questionnaire->id }}-{{ Str::slug($questionnaire->title, '-')}}"><div class="take-a-survey">Пройти опрос</div></a>
            </div>
            @foreach($questionnaire->questions as $question)
                <div class="question-block">
                    <div class="form-group">
                        <div class="question">{{$question->question}}</div>
                    </div>

                    <ul class="answer-list">
                        <li class="list-stata">
                            @foreach($question->answers as $answer)
                                <div class="answers">{{ $answer->answer }}</div>
                                @if( $question->responses->count() )
                                    <div class="count"><div class="digits" id="digit">{{ intval(($answer->responses->count() * 100) / $question->responses->count())  }}</div>%</div>
                                @else
                                    <div class="count"><div class="digits" id="digit">0</div>%</div>
                                @endif
                            @endforeach
                        </li>
                    </ul>
                    <form action="/questionnaires/{{ $questionnaire->id }}/questions/{{$question->id}}" method="post">
                        @method('DELETE')
                        @csrf
                    <button type="submit" class="sub-btn">Удалить</button>
                    </form>
                </div>
            
            @endforeach
        </div>
    </div>  
    </body>
</html>
        