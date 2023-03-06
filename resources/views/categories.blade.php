<x-layout title="text">
    <h1> Category: {{ $category->name }}</h1>
    @foreach ($posts as $post)
        <article>
            <h1><a href="/post/{{ $post->slug }}"> {!! $post->title !!}</a></h1>
            <p>by <a href="/users/{{ $post->author->username }}"> {{ $post->author->name }} </a> in <a
                    href="/categories/{{ $post->category->slug }}" class="category">
                    {{ $post->category->name }}</a> </p>
            <span class="publish">Published: {{ $post->published_at }}</span>
            <p> {{ $post->excerpt }} </p>
        </article>
    @endforeach
    <x-link href="/"> Go Home </x-link>
</x-layout>
