<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\abc;

Route::get('/', function () {
    return view('welcome');
});

Route::get('abc', function () {
    return view('foarm');
});

Route::post('submition',[abc::class,'register']);


Route::get('viewdata',[abc::class,'view']);