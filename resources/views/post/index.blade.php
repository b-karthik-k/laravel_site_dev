@extends('layouts.app')
@section('content')
    <h1>Post data from index file in post folder</h1>
    @if (count($allDatas) > 0)
            @foreach ($allDatas as $item)
            <div class="all_data">
                <div class="well">
                    <h3><a href="/post/{{$item->id}}">{{$item->title}}</a></h3>
                    <span class="right" style="float:right"> 
                        <a href="/post/{{$item->id}}/edit" class="btn btn-primary btn-lg"> Edit Post</a>
                        {!!Form::open(['action' => ['PostController@destroy',$item->id] , 'method'=> 'POST','class' => "pul-right", 'style' => 'float:right'])!!}
                        {{Form::hidden('_method','DELETE')}}
                        {{Form::submit('Delete', ['class'=> 'btn btn-danger btn-lg'])}}
                        {!!Form::close()!!}
                    </span>
                    <small>body data: {{$item->body}}</small>
                    <br>
                    <strong>With html parsed</strong>
                    <small>body data: {!!$item->body!!}</small>                
                </div>                
            </div>
            @endforeach
            {{-- links are supplied form controller file --}}
        {{-- {{$allDatas->links()}}  --}}
        {{-- collection->links() is used for pagination  --}}
    @else
        <p>No data in table sorry!!!!</p>
    @endif
@endsection