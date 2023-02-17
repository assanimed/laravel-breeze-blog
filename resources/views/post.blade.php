@extends('Layout')

@section('content')
    <article>
        <h1> {{ $post->title }} </h1>
        <span>Published: {{ $post->date }} </span>
        {!! $post->body !!}
    </article>
    <a href="/" class="go-home">Go Home</a>
@endsection
