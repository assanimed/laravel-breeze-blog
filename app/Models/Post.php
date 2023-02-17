<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{
    
    
    public function __construct(
        public string $title,
        public string $body,
        public string $date,
        public string $slug,
        public string $excerpt
    )
    {}


    

    public static function findAll()
    {


        return cache()->rememberForever("posts.all", function(){
            return collect($files = File::allFiles(resource_path('posts')))
            ->map(fn($file) => YamlFrontMatter::parseFile($file))
            ->map(
                fn($document) => new Post(
                    $document->title,
                    $document->body(),
                    $document->date,
                    $document->slug,
                    $document->excerpt
                )
                )
            -> sortByDesc('date');
        });
    }

    public static function find(string $slug)
    {
        return Post::findAll()->firstWhere("slug", $slug);
    }
}