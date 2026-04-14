<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- @vite('resources/css/app.css') --}}
</head>
<body class="bg-gray-100">

<!-- Navbar -->
<nav class="bg-blue-600 text-white">
    <div class="container mx-auto px-4 py-3 flex justify-between">
        <h1 class="font-bold text-xl">Company</h1>
        <ul class="flex gap-6">
            <li><a href="/" class="text-fuchsia-500 hover:text-gray-200">Beranda</a></li>
            <li><a href="/tentangKami" class="hover:text-gray-200">Tentang Kami</a></li>
            <li><a href="/bisnisKami" class="hover:text-gray-200">Bisnis Kami</a></li>
            <li><a href="/karir" class="hover:text-gray-200">Karir</a></li>
            <li><a href="/kontak" class="hover:text-gray-200">Kontak</a></li>
        </ul>
    </div>
</nav>

<section class="container mx-auto py-16 text-center">
    <h2 class="text-4xl font-bold mb-4">Selamat Datang</h2>
    <p class="text-gray-600">Ini adalah halaman beranda website perusahaan.</p>
</section>

</body>
</html>