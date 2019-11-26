<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $posts = Post::all();
        return view('feeds', compact('posts'));
    }

    public function create()
    {
        return view('posts.created');
    }

    public function store(Request $request)
    {
        $post = Post::create([
          'user_id' => auth()->id(),
          'body' => request('body')
        ]);

        return redirect('/posts');
    }

    public function show(Post $post)
    {
        //
    }

    public function edit(Post   $post)
    {
        $post = Post::findOrFail($id);
        return view('feeds', compact('post   '));
    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy($id)
    {
        Post::findOrFail($id)->delete();
        return redirect('/posts');
    }
}
