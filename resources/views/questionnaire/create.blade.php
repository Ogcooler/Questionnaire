<html>
<head>
    <link rel="stylesheet" href="{{asset('css/create-questionnaire.css')}}">
</head>

<body>
    @include('layouts.header')
    <div class="page-title">Create new page</div>

    <section class="form-container">
        <form action="/questionnaires" method="post">
            @csrf

            <div class="form-group">
                <label for="title-input" class="title-label">Название опроса</label>
                <input name="title" type="text" id="title-input" placeholder="Введите название опроса"
                aria-describedby="titleHelp" class="title-input"/>
                

                @error('title')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="title-purpose" class="purpose-label">Описание опроса</label>
                <input name="purpose" type="tet" id="purpose-input" placeholder="Укажите цель опроса"
                aria-describedby="purposeHelp" class="purpose-input"/>
               

                @error('purpose')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="btn-wrapper">
                <button type="submit" class="btn-questionnaire">Создать</button>
            </div>
        </form>
    </section>
</body>
</html>