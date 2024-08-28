<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact', ['name' => 'ujang', 'phone' => '081802026413']);
});
// Route::view('/contact', 'contact', ['name' => 'ujang', 'phone' => '081802026412']);

// Route::redirect('/contact', 'contact-us');

Route::get('/product', function () {
    return 'product';
});

Route::get('/product/{id}', function ($id) {
    return view('product.detail', ['id' => $id]);
});



Route::prefix('administrator')->group(function () {
    Route::get('/profil-admin', function () {
        return 'profil admin';
    });

    Route::get('/about-admin', function () {
        return 'about admin';
    });

    Route::get('/contact-admin', function () {
        return 'contact admin';
    });

    Route::get('/profil-admin2', function () {
        return 'profil admin';
    });

    Route::get('/about-admin2', function () {
        return 'about admin';
    });

    Route::get('/contact-admin2', function () {
        return 'contact admin';
    });
});
