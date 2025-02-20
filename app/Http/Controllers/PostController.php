<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        return response()->json(Post::with('user')->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string'
        ]);

        $post = Auth::user()->posts()->create($request->all());
        return response()->json($post, 201);
    }

    public function show(Post $post)
    {
        return response()->json($post);
    }

    public function update(Request $request, Post $post)
    {
        if (Auth::id() !== $post->user_id) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $request->validate([
            'title' => 'string',
            'content' => 'string'
        ]);

        $post->update($request->all());
        return response()->json($post);
    }

    public function destroy(Post $post)
    {
        if (Auth::id() !== $post->user_id) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $post->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
