<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function list() {
        $posts = Post::all();
        return view('posts.list', ["posts" => $posts]);
    }   
    public function post($id) {
        $post = Post::find($id);
        $post->views = $post->views + 1;
        $post->save();
        return view('posts.post', ["post" => $post]);
    }    
    public function createOrUpdated(Post $post, Request $request) {
        if ($request->input("title")) {
            $post->fill($request->all())->save();
            return redirect()->route('posts.list');
        }
        return view('posts.edit', ["post" => $post]);
    }
    public function delete(Post $post) {
        $post->delete();
        return redirect()->route('posts.list');
    }
}
