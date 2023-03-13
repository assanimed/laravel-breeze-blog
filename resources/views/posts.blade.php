<x-layout title="all posts">

    {{-- @dd($currentCategory) --}}


    @include('__post-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if ($posts->count())
            <x-posts-grid :posts="$posts" />
        @else
            <p class=" text-center text-2xl text-bold text-indigo-500"> 😶 No Posts, Please Check Later.</p>
        @endif

        {{-- <div class="lg:grid lg:grid-cols-2">
            <x-post-card />
            <x-post-card />
        </div>

        <div class="lg:grid lg:grid-cols-3">
            <x-post-card />
            <x-post-card />
            <x-post-card />
        </div> --}}
    </main>


    {{-- @foreach ($posts as $post)
        <article>
            <h1><a href="/post/{{ $post->slug }}"> {!! $post->title !!}</a></h1>
            <p>By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a
                    href="/categories/{{ $post->category->slug }}" class="category">
                    {{ $post->category->name }}</a> </p>
            <span class="publish">Published: {{ $post->published_at }}</span>
            <p> {{ $post->excerpt }} </p>
        </article>
    @endforeach --}}
</x-layout>
