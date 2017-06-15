<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\PostRequest;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        $post = new Post();

        return view('posts.create', compact('post'));
    }

    public function store(PostRequest $request)
    {
        Post::create($request->all());

        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(PostRequest $request, Post $post)
    {
        $post->update($request->all());

        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }
}
