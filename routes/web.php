<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
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
    return view('home');
});

Route::get('/admin/login', [AdminController::class, 'login']);

Route::post('/admin/login', [AdminController::class, 'submit_login']);

Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);

Route::get('/layout', function () {
    return view('layout.layout');
});

Route::get('/contributor', function () {
    return view('contributor');
});

Route::resource('/admin/category', CategoryController::class);
// to know more use => php aritsan route:list