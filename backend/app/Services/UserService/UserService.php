<?php

namespace App\Services\UserService;

use App\Models\User;
use App\Repositories\UserRepository\UserRepository;

class UserService
{
    /**
     * @var UserRepository $userRepository
     */
    protected $userRepository;

    /**
     * UserService constructor.
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param int $id
     * @return User
     */
    public function find(int $id): User
    {
        return $this->userRepository->find($id);
    }

    /**
     * @param array $attributes
     * @return User
     */
    public function store(array $attributes): User
    {
        return $this->userRepository->store($attributes);
    }
}
