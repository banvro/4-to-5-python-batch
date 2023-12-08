<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LeanQueryBuilder extends Controller
{
    function showdata(){
        $mydata = DB::table("cars")->get();
        // $mydata = DB::table("cars")->where("id",">", 1)->get();
        // $mydata = DB::table("cars")->where("id", 2)->exists();

        // $mydata = DB::table("cars")->where("id", 20)->doesntexist();
        
        // $mydata = DB::table("cars")->count();
        // $mydata = DB::table("cars")->min("id");
        // $mydata = DB::table("cars")->max("id");

        // $mydata = DB::table("cars")->select("id", "name", "emial")->get();


        $mydata = DB::select("select * from cars");

        echo "<pre>";
        print_r($mydata);
        // echo "$mydata";
    }


    function insertdata(){
        DB::table("cars")->insert(
            array("name"=>"newname", "emial"=>"newname@gmail.com", )
        );
    }

    

    function updatedata(){
        DB::table("cars")->where("id", 1)->update(
            array("name"=>"rrrrrr", "emial"=>"rrrrrrrr@gmail.com", )
        );
    }

    

    function deletedata(){
        DB::table("cars")->where("id", 2)->delete();
    
    }





}

// where(column name, condation, value)