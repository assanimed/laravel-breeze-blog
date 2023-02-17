<x-layout>
    <article>
        <h1> {{ $post->title }} </h1>
        <h3>Published: {{ $post->published_at }} </h3>
        {!! $post->body !!}
    </article>
    <x-link href="/"> Go Home </x-link>
</x-layout>
