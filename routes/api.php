<?php

use App\Http\Controllers\Auth\AuthController;
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

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
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
