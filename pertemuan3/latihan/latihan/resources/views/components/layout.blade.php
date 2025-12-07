<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Laravel</title>
    
    {{-- load css sama js bawaan --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- script buat flowbite --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.0.0/dist/flowbite.min.js"></script>
</head>
<body class="bg-gray-100 p-10 font-sans antialiased">
    
    {{-- kotak putih tengah --}}
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow">
        {{ $slot }}
    </div>

</body>
</html>