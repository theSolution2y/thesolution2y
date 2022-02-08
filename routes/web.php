<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudyController;
use App\Http\Controllers\ContributorController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\ChapterController;
use App\Models\Post;

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
Route::get('admin/category/delete/{id}',[CategoryController::class,'delete']);
// to know more use => php aritsan route:list

// post
Route::get('admin/post/{id}/delete',[PostController::class,'destroy']);
Route::resource('/admin/post', PostController::class);

// -------------------------------------------------------------------
// user side

Route::view('/contactus','contact');
Route::post('/contactus',[ContactController::class,'send']);

Route::get('/', function () {
    return view('home');
});

Route::get('/contributor', [ContributorController::class, 'submit']);

Route::post('/contributor', [ContributorController::class, 'store']);

Route::get('/about', function () {
    return view('about');
});

Route::view('/login','login');

Route::post('/signup',[SignupController::class ,'send']);

// study here is to show all categories 
Route::get('/study', [StudyController::class, 'study']);

// to go to the page to read the pdfs
Route::get('study/{id}/read',[StudyController::class, 'read']);

Route::post('/signin', [SigninController::class, 'submit_login']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/pdf/{id}',[ChapterController::class,'read']);
Route::get('pdf/{id}',[ChapterController::class,'read']);
// Route::get('/pdf/{id}', function($id) {
//     $file = Post::find($id);
//     return response()->file(storage_path($file->pdf_path));
// })->name('chapter');