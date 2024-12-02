<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view('client.index');
});

Route::get('/admin_home', function(){
    return view('admin.dashbord');
});