<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <h3>Daftar Kategori</h3>

    <ul>
        @foreach ($categories as $category)
            <li>
                <h2>{{ $category->name }}</h2>
            </li>
        @endforeach
    </ul>

</x-layout>