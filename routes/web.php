<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout_adm.index');
});

Route::get('/area01', function () {
    return view('area01');
});

Route::get('/area02', function () {
    return view('area02');
});

Route::get('/area03', function () {
    return view('area03');
});

Route::get('/area04', function () {
    return view('area04');
});

Route::get('/area05', function () {
    return view('area05');
});