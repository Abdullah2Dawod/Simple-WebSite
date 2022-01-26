<?php

use Illuminate\Support\Facades\Route;
use   App\Http\Controllers\studentController;

Route::get('/create/studen' , [ studentController::class , 'create']);
Route::get('/store/studen', [ studentController::class , 'store']);
Route::get('/show/stude' , [ studentController::class , 'show'])->name('show');
Route::get('/edit/student/{id}' , [ studentController::class , 'edit']);
Route::get('update/student/{id}' , [ studentController::class , 'update'])->name('update');
Route::get('/delete/student/{id}' , [ studentController::class , 'delete']);
