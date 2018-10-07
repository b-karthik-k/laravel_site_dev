@extends('layouts.app')
@section('content')
        <h1>
        Welcome Karthik 
        </h1>
        <div class="jumbotron text-center">
                        <span>{{$title}}</span>
                        <p>This is the index page  from page folder </p>
                <a href="/login" class="btn btn-primary btn-lg" role="login">Login</a>
                <a href="/createuser" class="btn btn-success btn-lg" role="createuser">Createuser</a>
                
        </div>
@endsection