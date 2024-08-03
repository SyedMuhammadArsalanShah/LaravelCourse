<?php

use App\Http\Controllers\Quran;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




Route::get("/index", [Quran::class,"surahlist"]);
Route::get("/read/{surahnumber}", [Quran::class,"surahread"]);
