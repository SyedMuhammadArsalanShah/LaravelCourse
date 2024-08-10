<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arham;

class Maheen extends Controller
{
    //


    public function create()
    {
        $title = "Add Registration";
        $url = url("/admission");
        $data = compact("title", "url");
        return view("admission")->with($data);
    }


    public function storedata(Request $request)
    {

        echo "<pre>";
        print_r($request->all());



        $arham = new Arham;
        $arham->name = $request["name"];
        $arham->email = $request["email"];
        $arham->gender = $request["gen"];
        $arham->dob = $request["dob"];
        $arham->address = $request["address"];
        $arham->city = $request["city"];
        $arham->location = $request["location"];
        $arham->save();

        return redirect("/showquery");
    }


    public function showkaro()
    {

        $arham =  Arham::all();

        // echo "<pre>";
        // print_r($arham->toArray());

        $data = compact("arham");


        return view("show")->with($data);
    }





    public function delete($std_id)
    {
        Arham::find($std_id)->delete();
        return redirect()->back();
    }




    public function edit($std_id)
    {


        $arham = Arham::find($std_id);

        if (is_null($arham)) {

            return redirect("/showquery");
        } else {



            $title = "update Registration";
            $url = url("/admission/update/") . "/" . $std_id;
            $data = compact("arham", "title", "url");


            return view("admission")->with($data);
        }
    }










    public function update(Request $request, $std_id)
    {

        $arham = Arham::find($std_id);
        $arham->name = $request["name"];
        $arham->email = $request["email"];
        $arham->gender = $request["gen"];
        $arham->dob = $request["dob"];
        $arham->address = $request["address"];
        $arham->city = $request["city"];
        $arham->location = $request["location"];
        $arham->save();

        return redirect("/showquery");
    }
}
