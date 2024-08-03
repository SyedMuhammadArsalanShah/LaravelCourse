<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Register extends Controller
{
    //

    public function index()
    {


        return view("registration");
    }


    public function formreq(Request $request)
    {

        $request->validate(
            [
                "username" => "required",
                "useremail" => "required|email",
                // "password" => "required|confirmed",
                // "password_confirmation"=>"required",
                "password" => "required",
                "password_config"=>"required|same:password"

            ]
        );

        echo "<pre>";
        print_r($request->all());
    }
}
