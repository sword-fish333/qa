@extends('layouts.app')

@section('content')

    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-12 mb-5" >
            <div class="card">
                <div class="card-header" >
                    <h2 id="questions_main_title" >All questions</h2>
                </div>

                <div class="card-body">
                    @foreach($questions as $question)
                        <div class="media">
                            <div class="d-flex flex-column info_question">
                                <div class="votes">
                                    <strong>{{$question->votes}}</strong>
                                    {{str_plural('vote',$question->votes)}}
                                </div>
                                <div class="answers status {{$question->status}}">
                                    <strong>{{$question->answers}}</strong>
                                    {{str_plural('answer',$question->answers)}}
                                </div>
                                <div class="views">
                                   {{$question->views." ".str_plural('view',$question->views)}}
                                </div>
                            </div>
                            <div class="media-body mt-5">
                                <h4 class="media-heading question_title">
                                    <a href="{{$question->url}}">{{$question->title}}</a>
                                </h4>
                                    <p class="lead">Asked by <a href="{{$question->user->url}}">{{$question->user->name}}</a>
                                    <small class="muted">{{$question->created_date}}</small>
                                    </p>

                                    <p class="question_body">{{str_limit($question->body,250)}}</p>
                                <hr>
                            </div>

                        </div>

                        @endforeach
                </div>
                <div>
                {{$questions->links()}}
                </div>
            </div>
            </div>
        </div>
    </div>
    @endsection