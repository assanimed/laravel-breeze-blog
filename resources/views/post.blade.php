<x-layout title="{{ $post->title }}">
    <article>
        <h1> {!! $post->title !!} </h1>
        <p>by <a href="/authors/{{ $post->author->username }}"> {{ $post->author->username }} </a> in <a
                href="/categories/{{ $post->category->slug }}" class="category">
                {{ $post->category->name }}</a>
        </p>
        <h3>Published: {{ $post->published_at }} </h3>
        {!! $post->body !!}
    </article>
    <x-link href="/"> Go Home </x-link>
</x-layout>
