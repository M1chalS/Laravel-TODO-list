<?php

use App\Http\Controllers\TODOListController;
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

Route::get('/', [TODOListController::class, 'index']);

Route::post('/list', [TODOListController::class, 'store']);

Route::delete('/list/{list}', [TODOListController::class, 'delete']);
