<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('Vehicle', ['vehicles' => $vehicles]);
    }





public function show($id)
{

    $data = Vehicle::find($id);
    return response()->json([
        'status' => 'success',
        'message' => 'exito',
        'data' => $data
    ]);
}

public function store(Request $request)
{
    $data = Vehicle::create($request->all());
    return response()->json([
        'status' => 'success',
        'message' => 'exito',
        'data' => $data
    ]);

}

public function update(Request $request, $id)
{
    $vehicle = Vehicle::findOrFail($id);
    $vehicle->update($request->all());

    return response()->json([
        'status' => 'success',
        'message' => 'exito',
        'data' => $vehicle
    ]);
}

public function delete($id)
{
   $data = Vehicle::findOrFail($id)->delete();
    return response()->json([
        'status' => 'success',
        'message' => 'exito',
        'data' => $data
    ]);
}

}
