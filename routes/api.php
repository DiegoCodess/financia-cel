<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreditController;

Route::post('/credits', [CreditController::class, 'store']);
