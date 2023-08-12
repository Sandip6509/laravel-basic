<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Validator;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index',compact('posts'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        Post::create([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        return response()->json(['success' => 'Post created successfully.']);
    }

    public function show($id)
    {
        $post = Post::find($id);

        return response()->json($post);
    }
}
