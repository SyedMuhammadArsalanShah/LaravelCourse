<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Quran extends Controller
{
    //

    function surahlist()
    {

        // echo "testing ....";

        $data = Http::get("https://api.alquran.cloud/v1/meta");


        return view("index", ["dataset" => $data["data"]["surahs"]["references"]]);
    }



    function surahread($snum)
    {

        // echo "testing ....";

        $data = Http::get("https://api.alquran.cloud/v1/surah/$snum");

        $data1 = Http::get("https://api.alquran.cloud/v1/edition/language");
        return view(
            "detail",
            ["dataset" => $data["data"]["ayahs"], "lang" => $data1["data"]]
        );
    }




}
