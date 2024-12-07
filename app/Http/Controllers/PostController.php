<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Menampilkan daftar semua post
    public function index()
    {
        $posts = Post::with(["author", "images"])->paginate(6);  // Ambil semua post
        return view('pages.blog', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        $post->load(['images', 'author']);
        return view("pages.single", compact("post"));
    }
}
