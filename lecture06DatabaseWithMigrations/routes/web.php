<?php

use App\Models\Arham;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('arhamkadata/', function () {

     $arham=Arham::all();
     echo "<pre>";
     print_r($arham->toArray());
     echo "</pre>";


});
