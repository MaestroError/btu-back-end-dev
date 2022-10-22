<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::where("status", "active")->get();
        return view("posts.index", ["items" => $posts]);
    }

    public function post(Post $post) {
        return view('posts.item', ["post" => $post]);
    }
}
