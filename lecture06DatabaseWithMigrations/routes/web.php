<?php

use App\Http\Controllers\Maheen;
use App\Models\Arham;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admission',[Maheen::class, "create"] );
Route::post('/admission',[Maheen::class, "storedata"] );
Route::get('/showquery',[Maheen::class,"showkaro"] );
Route::get('/admission/delete/{std_id}',[Maheen::class,"delete"] );









Route::get('/admission/edit/{std_id}',[Maheen::class,"edit"] );
Route::post('/admission/update/{std_id}',[Maheen::class,"update"] );


Route::get('arhamkadata/', function () {

     $arham=Arham::all();
     echo "<pre>";
     print_r($arham->toArray());
     echo "</pre>";


});
