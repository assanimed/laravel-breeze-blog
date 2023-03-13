<?php

use App\Http\Controllers\PostController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('authors/{author:username}', function (User $author) {
    return view('author', [
        'posts' => $author->posts,
    ]);
});

Route::fallback(function () {
    return '<h1>Page Not FOUND</h1>';
});