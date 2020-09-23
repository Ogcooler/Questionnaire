<html>
<head>
    <link rel="stylesheet" href="{{asset('css/create-question.css')}}">
</head>
<body>
@include('layouts.header')
    <div class="form-container">
        <form action="/questionnaires/{{ $questionnaire->id }}/questions" method="post">
            @csrf

            <div class="form-group">

                <label for="question" class="title-label">Введите вопрос</label>
                <input name="question[question]" type="text" value="{{ old('question.question') }}" id="question" 
                aria-describedby="questionHelp" placeholder="Введите вопрос" class="title-input"/>
                

                @error('question.question')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

            </div>

            <div class="form-group">

                    <label for="answer1" class="answer1-label">Первый ответ</label>
                    <input name="answers[][answer]" type="text" value="{{ old('answer.0.answer') }}"
                     id="answer1-input" aria-describedby="answer1Help" placeholder="Введите первый ответ" class="answer1-input"/>
                 

                    @error('answer.0.answer')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
              
            </div>

            <div class="form-group">
           
                <label for="answer2" class="answer2-label">Второй ответ</label>
                <input name="answers[][answer]" type="text" value="{{ old('answer.1.answer') }}"
                id="answer2-input" aria-describedby="answer2Help" placeholder="Введите второй ответ" class="answer2-input"/>
                   
                @error('answer.1.answer')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
              
            </div>
                 
                
             
            <div class="form-group">

                <label for="answer3" class="answer3-label">Третий ответ</label>
                <input name="answers[][answer]" type="text" value="{{ old('answer.2.answer') }}"
                id="answer3-input" aria-describedby="answer3Help" placeholder="Введите третий ответ" class="answer3-input"/>
                  

                @error('answer.2.answer')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
              
            </div>

                
               
            <div class="form-group">

                <label for="answer4" class="answer4-label">Четвертый ответ</label>
                <input name="answers[][answer]" type="text" value="{{ old('answer.3.answer') }}"
                id="answer4-input" aria-describedby="answer4Help" placeholder="Введите четвертый ответ" class="answer4-input"/>
                  

                @error('answer.3.answer')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                <button type="submit" class="btn-questionnaire">Добавить вопрос</button>
            </div>

            
        </form>
    </div>
</body>
</html>