<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <h3 class="text-xl font-bold mb-4">Daftar Postingan</h3>

    @foreach ($posts as $post)
        <article class="mb-5 border-b border-gray-200 pb-5">
            <h2 class="text-2xl font-bold hover:text-blue-500">
                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            </h2>
            <div class="text-gray-500 text-sm mb-2">
                By <a href="#" class="text-blue-500">{{ $post->author->name }}</a> 
                in <a href="/categories" class="text-blue-500">{{ $post->category->name }}</a>
            </div>
            <p>{{ $post->excerpt }}</p>
            <a href="/posts/{{ $post->slug }}" class="text-blue-600 text-sm">Read more &raquo;</a>
        </article>
    @endforeach

    <div class="mt-4">
        {{ $posts->links() }}
    </div>

</x-layout>