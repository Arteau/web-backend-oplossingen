@extends('layouts.app')

@section('content')

    <h3>posts</h3>
    
    @foreach($posts as $post)
        <div class="well">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <p>{{$post->body}}</p>
            <small>{{$post->created_at}}</small>
        </div>

    @endforeach

@endsection