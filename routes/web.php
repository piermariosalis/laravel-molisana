<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('partials.home');
})->name('home');

#Products


Route::get('products', function () {

    $pasta = config('data.pasta');

    $pasta_lunga = array_filter($pasta, function ($pasta) {
        return $pasta["tipo"] == "lunga";
    });

    $pasta_corta = array_filter($pasta, function ($pasta) {
        return $pasta["tipo"] == "corta";
    });

    $pasta_cortissima = array_filter($pasta, function ($pasta) {
        return $pasta["tipo"] == "cortissima";
    });

    return view('partials.products', compact("pasta_lunga", "pasta_corta", "pasta_cortissima"));
})->name('products');

Route::get('product/{id}', function ($id) {
    $pasta = config('data.pasta');
    return view('partials.product', compact('id', 'pasta'));
})->name('product');

Route::get('contacts', function () {
    return view('partials.contacts');
})->name('contacts');
