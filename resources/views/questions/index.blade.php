@extends('layouts.app')

@section('content')

    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-12 mb-5" >
            <div class="card">
                <div class="card-header" >
                    <div class="d-flex align-items-center">

                    <h2 id="questions_main_title" >All questions</h2>

                    <div class="ml-auto"><a class="btn btn-outline-primary btn-lg" href="{{route('questions.create')}}">Add a Question</a></div>
                    </div>
                    @include('layouts._messages')
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
                            <div class="media-body">
                                <div class="d-flex align-items-center">
                                <h3 class="media-heading col-md-8">
                                    <a class="question_title" href="{{$question->url}}">{{$question->title}}</a>
                                </h3>
                                <div class="ml-auto">
                                    @if(Auth::user())
                                        @if(Auth::user()->can('update',$question))
                                    <a href="{{route('questions.edit',$question->id)}}" class=" ml-5 btn btn-outline-info btn-lg">Edit</a>
                                        @endif
                                        @can('delete',$question)
                                        <form action="{{route('questions.destroy',$question->id)}}" method="post" class="mt-3 ml-3 form-delete">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" onclick=" if(!

                                        confirm('Are you sure you want to delete this question?')){
                                            event.preventDefault();
                                        }
                                            "
                                                class="btn btn-outline-danger btn-delete btn-lg ">Delete</button>
                                    </form>
                                            @endcan
                                        @endif
                                </div>
                            </div>
                                    <p class="lead">Asked by <a href="{{$question->user->url}}">{{$question->user->name}}</a>
                                    <small class="muted">{{$question->created_date}}</small>
                                    </p>

                                    <p class="question_body col-md-10">{{str_limit($question->body,250)}}</p>
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