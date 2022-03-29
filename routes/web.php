<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocketController;

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
Route::get('/index',[DocketController::class,'index']);
Route::get('/create',[DocketController::class,'create']);
Route::get('/{id}/edit',[DocketController::class,'edit']);
Route::post('/upload',[DocketController::class,'upload']);
Route::get('/display',[DocketController::class,'display']);
Route::get('/{id}/delete',[DocketController::class,'delete']);
Route::patch('/update',[DocketController::class,'update']);
Route::get('/{id}/completed',[DocketController::class,'completed']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
