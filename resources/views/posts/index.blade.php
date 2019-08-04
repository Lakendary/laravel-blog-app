@extends('layouts.app')

@section('content')
    <h3>Posts</h3>
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="well">
                <h3>{{$post->$title}}</h3>
            </div>
        @endforeach
    @else
        <p>No posts found</p>
    @endif
@endsection