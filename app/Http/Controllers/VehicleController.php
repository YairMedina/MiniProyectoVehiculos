<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
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
        return view('Vehicle', ['vehicles' => $vehicles]);
    }

    public function show($vehicleId)
    {
        return response()->json([
            'data' => $this->vehicleRepository->findVehicle($vehicleId),
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
            'data' => $data,
        ]);

    }

    public function update(Request $request, $id)
    {
        $vehicle = $this->vehicleRepository->updateVehicle($id, $request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'exito',
            'data' => $vehicle,
        ]);
    }

    public function delete($id)
    {
        $data = Vehicle::findOrFail($id)->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'exito',
            'data' => $data,
        ]);
    }

}
