<?php

namespace App\Repositories;
use App\Models\Concession;
use App\Repositories\Contracts\ConcessionRepositoryInterface;


class ConcessionRepository implements ConcessionRepositoryInterface
{
    public function create(array $data): object
    {
        return Concession::create($data);
    }
}