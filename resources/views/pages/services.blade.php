@extends('layouts.app')
@section('content')
        <h1>
        Welcome Karthik  to service page
        {{$title}}
        </h1>
        <p>This is the index page  from page folder </p>
        @if(count($web)>0)
        <ul>
        @foreach($web as $webs)
        <li>{{$webs}}</li>
        @endforeach
        </ul>  
        @endif
@endsection
