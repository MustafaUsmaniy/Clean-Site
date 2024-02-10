<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostsController;
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


Route::get('/', [PageController::class, 'index']);
Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('service', [PageController::class,'service'])->name('service');
Route::get('project', [PageController::class, 'project'])->name('project');
Route::get('contact', [PageController::class, 'contact'])->name('contact');


// Route::get('index', [PostsController::class, 'index'])->name('posts.index');
// Route::get('create', [PostsController::class, 'create'])->name('posts.create');
// Route::post('create', [PostsController::class,'store'])->name('posts.store');
// Route::get('posts/{post}', [PostsController::class,'show'])->name('posts.show');
// Route::get('posts/{post}/edit', [PostsController::class, 'edit'])->name('posts.edit');
// Route::put('posts/{post}/edit', [PostsController::class, 'update'])->name('posts.update');
// Route::delete('posts/{post}', [PostsController::class, 'destroy'])->name('posts.destroy');

Route::resources([
    'posts' => PostsController::class,
    'comments' => CommentController::class
]);



Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'register_store'])->name('register.store');