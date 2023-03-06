<h1>Welcome to Home Page</h1>

<h2>{{ $name }}</h2>
<p> {{ url('/') }}</p>
<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat ad
    repudiandae qui maxime culpa voluptatum, temporibus aliquam repellat iure
    non. Maxime expedita reprehenderit tempora repudiandae dolore est, debitis
    quisquam! Nobis.
</p>

<form action="/test" method="POST">
    @method('PUT');
    @csrf
    <input type="text" name="username" />
    <button type="submit">submit</button>
</form>
