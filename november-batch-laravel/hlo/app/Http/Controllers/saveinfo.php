<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class saveinfo extends Controller
{
    function hlo(Request $request){
        // echo "this is controller";
        $request->validate([
            "name" => "required|min:5|max:20",
            "email" => "required|email",
            "desc" => "required"
        ]);
        echo "form submitted sucessfully";
    }
}
