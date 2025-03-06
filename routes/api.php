<?php

use App\Http\Controllers\Api\v1\InvoiceController;
use App\Http\Controllers\Api\v1\UserController;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/users', [UserController::class, 'index']);
Route::get('/user/{id}',[UserController::class, 'show']);
Route::post('/store', [UserController::class, 'store']);
Route::patch('/update/{id}', [UserController::class, 'update']);
Route::delete('/delete/{id}', [UserController::class, 'destroy']);


Route::get('/invoices', [InvoiceController::class, 'index']);
Route::get('/invoices/{id}', [InvoiceController::class, 'show']);
Route::post('/invoice',[InvoiceController::class,'store']);