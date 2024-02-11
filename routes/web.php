<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SwaggerController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CharactersController;


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



Route::get('/', [HomeController::class, 'getAllCharacters'])->name('homepage');
Route::get('/swagger',[SwaggerController::class,'index'])->name('docSwagger');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'insert'])->name('registerprocess');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'verif'])->name('loginprocess');
Route::get('/', [AuthController::class, 'logout'])->name('logout');
Route::get('/characters',[HomeController::class,'pageCharacters'])->name('characters');
Route::get('/character/{name}',[HomeController::class,'pageOnlyCharacter'])->name('character');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');



