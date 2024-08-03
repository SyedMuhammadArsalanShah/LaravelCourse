<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/service', function () {
    return view('service');
});






// Route::get('/home', function () {
//     return view('homee');
// });



Route::get('/info/{name}/{id?}', function ($name, $id=null) {


 echo "Name ".$name."<br>";
 echo "ID ".$id."<br>";
    // return view('homee');
});


Route::get('/home/{name}/{id?}', function ($name, $id=null) {

    $student= "<h1>arham</h1>";
    $data=compact('name', 'id', 'student');
    return view('homee')->with($data);
});
