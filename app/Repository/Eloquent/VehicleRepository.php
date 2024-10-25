<?php

namespace App\Repository\Eloquent;

use App\Models\Vehicle;
use App\Repository\VehicleRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class VehicleRepository implements VehicleRepositoryInterface
{

    protected $model;

    public function __construct(Vehicle $model)
    {
        $this->model = $model;
    }

    public function all(): Collection
    {
        return $this->model->all();
    }

    public function createVehicle(array $data): bool
    {
        return $this->model->create($data) ? true : false;
    }

    public function findVehicle($id): ?Model
    {
        return $this->model->find($id);
    }

    public function updateVehicle($id, array $data): bool
    {
        $vehicle = $this->model->find($id);
        if ($vehicle) {
            return $vehicle->update($data) ? true : false;
        }
        return false;
    }

}
