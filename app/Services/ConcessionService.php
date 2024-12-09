<?php

namespace App\Services;

use App\Repositories\Contracts\ConcessionRepositoryInterface;
use App\Consts\UserRoleConst;
use Illuminate\Support\Facades\Auth;

class ConcessionService
{
    protected $concessionRepository;

    public function __construct(ConcessionRepositoryInterface $concessionRepository)
    {
        $this->concessionRepository = $concessionRepository;
    }

    public function createConcession(array $data): object
    {
      
        // Handle image upload
        if (isset($data['image'])) {
            $data['image'] = $data['image']->store('concessions', 'public');
        }

        return $this->concessionRepository->create($data);
    }
}