<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // id gak boleh diotak-atik, sisanya gas
    protected $guarded = ['id'];
    
    // biar loadingnya cepet, tiap ambil post bawa sekalian data penulis sama kategorinya
    protected $with = ['author', 'category'];

    // relasi ke penulis (user)
    //namain 'author' biar keren, tapi tetep ngarah ke class User
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // relasi ke kategori
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}