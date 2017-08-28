@extends('layouts.app')

@section('content')
  
        <a href="/posts"><button class="btn btn-primary">Back</button></a>

        <div class="well">
            <h3>{{$post->title}}</h3>
            <p>{{$post->body}}</p>
            <small>{{$post->created_at}}</small>
        </div>

  
@endsection