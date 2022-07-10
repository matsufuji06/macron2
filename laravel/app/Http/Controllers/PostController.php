<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all()->sortByDesc('created_at');

        return view('posts.index', ['posts' => $posts]);
    }

    public function create() {
        return view('posts.create');
    }

    public function store(PostRequest $request, Post $post) {
        $post->food = $request->food;
        $post->image = $request->image;
        $post->carbo = $request->carbo;
        $post->fat = $request->fat;
        $post->protein = $request->protein;
        $post->calorie = $request->calorie;
        $post->weight = $request->weight;
        $post->user_id = $request->user()->id;
        $post->save();
        return redirect()->route('posts.index');

    }
}
