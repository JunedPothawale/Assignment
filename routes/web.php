<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ProfileController;
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
    return redirect('/login');
});


Route::middleware(['guest'])->group(function () {
    Route::get('/signup', [AuthController::class, 'signUpView']);
    Route::post('/signup', [AuthController::class, 'signUp'])->name('signup');
    Route::view('/login', 'login');
    Route::get('/logout', [AuthController::class, 'logOut']);
    Route::post('/login', [AuthController::class, 'logIn'])->name('login');
});
Route::middleware(['auth'])->group(function () {
    Route::view('/dashboard', 'dashboard.index');
    Route::get('/profile', [ProfileController::class, 'viewUserDetails']);
});
