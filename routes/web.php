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
