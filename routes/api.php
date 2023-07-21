<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\CutiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
//


Route::get('/cuti',[CutiController::class,'index']);
Route::post('/add',[KaryawanController::class,'add']);
Route::put('/update',[KaryawanController::class,'update']);
Route::get('/karyawan',[KaryawanController::class,'view']);
Route::delete('/delete',[KaryawanController::class,'delete']);
Route::get('/topview',[KaryawanController::class,'topView']);
Route::get('/karyawancuti',[KaryawanController::class,'karyawanCuti']);
Route::get('/sisacuti',[KaryawanController::class,'sisaCuti']);