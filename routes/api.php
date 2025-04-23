<?php

use App\Models\Client;
use App\Models\Phone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreditController;
use App\Http\Controllers\InstalmentController;

Route::get('/clients', function () {
  return Client::all();
});
Route::get('/phones', function () {
  return Phone::all();
});

Route::post('/credits', [CreditController::class, 'store']);
Route::get('/credits', [CreditController::class, 'index']);
Route::get('/credits/{id}', [CreditController::class, 'show']);
