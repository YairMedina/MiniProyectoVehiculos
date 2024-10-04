<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class ModelController extends Controller
{
    public function model()
    {
        $models = Brand::all();
        return view('model', ['models' => $models]);
    }



    public function show($id)
    {
    
        $data = Brand::find($id);
        return response()->json([
            'status' => 'success',
            'message' => 'exito',
            'data' => $data
        ]);
    }
    
    public function store(Request $request)
    {
        $data = Brand::create($request->all());
        return response()->json([
            'status' => 'success',
            'message' => 'exito',
            'data' => $data
        ]);
    
    }
    
    public function update(Request $request, $id)
    {
        $model = Brand::findOrFail($id);
        $model->update($request->all());
    
        return response()->json([
            'status' => 'success',
            'message' => 'exito',
            'data' => $model
        ]);
    }
    
    public function delete($id)
    {
       $data = Brand::findOrFail($id)->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'exito',
            'data' => $data
        ]);
    }
    

}
