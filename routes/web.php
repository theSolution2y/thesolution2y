<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudyController;
use App\Http\Controllers\ContributorController;
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


// admin side
Route::get('/admin/login', [AdminController::class, 'login']);

Route::post('/admin/login', [AdminController::class, 'submit_login']);

Route::get('admin/logout',[AdminController::class, 'logout']);

Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);

Route::resource('/admin/category', CategoryController::class);
// to know more use => php aritsan route:list

// post
Route::get('admin/post/{id}/delete',[PostController::class,'destroy']);
Route::resource('/admin/post', PostController::class);

// -------------------------------------------------------------------
// user side


Route::get('/', function () {
    return view('home');
});

Route::get('/contributor', [ContributorController::class, 'submit']);

Route::post('/contributor', [ContributorController::class, 'store']);

Route::get('/about', function () {
    return view('about');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/study', [StudyController::class, 'study']);