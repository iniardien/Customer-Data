<?php

use App\Http\Controllers\CustomerDataController;
use Illuminate\Support\Facades\Route;
Route::get('/', [CustomerDataController::class,'index'])->name('index');
Route::get('/add', [CustomerDataController::class,'add'])->name('add');
Route::post('/add', [CustomerDataController::class,'add_data'])->name('add_data');
Route::get('/delete/{record}', [CustomerDataController::class,'delete'])->name('delete');
Route::get('/edit/{record}', [CustomerDataController::class,'edit'])->name('edit');
Route::post('/edit/{record}', [CustomerDataController::class,'edit_data'])->name('edit_data');
