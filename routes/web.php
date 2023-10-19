<?php

use App\Models\TaskP;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('tasks',[
        'tasks' => []
    ]);
});

Route::get('/', function () {
    return view('tasks',[
        'tasks'=> TaskP::all()
    ]);
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});
