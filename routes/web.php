<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[UserController::class, 'login'])->name('login');
Route::post('/',[UserController::class, 'validLogin']);



Route::post('/registration',[UserController::class, 'store']);
Route::get('/registration',[UserController::class, 'register']);

Route::middleware('auth')->group(function () {

    Route::get('dashboard',[UserController::class, 'dashboard']);
    Route::post('logout', [UserController::class, 'logout'])->name('logout');

});