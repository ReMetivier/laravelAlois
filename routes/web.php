<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

Route::get('/',[ HomeController::class, 'home' ])->name('home');
Route::get('/login',[ HomeController::class, 'login' ])->name('login');
Route::get('/register',[ AuthController::class, 'register' ])->name('register');
Route::post('/registerPost',[ AuthController::class, 'RegisterPost' ])->name('RegisterPost');

Route::get('/update{user:id}', [ UserController::class, 'updateUser' ])->name('UserEdit');
Route::patch('/{user:id}', [ UserController::class, 'updateUserPost' ])->name("updateUser");
