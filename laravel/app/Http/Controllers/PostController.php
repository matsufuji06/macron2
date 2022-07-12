<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use App\Http\Requests\PostRequest;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // ポリシーとの連携
    public function __construct()
    {
        $this->authorizeResource(Post::class, 'post');
    }

    public function index()
    {
        $posts = Post::all()->sortByDesc('created_at');

        return view('posts.index', ['posts' => $posts]);
    }

    public function create() {
        return view('posts.create');
    }

    public function store(PostRequest $request, Post $post) {
        // 記事の保存処理
        $post->food = $request->food;
        $post->image = $request->image;
        $post->carbo = $request->carbo;
        $post->fat = $request->fat;
        $post->protein = $request->protein;
        $post->calorie = $request->calorie;
        $post->weight = $request->weight;
        // $post->fill($request->all()); 
        $post->user_id = $request->user()->id;
        $post->save();
        
        // タグの保存処理
        $request->tags->each(function($tagName) use ($post){
            $tag = Tag::firstOrCreate(['name' => $tagName]);
            $post->tags()->attach($tag);
        });
        
        return redirect()->route('posts.index');


    }

    public function edit(Post $post) {
        return view('posts.edit', ['post' => $post]);

    }

    public function update(PostRequest $request, Post $post) {
        $post->food = $request->food;
        $post->image = $request->image;
        $post->carbo = $request->carbo;
        $post->fat = $request->fat;
        $post->protein = $request->protein;
        $post->calorie = $request->calorie;
        $post->weight = $request->weight;
        // $post->fill($request->all())->save(); 
        $post->save();
        return redirect()->route('posts.index');
    }

    public function destroy(Post $post) {
        $post->delete();
        return redirect()->route('posts.index');

    }

    public function show(Post $post) {
        return view('posts.show', ['post' => $post]);
    }

    public function like(Request $request, Post $post)
    {
        $post->likes()->detach($request->user()->id);
        $post->likes()->attach($request->user()->id);

        return [
            'id' => $post->id,
            'countLikes' => $post->count_likes,
        ];
    }

    public function unlike(Request $request, Post $post)
    {
        $post->likes()->detach($request->user()->id);

        return [
            'id' => $post->id,
            'countLikes' => $post->count_likes,
        ];
    }

}
