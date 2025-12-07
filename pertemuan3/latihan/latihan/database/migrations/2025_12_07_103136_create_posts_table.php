<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            
            // Relasi ke tabel users
            $table->foreignId('user_id')->constrained(
                table: 'users', indexName: 'posts_user_id'
            )->onDelete('cascade');
            
            // Relasi ke tabel categories
            $table->foreignId('category_id')->constrained(
                table: 'categories', indexName: 'posts_category_id'
            )->onDelete('cascade');

            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt');
            $table->text('body');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};