@extends('layouts.app')

@section('content')
    <h1 align="center"><br/>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class ="well">
                <h3 align="center"><a href="/list/public/posts/{{$post->id}}"><br/>{{$post->title}}</a></h3>
            </div>
        @endforeach
    @else
        <p align=center><br/>No entries found</p>
    @endif
    <a href="/list/public/posts/create" class="btn btn-primary" align="center"><b><big>New Entry</big></b></a>
@endsection
