<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ConnectsController;
use App\Http\Controllers\AccountsController;
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

Route::get('/',[ContentsController::class, 'index']);

Route::get('/',[ConnectsController::class, 'index']);
Route::post('/confirm',[ConnectsController::class, 'confirm']);
Route::post('/',[ConnectsController::class, 'store']);

Route::get('/register',[AccountsController::class, 'index']);



