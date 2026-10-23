<?php


use App\Models\Service;
use Illuminate\Support\Facades\Route;

Route::get('/services', function () {
    $services = Service::where('is_published', true)
        ->orderBy('sort_order')
        ->get();

    return view('services.index', compact('services'));
})->name('services.index');

Route::redirect('/', '/id');

Route::get('/id', function () {
    return view('home', ['locale' => 'id']);
})->name('home.id');

Route::get('/en', function () {
    return view('home', ['locale' => 'en']);
})->name('home.en');

Route::get('/id/tentang', function () {
    return view('about', ['locale' => 'id']);
})->name('about.id');

Route::get('/en/about', function () {
    return view('about', ['locale' => 'en']);
})->name('about.en');