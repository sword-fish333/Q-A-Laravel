@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <h3 class="card-header bg-dark text-white">All Questions</h3>

                <div class="card-body">
                   @foreach($questions as $question)
                   <div class="medi">
                        <div class="media-body">
                        <h3 class="mt-0"><a href="{{$question->url}}">{{$question->title}}</a></h3>
                        <p class="lead">Asked by  <a href="{{$question->user->url}}">{{$question->user->name}}</a>
                        <small class="text-muted">{{$question->created_date}}</small>
                        </p>
                        {{str_limit($question->body,250)}}
            </div>
        </div>
            <hr>
                @endforeach
                <div class="bg-dark pt-3 pb-1">
            {{$questions->links()}}
        </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
