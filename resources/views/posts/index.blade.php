@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 1)
        @foreach ($posts as $post)
            <div class="card">
                <div class="card-body">
                    <h3>{{$post->title}}</h3>
                    <p>Excerpt comes here!</p>
                    <small>Written on {{$post->created_at}}</small>
                    <a href="#" class="btn btn-primary">View Post</a>
                </div>
            </div>
        @endforeach
    @else
        <p>No posts found</p>
    @endif
@endsection