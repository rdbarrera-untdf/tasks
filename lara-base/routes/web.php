<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tareas',function () {
    return view('tareas');
});

Route::get('/create',function () {
   return view('create');
});

Route::get('/edit',function () {
   return view('edit');
});
