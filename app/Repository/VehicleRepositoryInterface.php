<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface VehicleRepositoryInterface
{
    public function all(): Collection;
    public function createVehicle(array $data): bool;
    public function findVehicle($id): ?Model;
    public function updateVehicle($id, array $data): bool;

}
