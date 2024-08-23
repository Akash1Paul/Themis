<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('allLogin', function () {
//     return view('allLogin');
// });

Route::group(['prefix' => 'admin'], function () {
    Route::get('login',[AdminController::class,'login']);
    Route::post('login',[AuthController::class,'login'])->name('admin-login');
    Route::get('logout', [AuthController::class, 'logout'])->name('admin-logout');

    Route::middleware(['auth'])->group(function () {
        Route::get('posts',[AdminController::class,'posts']);
        Route::get('add-post',[AdminController::class,'addPost'])->name('admin-add-post');
        Route::post('add-post',[AdminController::class,'savePost'])->name('admin-save-post');
        Route::get('edit_post/{id}',[AdminController::class,'editPost']);
        Route::post('update-post/{id}',[AdminController::class,'updatePost']);
        Route::get('delete_post/{id}',[AdminController::class,'deletePost']);
        Route::get('delete/{id}',[AdminController::class,'delete']);
        Route::get('users',[AdminController::class,'users']);
    });
});

Route::get('auth/{provider}/redirect',[AuthController::class,'redirect']);
Route::get('auth/{provider}/callback',[AuthController::class,'callback']);

Route::group(['prefix' => 'user'], function () {
    Route::get('login',[UserController::class,'login']);
    Route::get('logout', [AuthController::class, 'userlogout'])->name('user-logout');
    
    Route::middleware(['auth'])->group(function () {
        Route::get('home',[UserController::class,'home']);
        Route::get('profile',[UserController::class,'profile']);
    });
});