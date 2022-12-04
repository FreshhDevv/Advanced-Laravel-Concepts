<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;

class PostController extends Controller
{
    public function index()
    {

        $pipeline = app(Pipeline::class)->send(Post::query())->through([
            \App\QueryFilters\Active::class,
        ])->thenReturn();

        dd($pipeline->get());

        if(request()->has('active')) {
            $posts->where('active', request('active'));
        }
        
        if(request()->has('sort')) {
            $posts->orderBy('title', request('sort'));
        }
        $posts = $posts->get();
        return view('post.index', compact('posts'));
    }
}
