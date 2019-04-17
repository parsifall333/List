@extends('layouts.app')

@section('content')
    <a href="/list/public/posts" class="btn btn-default"><b><big>Back</big></b></a>
    <h1 align="center"><br/>{{$post->title}}</h1>
    <div align="center"><br/>
        {{$post->body}}
    </div>
    <hr>
    <div align="center"><small>Written on {{$post->created_at}}</small></div>
    <hr>
    <a href="/list/public/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close() !!}
@endsection
