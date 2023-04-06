<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/customers',[CustomerController::class,'index'])->name('customer.index');
Route::get('/customers/create',[CustomerController::class,'create']);
Route::post('/customers',[CustomerController::class,'store'])->name('customer.store');
Route::get('/customers/{customerID}',[CustomerController::class,'show'])->name('customer.show');
Route::get('/customers/{customerID}/edit',[CustomerController::class,'edit'])->name('customer.edit');
Route::put('/customers/{customerID}',[CustomerController::class,'update'])->name('customer.update');
Route::delete('/customers/{customerID}',[CustomerController::class,'destroy'])->name('customer.destroy');