@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    <br>
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card">
                <div class="card-body">
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <p>Excerpt comes here!</p>
                    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    <br>
                    <a href="/posts/{{$post->id}}" class="btn btn-primary">View Post</a>
                </div>
            </div>
        @endforeach
    @else
        <p>No posts found</p>
    @endif
@endsection