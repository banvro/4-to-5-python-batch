<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Learnsessionstorage extends Controller
{
    function set_session(Request $r){
        $r->session()->put("username", "kriss moris");
    }

    function get_session(Request $r){
        $check = $r->session()->get("username");
        print_r($check);
    }

    function rmeove_session(Request $r){
        $check = $r->session()->forget("username");
        print_r($check);
    }

    function check_session(Request $r){
        if ($r->session()->has("username")){
            echo "you are loged in";
        }else{
            echo "you are not loged in";
        }
    }
}
