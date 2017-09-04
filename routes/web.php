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
    return view('login');
});

Route::get('/admin/admin-welcome', function () {
    return view('admin/admin');
});

Route::get('/admin/client', function () {
    return view('admin/client/client');
});

Route::get('/admin/add-client', function () {
    return view('admin/client/add-client');
});

Route::get('/admin/edit-client', function () {
    return view('admin/client/edit-client');
});
