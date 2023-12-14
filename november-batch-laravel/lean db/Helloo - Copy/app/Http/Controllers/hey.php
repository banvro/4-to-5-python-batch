<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class hey extends Controller
{
    function get(){
        $x = DB::table("cars")->where("id", ">", 1)->get();
        print_r($x);
    }
}
