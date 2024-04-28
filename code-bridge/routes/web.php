<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/jobs-applied', function () {
    return view('job-applied');
});

Route::get('/job-detail', function () {
    return view('job-detail');
});

Route::get('/jobs', function () {
    return view('jobs');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/my-jobs', function () {
    return view('my-jobs');
});

Route::get('/post-job', function () {
    return view('post-job');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/saved-jobs', function () {
    return view('saved-job');
});

