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
    return view('authentication.Login');
    // return redirect()->route('product.index');
});
Route::get('/login', function () {
    return view('authentication.Login');
    // return redirect()->route('product.index');
})->name('login');
Route::get('/register', function () {
    return view('authentication.Register');
})->name('register');

// Route::resource('product', ProductController::class);
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
