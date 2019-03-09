<?php

namespace App\Repositories\CardRepository;

use App\Models\Card;

class CardRepository
{
    /**
     * @var Card $model
     */
    protected $model;

    /**
     * CardRepository constructor.
     * @param Card $model
     */
    public function __construct(Card $model)
    {
        $this->model = $model;
    }

    public function findCard(int $id)
    {

    }

    /**
     * @param int $userId
     * @return Card
     */
    public function findAllUserCards(int $userId): Card
    {
        return $this->model->where('user_id', $userId)->get();
    }

    /**
     * @param array $attributes
     * @return Card
     */
    public function store(array $attributes): Card
    {
        return $this->model->create($attributes);
    }

    /**
     * @param int $id
     * @param array $attributes
     * @return Card
     */
    public function update(int $id, array $attributes): Card
    {
        return $this->model->find($id)->update($attributes);
    }

    /**
     * @param int $id
     * @return Card
     */
    public function delete(int $id): Card
    {
        return $this->model->find($id)->delete();
    }
}
