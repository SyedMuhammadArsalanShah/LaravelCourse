<?php

use App\Http\Controllers\Register;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



route::get('/reg',[Register::class ,"index"]);
route::post('/reg',[Register::class ,"formreq"]);

