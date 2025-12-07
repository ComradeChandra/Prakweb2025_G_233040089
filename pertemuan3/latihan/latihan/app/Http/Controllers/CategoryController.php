<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // ambil data kategori
        $categories = Category::all();

        // kirim ke view
        return view('categories', [
            'title' => 'Daftar Kategori',
            'categories' => $categories
        ]);
    }
}