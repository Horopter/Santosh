<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class SlugController extends Controller
{
    public function getSingle($slug)
    {
    	$post = Post::where('slug','=',$slug)->first();
    	return view('slug.single')->withPost($post);
    }

    public function getIndex()
    {
    	$posts = Post:simplePaginate(10);
    	return view('slug.index')->withPosts($posts);
    }
}
