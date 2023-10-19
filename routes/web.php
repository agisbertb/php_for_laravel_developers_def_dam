<?php

use App\Http\Controllers\PagesController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

Route::get('/',[TaskController::class,'index']);
Route::get('/tasks',[TaskController::class,'index']);

Route::get('/users',[UserController::class,'index']);

Route::get('/contact',[PagesController::class,'contact']);

Route::get('/about',[PagesController::class,'about']);
