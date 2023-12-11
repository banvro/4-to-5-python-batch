<?php

namespace App\Http\Controllers;

use App\Models\Car; 
use Illuminate\Http\Request;

class CarController extends Controller
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
        return view("addRecord");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nm = $request->input("name");
        $em = $request->input("email");
        
        $resp = new Car;
        $resp->name = $nm;
        $resp->emial = $em;
        $resp->save();

        return redirect("showdata");
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view("showdata")->with("myalldata", Car::all());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car, $id)
    {   
        Car::destroy(array('id', $id));
        return redirect("/showdata");
    }
}
