<?php

use App\Http\Controllers\MailController;
use App\Mail\SignUp;
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
Route::view('/login', 'login');
Route::view('/signup', 'signup');
Route::view('/dashboard', 'dashboard.index');
Route::get('/mailto', function(){
    (new MailController)->signupMail('Juned Pothawale','mojuned251@gmail.com',"Hello");
});



