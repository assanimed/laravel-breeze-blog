<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title> {{ $post->title }}</title>
</head>

<body>
    <section>
        <article>
            <h1> {{ $post->title }} </h1>
            <span>Published: {{ $post->date }} </span>
            {!! $post->body !!}
        </article>
        <a href="/" class="go-home">Go Home</a>
    </section>
</body>

</html>
