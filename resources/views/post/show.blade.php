@extends('layouts.app')
@section('content')
    {{-- {{$postData}} --}}
    <div class="post_data" style="padding: 25px;">
        <hr>
        <span>Id :{{$postData['id']}}</span><br>
        <hr>
        <span>Title :{{$postData['title']}}</span><br>
        <hr>
        <span>Body :{{$postData['body']}}</span><br>
        {{-- {{ double curly braces are for simple text if they are witten with html then it not parsed for that follow below steps }} --}}
        <hr>
        <span>Body :{!!$postData['body']!!}</span><br>
        {{-- {!! double !! braces are for html for parsing !!} --}}
        <hr>
        <span>Created At :{{$postData['created_at']}}</span><br>
        <hr>
        <span>Updated At :{{$postData['updated_at']}}</span><br>
        <hr>
        <a href="/post" class="btn btn-primary btn-lg" >Go Back</a>
    <a href="/post/{{$postData->id}}/edit" class="btn btn-primary btn-lg"> Edit Post</a>
    {!!Form::open(['action' => ['PostController@destroy',$postData->id] , 'method'=> 'POST','class' => "pul-right", 'style' => 'float:right'])!!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete', ['class'=> 'btn btn-danger btn-lg'])}}
    {!!Form::close()!!}
    </div>
@endsection