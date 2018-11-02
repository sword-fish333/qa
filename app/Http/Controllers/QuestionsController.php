<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{

    public function index()
    {
        $questions=Question::with('user')->first()->paginate(1);

    return view('questions.index',array('questions'=>$questions));


    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Question $question)
    {
        //
    }


    public function edit(Question $question)
    {
        //
    }


    public function update(Request $request, Question $question)
    {
        //
    }


    public function destroy(Question $question)
    {
        //
    }
}
