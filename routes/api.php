<?php
use app\Http\Controllers\API\KPController;
use app\Http\Controllers\API\SkripsiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('kp', [\App\Http\Controllers\API\KPController::class, 'index']);
Route::get('skripsi', [\App\Http\Controllers\API\SkripsiController::class, 'index']);



