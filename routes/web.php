<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Api\UserApiController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('users', UserController::class);