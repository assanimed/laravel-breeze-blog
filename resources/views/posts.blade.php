<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/app.js" defer></script>
    <title>My Blog</title>
</head>

<body>
    <section>

        @foreach ($posts as $post)
            <article>
                <h1><a href="/post/{{ $post->slug }}"> {{ $post->title }}</a></h1>
                <span class="publish">Published: {{ $post->date }}</span>
                {{ $post->excerpt }}
            </article>
        @endforeach

    </section>
</body>

</html>
