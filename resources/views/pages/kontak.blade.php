<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>
    {{-- @vite('resources/css/app.css') --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<nav class="bg-blue-600 text-white">
    <div class="container mx-auto px-4 py-3 flex justify-between">
        <h1 class="font-bold text-xl">Company</h1>
        <ul class="flex gap-6">
            <li><a href="/" class="hover:text-gray-200">Beranda</a></li>
            <li><a href="/tentangKami" class="hover:text-gray-200">Tentang Kami</a></li>
            <li><a href="/bisnisKami" class="hover:text-gray-200">Bisnis Kami</a></li>
            <li><a href="/karir" class="hover:text-gray-200">Karir</a></li>
            <li><a href="/kontak" class="text-fuchsia-500 hover:text-gray-200">Kontak</a></li>
        </ul>
    </div>
</nav>

<section class="container mx-auto py-16">
    <h2 class="text-3xl font-bold mb-6">Kontak Kami</h2>

    <form class="bg-white p-6 rounded shadow max-w-lg">
        <div class="mb-4">
            <label class="block mb-1">Nama</label>
            <input type="text" class="w-full border rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label class="block mb-1">Email</label>
            <input type="email" class="w-full border rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label class="block mb-1">Pesan</label>
            <textarea class="w-full border rounded px-3 py-2"></textarea>
        </div>

        <button class="bg-blue-600 text-white px-4 py-2 rounded">
            Kirim
        </button>
    </form>
</section>

</body>
</html>