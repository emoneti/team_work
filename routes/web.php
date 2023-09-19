<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/home',[StudentController::class,'student']);
Route::get('/form',[StudentController::class,'form']);
Route::POST('/store',[StudentController::class,'store']);
Route::get('/edit/{id}',[StudentController::class,'edit']);
Route::put('/update/{id}',[StudentController::class,'update']);
Route::delete('/delete/{id}',[StudentController::class,'delete']);

