@extends('layouts\app')

@section('content')
    <a href="/posts" class="btn btn-outline-secondary mt-3">Go Back</a>
    <h1 class="pt-3">{{$post->title}}</h1>
    <div>
        {!! $post->body !!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
@endsection