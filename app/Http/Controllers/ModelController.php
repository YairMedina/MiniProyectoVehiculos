<?php

namespace App\Http\Controllers;

use App\Http\Resources\ModelResource;
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
        return view('Model', ['models' => ModelResource::collection($model)]);
    }


    public function show($modelId)
    {
        $data = $this->modelRepository->findModel($modelId);
        return response()->json([
            'data' => new ModelResource($data),
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
            'data' => new ModelResource($data),
        ]);

    }

    public function update(Request $request, $id)
    {
        $model = $this->modelRepository->updateModel($id, $request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'exito',
            'data' => new ModelResource($model),
        ]);
    }



    public function delete($id)
    {
        $deleted = $this->modelRepository->deleteModel($id);
    
        if ($deleted) {
            return response()->json([
                'status' => 'success',
                'message' => 'Delete client succesful'
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Error when delete client'
            ], 400);
        }
    }
}
