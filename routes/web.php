<?php

declare(strict_types=1);

use App\Http\Controllers\EdurioController;
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

Route::get('/', [EdurioController::class, 'show']);
Route::get('store', [EdurioController::class, 'store']);
