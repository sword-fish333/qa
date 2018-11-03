@extends('layouts.app')

@section('content')

    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-12 mb-5" >
                <div class="card">
                    <div class="card-header" >
                        <div class="d-flex align-items-center">



                            <div class="ml-auto"><a class="btn btn-outline-info btn-lg" href="{{route('questions.index')}}">Back to all Questions</a></div>
                        </div>
                        @include('layouts._messages')
                    </div>

                    <div class="card-body">

                            <div class="media">
                                <div class="d-flex flex-column info_question">
                                    <div class="votes">
                                        <strong>{{$question->votes}}</strong>
                                        {{str_plural('vote',$question->votes)}}
                                    </div>
                                    <div class="answers status {{$question->status}}">
                                        <strong>{{$question->answers_count}}</strong>
                                        {{str_plural('answer',$question->answers_count)}}
                                    </div>
                                    <div class="views">
                                        {{$question->views." ".str_plural('view',$question->views)}}
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="d-flex align-items-center">
                                        <h3 class="media-heading">
                                            <a class="question_title" href="{{$question->url}}">{{$question->title}}</a>
                                        </h3>

                                    </div>
                                    <p class="lead">Asked by <a href="{{$question->user->url}}">{{$question->user->name}}</a>
                                        <small class="muted">{{$question->created_date}}</small>
                                    </p>

                                    <p class="question_body col-md-10">{!! $question->body_html !!}</p>
                                    <hr>
                                </div>

                            </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection