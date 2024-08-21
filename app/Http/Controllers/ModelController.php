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
}
