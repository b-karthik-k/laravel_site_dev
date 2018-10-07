@extends('layouts.app')
@section('content')
    <h6>Post data from Edit DAta file in post folder</h6>
    <h1>Edit Post Data</h1>
    {!! Form::open(['id'=> 'edit_post_form','action' => ['PostController@update',$postData->id],'method'=>'POST'] ) !!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',$postData->title,['class' => 'form-control' ,'placeholder' => 'Title
        '])}}
    </div>
    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body',$postData->body,['id' => 'article-ckeditor','class' => 'form-control' ,'placeholder' => 'Body
        '])}}
    </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Update',['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection