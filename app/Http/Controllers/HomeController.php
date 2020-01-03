<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	$posts = Post::where('status', Post::IS_PUBLIC)->orderBy('id', 'desc')->paginate(3);

    	return view('pages.index', compact('posts'));
    }

    public function show($slug)
    {
    	$post = Post::where('slug', $slug)->firstOrFail();

    	return view('pages.show', compact('post'));
    }

    public function tag($slug)
    {
        $tag = Tag::where('slug', $slug)->firstOrFail();
        $posts = $tag->posts()->paginate(4); //->where('status', Post::IS_PUBLIC)

        return view('pages.list', compact('posts'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $posts = $category->posts()->where('status', Post::IS_PUBLIC)->paginate(4);

        return view('pages.list', compact('posts'));
    }
}
