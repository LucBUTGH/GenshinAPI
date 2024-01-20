<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SwaggerController;
use App\Http\Controllers\AuthController;


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
    return view('homepage');
})->name('homepage');

Route::get('/', [HomeController::class, 'home'])->name('home');


Route::get('/swagger',[SwaggerController::class,'index'])->name('docSwagger');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'insert'])->name('registerprocess');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'verif'])->name('loginprocess');
Route::get('/', [AuthController::class, 'logout'])->name('logout');



