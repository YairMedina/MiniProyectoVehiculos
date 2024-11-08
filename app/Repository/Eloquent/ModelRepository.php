<?php

namespace App\Repository\Eloquent;

use App\Models\Brand;
use App\Repository\ModelRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ModelRepository implements ModelRepositoryInterface
{

    protected $model;

    public function __construct(Brand $model)
    {
        $this->model = $model;
    }

    public function all(): Collection
    {
        return $this->model->all();
    }

    public function createModel(array $data): bool
    {
        return $this->model->create($data);
    }

    public function findModel($id): ?Brand
    {
        return $this->model->find($id);
    }

    public function updateModel($id, array $data): bool
    {
        $model = $this->model->find($id);
        if ($model) {
            return $model->update($data);
        }
        return false;
    }

    public function deleteModel($id): bool
    {
        $model = $this->model->find($id);
        if ($model) {
            return $model->delete();
        }
        return false;
    }
}
