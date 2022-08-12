<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', [ProductController::class, 'index']);

Route::get('/category/{category}', [ProductController::class, 'showCategory']);

Route::get('/login', function(){
    return view('auth.login');
});

Route::post('/login', [LoginController::class , 'Authentificate']);

Route::get('/logout', [LogoutController::class, 'logout']);

Route::get('/dashbord', [UserController::class, 'index']);

Route::get('/register', function () {
    return view('auth.register');
});



