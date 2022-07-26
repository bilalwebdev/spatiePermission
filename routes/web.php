<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Dotenv\Repository\Adapter\GuardedWriter;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;

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
    return view('welcome');
});

Route::get('/dashboard', [HomeController::class, 'index']
 //Role::create(['name' => 'writer']);
)->middleware(['auth'])->name('dashboard');
Route::get('/post', [PostController::class, 'index'])->name('post')->middleware('role:writer|admin');
Route::post('/add-post', [PostController::class, 'addPost'])->name('add-post');
Route::post('/update-post/{id}', [PostController::class, 'updatePost'])->name('update-post');
Route::get('/all-posts', [PostController::class, 'allPosts'])->name('all-post');
Route::get('/edit-post/{id}', [PostController::class, 'editPost'])->name('edit-post')->middleware('permission:edit post');

require __DIR__.'/auth.php';
