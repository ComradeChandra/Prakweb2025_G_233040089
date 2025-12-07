<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    public function definition(): array
    {
        // Bikin judul dulu biar bisa dijadiin slug
        $title = fake()->sentence(4);
        
        return [
            // Bikin user & kategori otomatis buat tiap postingan
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'title' => $title,
            'slug' => Str::slug($title),
            'excerpt' => fake()->paragraph(1), // Cuplikan pendek
            'body' => fake()->paragraph(5),    // Isi berita panjang
            'image' => null,
        ];
    }
}