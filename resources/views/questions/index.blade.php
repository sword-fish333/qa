@extends('layouts.app')

@section('content')

    <div class="container ">
        <div class="row">
            <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    <h2 id="questions_main_title">All questions</h2>
                </div>

                <div class="card-body">
                    @foreach($questions as $question)
                        <div class="media">
                            <div class="media-body">
                                <h4 class="media-heading question_title">
                                    {{$question->title}}
                                </h4>
                                    <p class="question_body">{{str_limit($question->body,250)}}</p>
                                <hr>
                            </div>

                        </div>

                        @endforeach
                </div>
                <div >
                {{$questions->links()}}
                </div>
            </div>
            </div>
        </div>
    </div>
    @endsection