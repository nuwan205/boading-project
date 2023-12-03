<?php

use Illuminate\Support\Facades\Route;
use Laravel\Lumen\Routing\Router;
use App\Http\Controllers\authController;


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
    return view('client/index');
});

Route::get('/single', function () {
    return view('client/singleBoad');
});

Route::get('/dashboard', function () {
    return view('owner/boadAdd');
})->middleware('auth.check')->name('dashboard');

Route::get('/catalogue', function () {
    return view('client/catalogue');
});

Route::get('/login', function () {
    return view('/auth/login');
})->name('login');

Route::get('/register', function () {
    return view('/auth/register');
});

//Api calls
Route::post('/api/login', [authController::class,'login'])->name('user_login');
Route::post('/api/register', [authController::class,'register'])->name('user_register');
Route::post('/api/logout', [authController::class,'logout'])->name('logout');


