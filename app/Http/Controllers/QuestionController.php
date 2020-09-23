<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Questionnaire;

class QuestionController extends Controller
{
    public function create(\App\Questionnaire $questionnaire){
        return view('question.create', compact('questionnaire'));   
    }

    public function store(\App\Questionnaire $questionnaire){
        
        $data = request()->validate([
            'question.question' => 'required',
            'answers.*.answer' => 'required',
        ]);

        $question = $questionnaire->questions()->create($data['question']);
        $question->answers()->createMany($data['answers']);

        return redirect()->back();
    }

    public function destroy(\App\Questionnaire $questionnaire, \App\Question $question)
    {
        $question->answers()->delete();
        $question->delete();

        return redirect($questionnaire->path());
    }
}
