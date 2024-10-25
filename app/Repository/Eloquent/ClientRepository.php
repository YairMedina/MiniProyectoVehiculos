<?php

namespace App\Repository\Eloquent;

use App\Models\Client;
use App\Repository\ClientRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ClientRepository implements ClientRepositoryInterface
{

    protected $model;

    public function __construct(Client $model)
    {
        $this->model = $model;
    }

    public function all(): Collection
    {
        return $this->model->all();
    }

    public function createClient(array $data): bool
    {
        return $this->model->create($data) ? true : false;
    }

    public function findClient($id): ?Client
    {
        return $this->model->find($id);
    }

    public function updateClient($id, array $data): bool
    {
        $model = $this->model->find($id);
        if ($model) {
            return $model->update($data) ? true : false;
        }
        return false;
    }

}
