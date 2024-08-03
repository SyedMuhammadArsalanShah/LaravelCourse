<?php

use App\Http\Controllers\Maheen;
use App\Models\Arham;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admission',[Maheen::class, "create"] );
Route::post('/admission',[Maheen::class, "storedata"] );


Route::get('arhamkadata/', function () {

     $arham=Arham::all();
     echo "<pre>";
     print_r($arham->toArray());
     echo "</pre>";


});
