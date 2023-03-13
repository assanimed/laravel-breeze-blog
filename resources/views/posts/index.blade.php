<x-layout title="all posts">



    @include('posts.__post-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if ($posts->count())
            <x-posts-grid :posts="$posts" />
        @else
            <p class=" text-center text-2xl text-bold text-indigo-500"> 😶 No Posts, Please Check Later.</p>
        @endif

    </main>

</x-layout>
