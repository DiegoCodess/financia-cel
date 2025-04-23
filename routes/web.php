<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreditController;

Route::post('/credits', [CreditController::class, 'store']);
Route::get('/', function () {
    return view('welcome');
});
