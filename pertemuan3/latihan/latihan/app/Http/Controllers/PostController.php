<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // ambil data post, sekalian bawa data penulis (author) dan kategorinya
        // pake 'with' biar query database-nya nggak kebanyakan (solusi N+1 problem)
        // urutin dari yang terbaru, terus paginasi 5 per halaman
        $posts = Post::with(['author', 'category'])->latest()->paginate(5);

        return view('posts', [
            'title' => 'Blog Posts',
            'posts' => $posts
        ]);
    }

    public function show(Post $post)
    {
        // kalo cuma satu post, load-nya bisa belakangan
        $post->load(['author', 'category']);

        return view('post', [
            'title' => 'Single Post',
            'post' => $post
        ]);
    }
}