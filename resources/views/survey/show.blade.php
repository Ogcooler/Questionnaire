<head>
    <link rel="stylesheet" href="{{asset('css/take-a-survey.css')}}">
</head>

@include('layouts.header')

<form action="/surveys/{{ $questionnaire->id }}-{{Str::slug($questionnaire->title)}}" method="post">
    @csrf
    <div class="form-group">
        <div class="Page-title"> {{$questionnaire->title}} </div>
        <div class="questions">

        @foreach($questionnaire->questions as $key => $question)
            <div class="question">{{$key+1}}|{{$question->question}}</div>

            <ul class="survey-options">
                @foreach($question->answers as $answer)
                    <li>
                    @error('responses.'.$key.'.answer_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                        <label class="answer" for="answer{{ $answer->id }}">
                            <input class="answer-input"  type="radio" name="responses[{{$key}}][answer_id]" id="answer{{$answer->id}}" 
                            {{(old('responses.'.$key.'.answer_id') == $answer->id) ? 'checked' : ''}}
                            value="{{ $answer->id }}">
                            {{ $answer->answer }}
                            <span class="checkmark"></span>
                        </label>
                        <input type="hidden" name="responses[{{$key}}][question_id]"  value="{{ $question->id }}">
                    </li>
                @endforeach
            </ul>
        
        @endforeach

       
        <label for="name" class="your-name">Ваше имя</label>
    </div>
    <input name="survey[name]" type="text" class="text-input" placeholder="Имя">

    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror

    <label class="email">Email</label>
    <input name="survey[email]" type="email" class="text-input" placeholder="Введите email">

    @error('email')
        <small class="text-danger">{{ $message }}</small>
    @enderror


    <button type="submit" class="btn-questionnaire">Готово</button>
</div>
</form>

