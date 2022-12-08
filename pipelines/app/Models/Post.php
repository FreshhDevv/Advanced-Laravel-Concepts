<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public static function allPosts()
    {
        return
            $posts = app(Pipeline::class)->send(Post::query())->through([
                \App\QueryFilters\Active::class,
                \App\QueryFilters\Sort::class,
            ])->thenReturn()->get();
    }
}
