<?php


use App\Models\Service;
use Illuminate\Support\Facades\Route;

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

Route::get('/id/layanan', function () {
    $services = Service::where('is_published', true)
        ->orderBy('sort_order')
        ->get();

    return view('services.index', [
        'services' => $services,
        'locale' => 'id',
    ]);
})->name('services.id');

Route::get('/en/services', function () {
    $services = Service::where('is_published', true)
        ->orderBy('sort_order')
        ->get();

    return view('services.index', [
        'services' => $services,
        'locale' => 'en',
    ]);
})->name('services.en');

Route::view('/id/tim', 'pages.placeholder', [
    'locale' => 'id',
    'pageTitle' => 'Tim Kami',
])->name('team.id');

Route::view('/en/team', 'pages.placeholder', [
    'locale' => 'en',
    'pageTitle' => 'Our Team',
])->name('team.en');

Route::view('/id/portofolio', 'pages.placeholder', [
    'locale' => 'id',
    'pageTitle' => 'Portofolio',
])->name('portfolio.id');

Route::view('/en/portfolio', 'pages.placeholder', [
    'locale' => 'en',
    'pageTitle' => 'Portfolio',
])->name('portfolio.en');

Route::view('/id/artikel', 'pages.placeholder', [
    'locale' => 'id',
    'pageTitle' => 'Artikel',
])->name('articles.id');

Route::view('/en/articles', 'pages.placeholder', [
    'locale' => 'en',
    'pageTitle' => 'Articles',
])->name('articles.en');