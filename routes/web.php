<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\OverzichtController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;


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
    return view('home');
})->name('home');



Route::get('/overzicht',[OverzichtController::class, 'index'])-> name('overzicht');


Route::post('/logout', [LogoutController::class, 'loguit'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
// name niet meer nodig , wordt overgerfd van de eerste register route
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
// name niet meer nodig , wordt overgerfd van de eerste register route
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/posts', function () {
    return view('posts.index');
});
