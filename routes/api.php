<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    return view('authentication.Login');
    // return redirect()->route('product.index');
});
Route::get('/login', function () {
    return view('authentication.Login');
    // return redirect()->route('product.index');
});
Route::get('/register', function () {
    return view('authentication.Register');
});
