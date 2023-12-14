<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request; 

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("title")->with("myalltodos", todo::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $titl = $request->input("title");
        $msg = $request->input("des");

        // echo "$titl $msg";
        $resp = new todo;
        $resp->title = $titl;
        $resp->Decs = $msg;
        $resp->save();

        return redirect("/");
    }

    /**
     * Display the specified resource.
     */
    public function show(todo $todo)
    {
        return view("title")->with("myalltodos", todo::all());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(todo $todo)
    {
        //
    }
}
