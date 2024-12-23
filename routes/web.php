<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    return 'Halo, Selamat Datang di Laravel!';
});

// Route::get('/user/{bintang}', function ($bintang) {
//     return 'Halo, ' . $bintang;
// });

Route::get('/view-halo', function () {
    return view('halo');
});

Route::get('/halo-controller', [App\Http\Controllers\HaloController::class, 'index']);


Route::get('/form', function () {
    return view('form');
})->name('form');

Route::post('/form', [FormController::class, 'submit'])->name('form.submit');

Route::get('/master', function () {
    return view('master');
});

Route::get('/home', [HomeController::class, 'home']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);


    