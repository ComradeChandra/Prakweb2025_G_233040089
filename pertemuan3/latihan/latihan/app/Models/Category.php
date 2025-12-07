<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Kunci ID supaya gak bisa diisi manual/massal.
    protected $guarded = ['id'];

    // relasi: satu kategori punya banyak post
    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id');
    }
}