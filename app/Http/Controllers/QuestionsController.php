<?php

namespace App\Http\Controllers;

use App\Http\Requests\AskQuestionRequest;
use App\Question;
use Illuminate\Http\Request;
use App\User;
use App\Policies\QuestionPolicy;
class QuestionsController extends Controller
{
    public function __construct(){
        $this->middleware('auth',['except'=>'index','show']);
    }

    public function index()
    {
        $questions=Question::with('user')->orderByDesc('created_at')->paginate(5);

    return view('questions.index',array('questions'=>$questions));


    }


    public function create()
    {


        return view('questions.create');
    }


    public function store(AskQuestionRequest $request)
    {   $request->user()->questions()->create($request->only('title','body'));
        return redirect()->route('questions.index')->with('success','Your question has been submited');
    }


    public function show(Question $question)
    {
        $question->increment('views');

        return view('questions.show',array('question'=>$question));
    }


    public function edit(Question $question)
    {
      $this->authorize("update",$question);
        return view('questions.edit', array('question' => $question));

    }


    public function update(AskQuestionRequest $request, Question $question)
    {   $this->authorize("update",$question);
        $question->update($request->only('title','body'));
        return redirect()->route('questions.index')->with('success',"Question Updated");
    }


    public function destroy(Question $question)
    {


        $this->authorize('delete',$question);
        $question->delete();

        return redirect()->back()->with('success','Question deleted!');

    }
}
