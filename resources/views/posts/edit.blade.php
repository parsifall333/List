@extends('layouts.app')

@section('content')
    <h1 align="center"><br/>Edit entry</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}

        <div class="form-group">
            {{Form::label('title', 'Activity')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' =>'Activity'])}}
        </div>

        <div class="form-group">
                {{Form::label('body', 'Notes')}}
                {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' =>'Notes'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        <a href="/list/public/posts" class="btn btn-default" align="center"><b><big>Back</big></b></a>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
