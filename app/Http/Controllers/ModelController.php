<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Repository\ModelRepositoryInterface;
use Illuminate\Http\Request;

class ModelController extends Controller
{

    private ModelRepositoryInterface $modelRepository;

    public function __construct(ModelRepositoryInterface $modelRepository)
    {
        $this->modelRepository = $modelRepository;
    }

    public function model()
    {
        $model = $this->modelRepository->all();
        return view('Model', ['models' => $model]);
    }

    public function show($modelId)
    {
        return response()->json([
            'data' => $this->modelRepository->findModel($modelId),
            'status' => 'success',
            'message' => 'exito',
        ]);

    }

    public function store(Request $request)
    {
        $data = $this->modelRepository->createModel($request->all());
        return response()->json([
            'status' => 'success',
            'message' => 'exito',
            'data' => $data,
        ]);

    }

    public function update(Request $request, $id)
    {
        $model = $this->modelRepository->updateModel($id, $request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'exito',
            'data' => $model,
        ]);
    }

    public function delete($id)
    {
        $data = Brand::findOrFail($id)->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'exito',
            'data' => $data,
        ]);
    }

}
