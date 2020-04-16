<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('base.home.index');
});

Route::get('blog', function () {
    return view('base.blog.index');
});

Route::get('blog/1', function () {
    return view('base.blog.single');
});

Route::get('commits', function () {
    return view('base.commits.index');
});

Route::prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('dashboard.index');
    });
});
