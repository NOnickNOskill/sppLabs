<?php

namespace App\Repositories\UserRepository;

use App\Models\User;
use phpDocumentor\Reflection\Types\Integer;

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
     * @param Integer $id
     * @return User
     */
    public function find(Integer $id): User
    {
        return $this->model->where('id', $id)->get();
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
