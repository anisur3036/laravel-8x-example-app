<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->paginate(3)
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->authorize('create', Post::class);

        $attributes = validator($request->all(), [
            'title' => ['required'],
            'body' => ['required']
        ])->validate();

        $attributes['user_id'] = $request->user()->id;

        Post::create($attributes);

        return redirect()->route('post.index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', [
            'post' => $post
        ]);
    }

    public function update(Request $request, Post $post)
    {
        $this->authorize('update', $post);

        $attributes = validator($request->all(), [
            'title' => ['required'],
            'body' => ['required']
        ])->validate();

        $attributes['user_id'] = 1;

        $post->update($attributes);

        return redirect()->route('post.show', $post->uuid);
    }

    public function delete(Post $post)
    {
        $post->delete();

        return redirect()->route('post.index');
    }
}

