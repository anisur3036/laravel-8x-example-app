<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

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

    public function edit(Post $post)
    {
        return view('posts.edit', [
            'post' => $post
        ]);
    }

    public function update(Request $request, Post $post)
    {
        $attribues = validator($request->all(), [
            'title' => ['required'],
            'body' => ['required']
        ])->validate();

        $attribues['user_id'] = 1;

        $post->update($attribues);

        return redirect()->route('post.show', $post->uuid);
    }

    public function delete(Post $post)
    {
        $post->delete();

        return redirect()->route('post.index');
    }
}

