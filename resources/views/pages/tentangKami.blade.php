<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    {{-- @vite('resources/css/app.css') --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<nav class="bg-blue-600 text-white">
    <div class="container mx-auto px-4 py-3 flex justify-between">
        <h1 class="font-bold text-xl">Company</h1>
        <ul class="flex gap-6">
            <li><a href="/" class="hover:text-gray-200">Beranda</a></li>
            <li><a href="/tentangKami" class="text-fuchsia-500 hover:text-gray-200">Tentang Kami</a></li>
            <li><a href="/bisnisKami" class="hover:text-gray-200">Bisnis Kami</a></li>
            <li><a href="/karir" class="hover:text-gray-200">Karir</a></li>
            <li><a href="/kontak" class="hover:text-gray-200">Kontak</a></li>
        </ul>
    </div>
</nav>

<section class="container mx-auto py-16">
    <h2 class="text-3xl font-bold mb-4">Tentang Kami</h2>
    <p class="text-gray-600 leading-relaxed">
        Kami adalah perusahaan yang bergerak di bidang teknologi dan inovasi.
        Fokus kami adalah memberikan solusi digital terbaik.
    </p>
</section>

<section class="container mx-auto py-16 flex justify-center">
    <div class="max-w-md w-full bg-white shadow-lg rounded-xl p-6">
        <h3 class="text-xl font-bold mb-4 text-center">Biodata</h3>

        <div class="space-y-2">
            <p><span class="font-semibold">Nama:</span> {{ $nama }}</p>
            <p><span class="font-semibold">Umur:</span> {{ $umur }} Tahun</p>
            <p><span class="font-semibold">Alamat:</span> {{ $alamat }}</p>
        </div>
    </div>
</section>

</body>
</html>