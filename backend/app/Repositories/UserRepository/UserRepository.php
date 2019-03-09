<?php

namespace App\Repositories\UserRepository;

use App\Models\User;

class UserRepository
{
    /**
     * @var User $model
     */
    protected $model;

    /**
     * UserRepository constructor.
     * @param User $model
     */
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    /**
     * @param int $id
     * @return User
     */
    public function find(int $id): User
    {
        return $this->model->where('id', $id)->firstOrfail();
    }

    /**
     * @param array $attributes
     * @return User
     */
    public function store(array $attributes): User
    {
        return $this->model->create($attributes);
    }
}
