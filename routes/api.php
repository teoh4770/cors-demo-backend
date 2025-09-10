<?php

use App\Http\Controllers\Api\MessageController;
use Illuminate\Support\Facades\Route;

Route::get('/greeting', [MessageController::class, 'index']);
