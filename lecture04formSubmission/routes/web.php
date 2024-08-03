<?php

use App\Http\Controllers\Reg;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get("/register",[Reg::class,"index"]);
Route::post("/register",[Reg::class,"reg"]);
