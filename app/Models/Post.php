<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // protected $fillable = ['title', 'excerpt', 'body', 'published_at'];
    protected $with = ['author', 'category'];
    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        $search = $filters['search'] ?? false;
        $category = $filters['category'] ?? false;

        $query->when(
            $search,
            fn($query, $search) => $query
                ->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%')
        );

        $query->when(
            $category,
            fn($query, $category) => $query->whereHas(
                'category',
                fn($query) => $query->where('slug', $category)
            )
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}