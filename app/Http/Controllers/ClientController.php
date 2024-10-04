<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function Client()
    {
        $clients = Client::all();
        return view('client', ['clients' => $clients]);
    }



public function show($id)
{

    $data = Client::find($id);
    return response()->json([
        'status' => 'success',
        'message' => 'exito',
        'data' => $data
    ]);
}

public function store(Request $request)
{
    $data = Client::create($request->all());
    return response()->json([
        'status' => 'success',
        'message' => 'exito',
        'data' => $data
    ]);

}

public function update(Request $request, $id)
{
    $client = Client::findOrFail($id);
    $client->update($request->all());

    return response()->json([
        'status' => 'success',
        'message' => 'exito',
        'data' => $client
    ]);
}

public function delete($id)
{
   $data = Client::findOrFail($id)->delete();
    return response()->json([
        'status' => 'success',
        'message' => 'exito',
        'data' => $data
    ]);
}

    
}
