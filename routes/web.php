<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/courses/{id}', function ($id) {
    $courses = [
        1 => ['title' => 'Learn PHP Basics', 'description' => 'A beginner-friendly course.'],
        2 => ['title' => 'Master Laravel', 'description' => 'Dive deeper into the Laravel framework.'],
        3 => ['title' => 'Web Development Fundamentals', 'description' => 'Learn the essentials of web development.'],
    ];

    if (!array_key_exists($id, $courses)) {
        abort(404);
    }
    return view('courseDetails', ['course' => $courses[$id]]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});
