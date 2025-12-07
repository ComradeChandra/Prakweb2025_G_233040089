<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // bikin 1 user manual buat login nanti
        User::factory()->create([
            'name' => 'Chandra Admin',
            'username' => 'chandra',
            'email' => 'chandra@example.com',
            'password' => bcrypt('password'), // password defaultnya 'password'
        ]);

        // sisa 4 user lainnya dibikin acak aja pake factory
        User::factory(4)->create();

        // bikin 2 kategori bebas, misal web sama personal
        $cat1 = Category::factory()->create(['name' => 'Web Programming', 'slug' => 'web-programming']);
        $cat2 = Category::factory()->create(['name' => 'Personal', 'slug' => 'personal']);

        // bikin 10 data dummy buat postingan
        // user sama kategorinya ngambil acak dari yang udah dibuat diatas (recycle)
        Post::factory(10)->recycle([
            User::all(),
            $cat1, 
            $cat2
        ])->create();
    }
}