<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ClientRepositoryInterface
{
    public function all(): Collection;
    public function createClient(array $data): bool;
    public function findClient($id): ?Model;
    public function updateClient($id, array $data): bool;
    public function deleteClient($id): bool;

}
