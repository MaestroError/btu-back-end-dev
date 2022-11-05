@extends("layout")

@section("body")
    <div>
        <h1>{{$post->title}}</h1>
        <p>{{$post->body}}</p>
        <small>{{$post->views}}</small>
    </div>
@endsection