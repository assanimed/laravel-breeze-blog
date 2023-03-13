<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\WelcomeController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/post/{post:slug}', [PostController::class, 'show']);

/* Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts,
        'categories' => Category::all(),
        'currentCategory' => $category,
    ]);
}); */

Route::get('authors/{author:username}', function (User $author) {
    return view('author', [
        'posts' => $author->posts,
    ]);
});

Route::fallback(function () {
    return '<h1>Page Not FOUND</h1>';
});