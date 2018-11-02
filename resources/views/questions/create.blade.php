@extends('layouts.app')

@section('content')

    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-12 mb-5" >
            <div class="card">
                <div class="card-header" >
                    <div class="d-flex align-items-center">
                    <h2 id="questions_main_title" >Ask a question</h2>
                    <div class="ml-auto"><a class="btn btn-outline-secondary btn-lg" href="{{route('questions.index')}}">Back to all Questions</a></div>
                    </div>
                    </div>

                <div class="card-body">

                <form action="{{route('questions.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" name="title"  value="{{old('title')}}"
                               class="form-control {{$errors->has('title') ? 'is-invalid': ''}}" id="title">
                        @if($errors->has('title'))
                        <div class="invalid-feedback">
                            <strong>{{$errors->first('title')}}</strong>
                        </div>
                            @endif
                    </div>

                    <div class="form-group">
                        <label for="body">Describe your question:</label>
                        <textarea name="body" id="" cols="30"
                        rows="10" class="form-control {{$errors->has('body') ? 'is-invalid': ''}}">
                            {{old('body')}}
                        </textarea>
                        @if($errors->has('body'))
                            <div class="invalid-feedback">
                                <strong>{{$errors->first('body')}}</strong>
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-outline-primary btn-block btn-success btn-lg" value="Submit Question">
                    </div>
                </form>
            </div>
            </div>
            </div>
        </div>
    </div>
  @endsection