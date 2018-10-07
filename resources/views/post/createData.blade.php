@extends('layouts.app')
@section('content')
    <h6>Post data from create DAta file in post folder</h6>
    <h1>Create Post Data</h1>
    {!! Form::open(['action' => 'PostController@store','method'=>'POST'] ) !!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title','',['class' => 'form-control' ,'placeholder' => 'Title
        '])}}
    </div>
    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body','',['id' => 'article-ckeditor','class' => 'form-control' ,'placeholder' => 'Body
        '])}}
    </div>
    {{Form::submit('Save',['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection