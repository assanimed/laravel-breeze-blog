<x-layout title="Author Posts">




    @foreach ($posts as $post)
        <article>
            <h1><a href="/post/{{ $post->slug }}"> {!! $post->title !!}</a></h1>
            <p>By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> <a
                    href="/categories/{{ $post->category->slug }}" class="category">
                    {{ $post->category->name }}</a> </p>
            <span class="publish">Published: {{ $post->published_at }}</span>
            <p> {{ $post->excerpt }} </p>
        </article>
    @endforeach
</x-layout>
