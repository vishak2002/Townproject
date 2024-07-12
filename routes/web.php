<?php

use App\Http\Controllers\Towncontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('profile');
});

Route::get('/Register', function () {
    return view('Register');
});

Route::get('/itemshow', function () {
    return view('itemshow');
});

Route::post('/Register',[Towncontroller::class,'save']);
Route::get('/itemshow',[Towncontroller::class,'show']);
Route::get('/edititem/{id}',[Towncontroller::class,'edit']);
Route::post('/edititem/{id}',[Towncontroller::class,'update']);
Route::get('/delete/{id}',[Towncontroller::class,'delete']);
