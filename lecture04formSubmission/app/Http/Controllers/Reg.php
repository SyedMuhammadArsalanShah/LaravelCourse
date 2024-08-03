<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Reg extends Controller
{
    //

public function index()  {
    return view("signup");

}


public function reg(Request $request)  {
    echo"<pre>";
  print_r($request->all());


}





}
