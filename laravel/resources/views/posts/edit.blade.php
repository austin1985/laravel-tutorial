@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title',$post->title,['class' => 'form-control', 'placeholder' => 'title'])}}
        </div>
        <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body',$post->body,['id'=>'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'body'])}}
        </div>
        <div class="form-group">
                {{Form::file('cover_image')}}
        </div>
        <div class="form-group">
            <div>
                <img style="width:50%" src="/storage/cover_images/{{$post->cover_image}}">
            <div>
        </div>
        <br>
        <br>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection