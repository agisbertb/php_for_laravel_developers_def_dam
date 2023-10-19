<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('tasks',[
        'tasks' => []
    ]);
});

Route::get('/', function () {
    $task1 = new stdClass();
    $task1->id = 1;
    $task1->title = "Task 1";
    $task1->description = "Bla Bla Bla";
    $task1->completed = 1;
    $task2 = new stdClass();
    $task2->id = 2;
    $task2->title = "Task 2";
    $task2->description = "Bla Bla Bla";
    $task2->completed = 1;

    $task3 = new stdClass();
    $task3->id = 3;
    $task3->title = "Task 2";
    $task3->description = "Bla Bla Bla";
    $task3->completed = 1;

    $tasks = [
        $task1,
        $task2,
        $task3
    ];

    return view('tasks',[
        'tasks'=> $tasks
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
