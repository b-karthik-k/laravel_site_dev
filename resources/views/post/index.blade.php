@extends('layouts.app')
@section('content')
    <h1>Post data from index file in post folder</h1>
    @if (count($allDatas) > 0)
            @foreach ($allDatas as $item)
                <div class="well">
                    <h3><a href="/post/{{$item->id}}">{{$item->title}}</a></h3>
                    <small>body data: {{$item->body}}</small>
                    <br>
                    <strong>With html parsed</strong>
                    <small>body data: {!!$item->body!!}</small>                
                </div>
            @endforeach
            {{-- links are supplied form controller --}}
        {{-- {{$allDatas->links()}}  --}}
        {{-- collection->links() is used for pagination  --}}
    @else
        <p>No data in table sorry!!!!</p>
    @endif
@endsection