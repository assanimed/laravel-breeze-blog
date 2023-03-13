<?php

use App\Http\Controllers\PostController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('author/{author:username}', function (User $author) {
    return view('posts.index', [
        'posts' => $author->posts,
    ]);
});

Route::fallback(function () {
    return '<h1>Page Not FOUND</h1>';
});