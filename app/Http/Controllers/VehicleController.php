<?php

namespace App\Http\Controllers;

use App\Http\Resources\VehicleResource;
use App\Repository\VehicleRepositoryInterface;
use Illuminate\Http\Request;

class VehicleController extends Controller
{

    private VehicleRepositoryInterface $vehicleRepository;

    public function __construct(VehicleRepositoryInterface $vehicleRepository)
    {
        $this->vehicleRepository = $vehicleRepository;
    }

    public function index()
    {
        $vehicles = $this->vehicleRepository->all();
        return view('Vehicle', ['vehicles' => VehicleResource::collection($vehicles)]);
    }

    public function show($vehicleId)
    {
        $data = $this->vehicleRepository->findVehicle($vehicleId);
        return response()->json([
            'data' => new VehicleResource($data),
            'status' => 'success',
            'message' => 'exito',
        ]);

    }

    public function store(Request $request)
    {
        $data = $this->vehicleRepository->createVehicle($request->all());
        return response()->json([
            'status' => 'success',
            'message' => 'exito',
            'data' => new VehicleResource($data),
        ]);

    }

    public function update(Request $request, $id)
    {
        $vehicle = $this->vehicleRepository->updateVehicle($id, $request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'exito',
            'data' => new VehicleResource($vehicle),
        ]);
    }

    public function delete($id)
    {
        $deleted = $this->vehicleRepository->deleteVehicle($id);

        if ($deleted) {
            return response()->json([
                'status' => 'success',
                'message' => 'Delete client succesful',
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Error when delete client',
            ], 400);
        }
    }

}
