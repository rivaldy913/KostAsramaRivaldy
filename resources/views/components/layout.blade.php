<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Kost Rivaldy | {{ $title ?? 'Beranda' }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Tailwind --}}
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    <x-navbar/>

    <main class="container mx-auto p-4">
        {{ $slot }} {{-- Ini adalah tempat konten spesifik halaman masuk --}}
    </main>

    <footer class="bg-gray-800 text-white p-4 mt-8">
        <div class="text-center">&copy; {{ date('Y') }} Kost Rivaldy</div>
    </footer>

</body>
</html>