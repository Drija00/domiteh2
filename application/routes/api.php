<?php

use App\Http\Controllers\PacijentController;
use App\Http\Controllers\RacunController;
use App\Http\Controllers\AuthController;
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

Route::get('pacijent',[PacijentController::class,'index']);
Route::get('pacijent/{id}',[PacijentController::class,'show']);

Route::get('racun',[RacunController::class,'index']);
Route::get('racun/{id}',[RacunController::class,'show']);

Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
Route::post('/logout',[AuthController::class,'logout']);

Route::delete('pacijent/{id}',[PacijentController::class,'destroy']);
Route::post('pacijent',[PacijentController::class,'store']);
Route::put('pacijent/{id}',[PacijentController::class,'update']);
});