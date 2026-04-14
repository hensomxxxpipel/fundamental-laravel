<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/tentangKami', function () {
    $biodata = [
        'nama' => 'Rachmat Adriansyah',
        'umur' => '22',
        'alamat' => 'Indonesia'
    ];
    return view('pages.tentangKami', $biodata);
    // Bisa begini juga
    // return view('pages.tentangKami', [
    //     'nama' => 'Rachmat Adriansyah',
    //     'umur' => '22',
    //     'alamat' => 'Indonesia'
    // ]);
});

Route::get('/bisnisKami', function () {
    return view('pages.bisnisKami');
});

Route::get('/karir', function () {
    return view('pages.karir');
});

Route::get('/kontak', function () {
    return view('pages.kontak');
});