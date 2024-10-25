<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ModelRepositoryInterface
{
    public function all(): Collection;
    public function createModel(array $data): bool;
    public function findModel($id): ?Model;
    public function updateModel($id, array $data): bool;

}