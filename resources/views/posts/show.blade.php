@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <br>
    <small>Written on {{$post->created_at}}</small>
    <br>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
@endsection