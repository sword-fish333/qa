<?php

namespace App\Http\Controllers;

use App\Http\Requests\AskQuestionRequest;
use App\Question;
use Illuminate\Http\Request;
use App\User;

class QuestionsController extends Controller
{

    public function index()
    {
        $questions=Question::with('user')->orderByDesc('created_at')->paginate(5);

    return view('questions.index',array('questions'=>$questions));


    }


    public function create()
    {
        $question=new Question();

        return view('questions.create');
    }


    public function store(AskQuestionRequest $request)
    {   $request->user()->questions()->create($request->only('title','body'));
        return redirect()->route('questions.index')->with('success','Your question has been submited');
    }


    public function show(Question $question)
    {
        //
    }


    public function edit(Question $question)
    {
        return view('questions.edit',array('question'=>$question));
    }


    public function update(AskQuestionRequest $request, Question $question)
    {
        $question->update($request->only('title','body'));
        return redirect()->route('questions.index')->with('success',"Question Updated");
    }


    public function destroy(Question $question)
    {
        //
    }
}
