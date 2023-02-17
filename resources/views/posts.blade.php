@extends('Layout')

@section('content')
    @foreach ($posts as $post)
        <article>
            <h1><a href="/post/{{ $post->slug }}"> {{ $post->title }}</a></h1>
            <span class="publish">Published: {{ $post->date }}</span>
            {{ $post->excerpt }}
        </article>
    @endforeach
@endsection
